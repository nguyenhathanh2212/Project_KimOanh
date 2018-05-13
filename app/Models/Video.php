<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'category_id',
        'product_id',
        'name'
    ];

    protected $appends = ['video'];


}
