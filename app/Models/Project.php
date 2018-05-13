<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable  = [
    	'category_id',
    	'picture_id',
    	'picture_real_id',
    	'video_id',
    	'title',
    	'review',
    	'content_overview',
    	'content_position',
    	'content_distribution',
    	'content_cataloque',
    	'content_contact'

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
