<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OverView extends Model
{
    protected $fillable = [
        'id',
        'project_id',
        'preview',
        'position',
        'investment',
        'area',
        'structure',
        'utility_local',
        'utility_link',
        'contract'
    ];
}
