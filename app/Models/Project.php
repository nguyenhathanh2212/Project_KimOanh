<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TypeProject;
use App\Models\OverView;
use App\Models\Utility;

class Project extends Model
{
    protected $fillable = [
    	'id',
    	'type_id',
    	'title',
    	'preview',
    	'overview_id',
        'video_id',
    	'subdivision_picture_id'
    ];
    
    public function pictures()
    {
        return $this->morphMany(Picture::class, 'pictureable');
    }
    
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function overview()
    {
        return $this->hasOne(OverView::class, 'overview_id', 'id');
    }

    public function utility()
    {
        return $this->hasOne(Utility::class, 'project_id', 'id');
    }

    public function typeProject()
    {
        return $this->belongsTo(TypeProject::class, 'type_id', 'id');
    }

    public function getTitleCustomAttribute()
    {
        return ucfirst(str_limit($this->title, 50));
    }

    public function getFirstPictureAttribute()
    {
        return $this->pictures()->count() ?
            $this->pictures()->first()->name :
            config('setting.project_image_default');
    }
}
