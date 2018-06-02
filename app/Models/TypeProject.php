<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProject extends Model
{
    //
    protected $fillable = [
    	'id',
    	'name'
    ];

    public function project(){
    	return $this->hasMany("App\Project", "type_id", "id");
    }
}
