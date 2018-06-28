<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Library;

class TypeLibrary extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function libraries()
    {
    	return $this->hasMany(Library::class, 'type_id', 'id');
    }

    public function paginateLibraries()
    {
        return $this->hasMany(Library::class, 'type_id', 'id')->paginate(config('setting.paginate_project'));
    }

    public function getNameCustomAttribute()
    {
        return ucfirst(str_limit($this->name, 20));
    }
}
