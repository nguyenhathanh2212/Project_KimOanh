<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Video extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'project_id',
    ];

    public function getNameCustomAttribute()
    {
    	return asset(Storage::url($this->attributes['name']));
    }
}
