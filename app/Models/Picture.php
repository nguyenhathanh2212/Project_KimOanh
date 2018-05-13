<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $fillable = [
        'category_id',
        'product_id',
        'name'
    ];

    protected $appends = ['picture'];

   
}
