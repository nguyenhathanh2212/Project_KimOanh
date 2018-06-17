<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use App\Models\User;

class UserEloquentRepository extends EloquentRepository implements UserInterface {

    public function getModel()
    {
        return User::class;
    }

	public function createUser($data)
	{
		return $this->create($data);
	}

    public function deleteUser($id)
    {
    	return $this->delete($id);
    }

    public function updateUser($id, $data)
    {
    	$user = $this->model->findOrFail($id);

    	return $user->update($data);
    }
}
