<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    //
    protected $fillable = [
    	'id',
    	'title',
    	'type_id'
    ];
    public function picture()
    {
        return $this->morphMany('App\Picture', 'pictureable');
    }

    public function typeLibrary(){
        return $this->belongsTo("App\TypeLibrary", "type_id", "id");
    }
}
