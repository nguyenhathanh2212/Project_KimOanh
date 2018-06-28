<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    protected $fillable = [
        'content',
        'title',
        'project_id'
    ];

    public function pictures()
    {
        return $this->morphMany(Picture::class, 'pictureable');
    }

    public function getFirstPictureAttribute()
    {
        return $this->pictures()->count() ?
            $this->pictures()->first()->name_custom :
            config('setting.project_image_default');
    }
}
