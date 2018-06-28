<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Video extends Model
{
    protected $fillable = [
    	'name',
    	'project_id',
    ];

    public function getNameCustomAttribute()
    {
    	$regex = '/^http+/';
    	preg_match($regex, $this->attributes['name'], $matches);

    	return !$matches ? asset(Storage::url($this->attributes['name'])) : $this->attributes['name'];
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "https://www.youtube.com/embed/$2",
                $value
            );
    }
}
