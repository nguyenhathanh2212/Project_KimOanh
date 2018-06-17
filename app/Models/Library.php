<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;
use App\Models\TypeLibrary;

class Library extends Model
{
    protected $fillable = [
    	'id',
    	'title',
    	'type_id'
    ];

    public function pictures()
    {
        return $this->morphMany(Picture::class, 'pictureable');
    }

    public function typeLibrary(){
        return $this->belongsTo(TypeLibrary::class, 'type_id', 'id');
    }

    public function getFirstPictureAttribute()
    {
        return $this->pictures()->count() ?
            $this->pictures()->first()->name_custom :
            config('setting.new_image_default');
    }    

    public function getTitleCustomAttribute()
    {
        return ucfirst(str_limit($this->title, 50));
    }
}
