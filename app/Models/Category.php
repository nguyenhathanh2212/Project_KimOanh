<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'parent_id',
        'name'
    ];

    protected $appends = ['numberOfProduct'];

    public function getActionNews()
    {
        return $this->hasMany(ActionNews::class);
    }

    public function getExchanges()
    {
        return $this->hasMany(Exchange::class);
    }

    public function getNews()
    {
        return $this->hasMany(News::class);
    }

    public function getProjects()
    {
        return $this->hasMany(Project::class);
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function getParentId(){
        return $this->attributes['parent_id'];
    }

    public function getName(){
        return $this->attributes['name'];
    }
}
