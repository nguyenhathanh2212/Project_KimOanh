<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    //
    protected $fillable = [
    	'id',
    	'content',
    	'title',
    	'project_id'
    ];

    public function pictures()
    {
        return $this->morphMany(Picture::class, 'pictureable');
    }
}
