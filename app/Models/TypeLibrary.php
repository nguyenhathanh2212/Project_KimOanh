<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeLibrary extends Model
{
    //
    protected $fillable = [
    	'id',
    	'name'
    ];

    public function library(){
    	return $this->hasMany("App\Library", 'type_id', 'id');
    }
}
