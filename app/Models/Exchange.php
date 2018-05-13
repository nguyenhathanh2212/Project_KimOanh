<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    //
    protected $fillable = [
        'category_id',
        'picture_id',
        'title',
        'content',
        'title_price',
        'location',
        'owner',
        'kind_of',
        'legal_status',
        'area_used',
        'direction',
        'contact'
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
