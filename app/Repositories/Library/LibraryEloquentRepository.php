<?php
namespace App\Repositories\Library;
use App\Repositories\EloquentRepository;
use App\Models\Library;
use Session;
use Auth;
use DB;

class LibraryEloquentRepository extends EloquentRepository implements LibraryInterface{
	
	public function getModel()
	{
		return Library::class;
	}

	public function getAllLibraries()
	{

		return $this->all();
	}

	public function getLibrariesByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC")
	{
		if($type_id == null) return ;
		return $this->model->where('type_id', $type_id)->orderBy($sortBy, $order)->limit($limit)->get();
	}

    public function getTop3Libraries()
    {
    	return $this->model->orderBy('created_at', 'DESC')->limit(config('setting.limit_top_library'))->get();
    }
}