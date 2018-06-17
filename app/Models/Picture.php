<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Picture extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'pictureable_id',
    	'pictureable_type'
    ];

    public function pictureable()
    {
        return $this->morphTo();
    }

    public function getNameCustomAttribute()
    {
        return asset(Storage::url($this->attributes['name']));
    }
}
