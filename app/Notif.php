<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
    	'ticket_id',
    	'type',
    	'status'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function ticket(){
    	return $this->belongsTo(Ticket::class, 'ticket_id');
    }
}
