<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OverView extends Model
{
    protected $fillable = [
        'id',
        'project_id',
        'position',
        'investment',
        'area',
        'structure',
        'utility_local',
        'utility_link',
        'contract'
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
