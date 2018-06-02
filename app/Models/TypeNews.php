<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeNews extends Model
{
    //
    protected $fillable = [
    	'id',
    	'name'
    ];

    public function news(){

    	return $this->hasMany("App\News", 'type_id', 'id');
    }


}
