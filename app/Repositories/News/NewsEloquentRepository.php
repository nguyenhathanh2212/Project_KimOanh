<?php
namespace App\Repositories\News;

use App\Repositories\EloquentRepository;
use App\Models\News;
use Session;
use Auth;
use DB;

class NewsEloquentRepository extends EloquentRepository implements NewsInterface {
	
	public function getModel(){
		return News::class;
	}

	public function getAllNews(){

		return $this->all();
	}

	public function getNewsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC"){
		if($type_id == null) return ;
		return $this->model->where('type_id', $type_id)->orderBy($sortBy, $order)->limit($limit)->get();
	}
}
