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
    

    public function typeNews(){
        return $this->belongsTo("App\News", "type_id", "id");
    }
    
}

