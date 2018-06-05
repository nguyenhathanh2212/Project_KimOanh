<?php
namespace App\Repositories\TypeNews;

use App\Repositories\EloquentRepository;
use App\Models\TypeNews;
use App\Models\News;
use Session;
use Auth;
use DB;

class TypeNewsEloquentRepository extends EloquentRepository implements TypeNewsInterface {

    public function getModel()
    {
        return TypeNews::class;
    }

    public function getAllTopNews()
    {
        return $this->model->all();
    }
}
