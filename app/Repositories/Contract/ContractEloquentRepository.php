<?php
namespace App\Repositories\Contract;
use App\Repositories\EloquentRepository;
use App\Models\Contract;
use Session;
use Auth;
use DB;

class ContractEloquentRepository extends EloquentRepository implements ContractInterface{
	
	public function getModel()
	{
		return Contract::class;
	}

	public function getAll()
	{
		return $this->all();
	}
	
	public function updateContract($request, $id)
    {
        $contract = $this->model->findOrFail($id);

        $data = $request->only([
            'name',
            'address',
            'phone',
            'hotline',
            'email',
        ]);

        return $contract->update($data);
    }
}