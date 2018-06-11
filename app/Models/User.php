<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class User extends Authenticatable
{
	protected $fillable = [
        'email',
        'password',
        'fullname',
        'admin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getAdminCustomAttribute()
    {
        return $this->admin == config('setting.admin.amin') ? 'admin' : 'user';
    }
}
