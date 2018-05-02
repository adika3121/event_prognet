<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    	'id',
    	'code',
    	'user_id',
    	'event_id',
    	'confirmed',
    	'qrcode'
    ];

    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function event(){
    	return $this->belongsTo(Event::class, 'event_id');
    }
    
}
