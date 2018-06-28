<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeNews extends Model
{
    protected $fillable = [
        'name'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'type_id', 'id');
    }

    public function topNews()
    {
        return $this->hasMany(News::class, 'type_id', 'id')->limit(config('setting.limit_top_news'));
    }

    public function paginateNews()
    {
        return $this->hasMany(News::class, 'type_id', 'id')->paginate(config('setting.paginate_new'));
    }

    public function getNameCustomAttribute()
    {
        return ucfirst(str_limit($this->name, 20));
    }
}
