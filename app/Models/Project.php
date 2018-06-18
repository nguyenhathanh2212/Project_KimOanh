<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TypeProject;
use App\Models\OverView;
use App\Models\Utility;
use Storage;

class Project extends Model
{
    protected $fillable = [
    	'id',
    	'type_id',
    	'title',
    	'preview',
    	'subdivision_picture',
        'location_content',
        'location_picture',
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
        return $this->hasOne(OverView::class);
    }

    public function utilities()
    {
        return $this->hasMany(Utility::class);
    }

    public function typeProject()
    {
        return $this->belongsTo(TypeProject::class, 'type_id', 'id');
    }

    public function getTitleCustomAttribute()
    {
        return ucfirst(str_limit($this->title, 50));
    }

    public function getSubdivisionPictureCustomAttribute()
    {
        return $this->subdivision_picture ? asset(Storage::url($this->subdivision_picture)) : config('setting.project_image_default');
    }

    public function getLocationPictureCustomAttribute()
    {
        return $this->subdivision_picture ? asset(Storage::url($this->subdivision_picture)) : config('setting.project_image_default');
    }

    public function getFirstPictureAttribute()
    {
        return $this->overview->first_picture;
    }

    public function getFirstVideoAttribute()
    {
        return $this->videos()->count() ?
            $this->videos()->first()->name_custom :
            'https://www.youtube.com/embed/0d6ypgW96ZI';
    }
}
