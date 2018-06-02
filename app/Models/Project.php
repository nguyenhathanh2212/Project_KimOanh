<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
    	'id',
    	'type_id',
    	'title',
    	'preview',
    	'overview_id',
        'video_id',
    	'subdivision_picture_id'
    ];

    public function overview(){
        return $this->hasOne("App\OverView", "overview_id", "id");
    }

    public function utility(){
        return $this->hasOne("App\Utility", "project_id", "id");
    }

    public function typeProject(){
        return $this->belongsTo("App\TypeProject", "type_id", "id");
    }
}
