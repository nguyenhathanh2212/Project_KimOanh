<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use App\Models\User;

class UserEloquentRepository extends EloquentRepository implements UserInterface {

    public function getModel()
    {
        return User::class;
    }

}
