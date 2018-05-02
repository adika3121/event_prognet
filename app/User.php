<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', 'name', 'email', 'password', 'img_profile', 'gender', 'birthday', 'address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tickets(){
        return $this->hasMany(Ticket::class, 'user_id');
    }

    public function events(){
        return $this->hasMany(Event::class, 'user_id');
    }
}
