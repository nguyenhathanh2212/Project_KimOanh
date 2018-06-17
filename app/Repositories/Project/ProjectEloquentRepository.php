<?php
namespace App\Repositories\Project;
use App\Repositories\EloquentRepository;
use App\Models\Project;
use Session;
use Auth;
use DB;
use App\Traits\ProcessFile;

class ProjectEloquentRepository extends EloquentRepository implements ProjectInterface
{
    use ProcessFile;
    
    public function getModel()
    {
        return Project::class;
    }

    public function getAllProjectsPaginate()
    {

        return $this->model->orderBy('created_at', 'DESC')->paginate(config('setting.paginate_admin'));
    }

    public function getProjectsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC")
    {
        if($type_id == null) return ;

        return $this->model->where('type_id', $type_id)->orderBy($sortBy, $order)->limit($limit)->get();
    }

    public function getNewProjects()
    {
        return $this->model->orderBy('created_at', 'desc')->limit(config('setting.limit_top_project'))->get();
    }

    public function createProject($request)
    {
        $data = $request->only([
            'type_id',
            'title',
            'preview',
            'location_content',
        ]);

        $data['subdivision_picture'] = $request->subdivision_picture ? $this->upLoadFile($request, 'subdivision_picture', config('setting.path_upload_picture')) : '';
        $data['location_picture'] = $request->location_picture ? $this->upLoadFile($request, 'location_picture', config('setting.path_upload_picture')) : '';
        $project = $this->model->create($data);

        if (!$project) {
            throw new Exception("Error Processing Request", 1);
        }
        //save picture and video
        $picture = $request->picture ? $this->upLoadFile($request, 'picture', config('setting.path_upload_picture')) : '';
        $video = $request->video_upload ? $this->upLoadFile($request, 'video_upload', config('setting.path_upload_picture')) : $request->video_url;

        $project->pictures()->create(['name' => $picture]);
        $project->videos()->create(['name' => $video]);

        // save utilities
        foreach ($request->title_utilities as $key => $value) {
            $utilityData = [
                'title' => $value,
                'content' => $request->title_utilities[$key],
            ];
            $utility = $project->utilities()->create($utilityData);
            $pictureUtility = isset($request->picture_utilities[$key])
                ? $this->upLoadFile2($request->picture_utilities[$key], config('setting.path_upload_picture')) : '';

            if($pictureUtility) {
                $utility->pictures()->create(['name' => $pictureUtility]);
            }
        }

        // save overview
        $dataOverView = $request->only([
            'position',
            'area',
            'investment',
            'structure',
            'utility_local',
            'utility_link',
            'contract',
        ]);

        $project->overview()->create($dataOverView);

        return $project;
    }

    public function deleteProject($id)
    {
        $project = $this->model->findOrFail($id);
        $pictures = $project->pictures;
        $videos = $project->videos;
        $utilities = $project->utilities;
        $this->deleteFile($project->subdivision_picture);
        $this->deleteFile($project->location_picture);

        if ($project->pictures()->delete()) {
            foreach ($pictures as $picture) {
                $this->deleteFile($picture->name);
            }
        }

        if ($project->videos()->delete()) {
            foreach ($videos as $video) {
                $this->deleteFile($video->name);
            }
        }

        if ($project->utilities()->delete()) {
            foreach ($utilities as $utilities) {
                $pictureUtility = $utilities->pictures->first();

                if ($utilities->pictures()->delete()) {
                    $this->deleteFile($pictureUtility->name);
                }
            }
        }

        $project->overview()->delete();

        return $project->delete();
    }

    public function updateProject($request, $id)
    {
        $project = $this->model->findOrFail($id);
        $data = $request->only([
            'type_id',
            'title',
            'preview',
            'location_content',
        ]);

        if ($request->subdivision_picture) {
            $data['subdivision_picture'] = $this->upLoadFile($request, 'subdivision_picture', config('setting.path_upload_picture'));
            $this->deleteFile($project->subdivision_picture);    
        }

        if ($request->location_picture) {
            $data['location_picture'] = $this->upLoadFile($request, 'location_picture', config('setting.path_upload_picture'));
            $this->deleteFile($project->location_picture);    
        }

        $project = $this->model->update($data);

        //update picture and video
        if ($request->picture) {
            $picture = $this->upLoadFile($request, 'picture', config('setting.path_upload_picture'));
            $this->deleteFile($project->pictures->first()->name);
            $project->pictures()->delete();
            $project->pictures()->create(['name' => $picture]);
        }

        if ($request->video_upload) {
            $video = $this->upLoadFile($request, 'video_upload', config('setting.path_upload_picture'));
            $this->deleteFile($project->videos->first()->name);
            $project->videos()->delete();
            $project->videos()->create(['name' => $video]);
        } elseif ($request->video_url) {
            $project->videos()->delete();
            $project->videos()->create(['name' => $request->video_url]);
        }

        // update utilities
        foreach ($request->title_utilities as $key => $value) {
            $utilityData = [
                'title' => $value,
                'content' => $request->title_utilities[$key],
            ];
            $utility = $project->utilities()->create($utilityData);
            $pictureUtility = isset($request->picture_utilities[$key])
                ? $this->upLoadFile2($request->picture_utilities[$key], config('setting.path_upload_picture')) : '';

            if($pictureUtility) {
                $utility->pictures()->create(['name' => $pictureUtility]);
            }
        }

        // save overview
        $dataOverView = $request->only([
            'position',
            'area',
            'investment',
            'structure',
            'utility_local',
            'utility_link',
            'contract',
        ]);

        $project->overview()->create($dataOverView);

        return $project;
    }
}
