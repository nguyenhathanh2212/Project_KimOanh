<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
    	'id',
    	'type_id',
    	'title',
    	'preview',
    	'content'
    ];
    
    public function typeNews()
    {
        return $this->belongsTo(TypeNews::class, 'type_id', 'id');
    }
    
    public function pictures()
    {
        return $this->morphMany(Picture::class, 'pictureable');
    }

    public function getFirstPictureAttribute()
    {
        return $this->pictures()->count() ?
            $this->pictures()->first()->name :
            config('setting.new_image_default');
    }

    public function getDateAttribute()
    {
        return \Carbon\Carbon::parse($this->created_at)->format('d/m/Y');
    }
}

