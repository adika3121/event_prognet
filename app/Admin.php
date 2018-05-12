<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'id', 'name', 'email', 'password', 'img_profile', 'gender', 'birthday', 'address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['birthday'];
}
