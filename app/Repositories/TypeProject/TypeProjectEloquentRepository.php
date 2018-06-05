<?php
namespace App\Repositories\TypeProject;

use App\Repositories\EloquentRepository;
use App\Models\TypeProject;
use App\Models\Project;
use Session;
use Auth;
use DB;

class TypeProjectEloquentRepository extends EloquentRepository implements TypeProjectInterface {

    public function getModel()
    {
        return TypeProject::class;
    }

    public function getAllTopProjects()
    {
        return $this->model->all();
    }
}
