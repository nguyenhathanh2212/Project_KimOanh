<?php
namespace App\Repositories\TypeLibrary;

use App\Repositories\EloquentRepository;
use App\Models\TypeLibrary;
use Session;
use Auth;
use DB;

class TypeLibraryEloquentRepository extends EloquentRepository implements TypeLibraryInterface {

    public function getModel()
    {
        return TypeLibrary::class;
    }

    public function getAllTypeLibraries()
    {
        return $this->model->all();
    }
}
