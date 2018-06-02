<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

	protected $fillable = [
        'email',
        'password',
        'fullname'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
