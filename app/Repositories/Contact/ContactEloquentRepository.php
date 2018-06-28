<?php
namespace App\Repositories\Contact;
use App\Repositories\EloquentRepository;
use App\Models\Contact;
use Session;
use Auth;
use DB;

class ContactEloquentRepository extends EloquentRepository implements ContactInterface{
	
	public function getModel()
	{
		return Contact::class;
	}

	public function store($data)
	{
		return $this->model->create($data);
	}

    public function getPaginate()
    {
    	return $this->model->orderBy('created_at', 'DESC')->paginate(config('setting.paginate_admin'));
    }
}
