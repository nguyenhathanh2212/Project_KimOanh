<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionNews extends Model
{
    //
    protected $fillable = [
        'category_id',
        'picture_id',
        'title',
        'preview',
        'content'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->hasOne(Picture::class);
    }
}
