<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class TypeProject extends Model
{
    protected $fillable = [
        'name'
    ];

    public function project()
    {
        return $this->hasMany(Project::class, 'type_id', 'id');
    }

    public function topProjects()
    {
        return $this->hasMany(Project::class, 'type_id', 'id')->limit(config('setting.limit_top_project'));
    }

    public function getNameCustomAttribute()
    {
        return ucfirst(str_limit($this->name, 20));
    }

    public function paginateProjects()
    {
        return $this->hasMany(Project::class, 'type_id', 'id')->paginate(config('setting.paginate_project'));
    }
}
