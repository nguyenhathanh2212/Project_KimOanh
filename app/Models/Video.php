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
    	$regex = '/^http+/';
    	preg_match($regex, $this->attributes['name'], $matches);

    	return !$matches ? asset(Storage::url($this->attributes['name'])) : $this->attributes['name'];
    }
}
