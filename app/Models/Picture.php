<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function getNameAttribute()
    {
        return config('setting.folder_image_public') . $this->name;
    }
}
