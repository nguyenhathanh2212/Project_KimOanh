<?php
namespace App\Repositories\News;

use App\Repositories\EloquentRepository;
use App\Models\News;
use Session;
use Auth;
use DB;
use App\Traits\ProcessFile;

class NewsEloquentRepository extends EloquentRepository implements NewsInterface
{
    use ProcessFile;
    
    public function getModel(){
        return News::class;
    }

    public function getAllNews(){

        return $this->all();
    }

    public function getAllNewPaginate()
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate(config('setting.paginate_admin'));
    }

    public function getNewsRelateds($typeNew, $news)
    {
        return $typeNew->news()
            ->where('id', '<>', $news->id)
            ->orderBy('created_at', 'DESC')
            ->limit(config('setting.limit_top_news'))
            ->get();
    }

    public function getNewsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC"){
        if($type_id == null) return ;
        return $this->model->where('type_id', $type_id)->orderBy($sortBy, $order)->limit($limit)->get();
    }

    public function createNews($request)
    {
        $data = $request->only([
            'title',
            'content',
            'preview',
            'type_id',
        ]);
        $news = $this->model->create($data);

        if ($news) {
            $picture = $this->upLoadFile($request, 'picture', config('setting.path_upload_picture'));
        }

        $news->pictures()->create(['name' => $picture]);

        return $news;
    }

    public function updateNews($request, $id)
    {
        $news = $this->model->findOrFail($id);

        if ($request->picture) {
            $this->deleteFile($news->pictures->first()->name);
            $picture = $this->upLoadFile($request, 'picture', config('setting.path_upload_picture'));
            $news->pictures()->create(['name' => $picture]);
        }

        $data = $request->only([
            'title',
            'content',
            'preview',
            'type_id',
        ]);

        return $news->update($data);
    }

    public function deleteNews($id)
    {
        $news = $this->model->findOrFail($id);
        $pictures = $news->pictures;

        if ($news->pictures()->delete()) {
            foreach ($pictures as $picture) {
                $this->deleteFile($picture->name);
            }
        }

        return $news->delete();
    }

    public function search($request)
    {
        return $this->model->where('title', 'LIKE', '%' . $request->text . '%')->orderBy('created_at', 'DESC')->paginate(config('setting.paginate_admin'));
    }
}
