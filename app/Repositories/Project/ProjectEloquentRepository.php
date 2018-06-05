<?php
namespace App\Repositories\Project;
use App\Repositories\EloquentRepository;
use App\Models\Project;
use Session;
use Auth;
use DB;

class ProjectEloquentRepository extends EloquentRepository implements ProjectInterface{
    
    public function getModel()
    {
        return Project::class;
    }

    public function getAllProjects()
    {

        return $this->all();
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
}
