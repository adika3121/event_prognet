<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    protected $fillable = [
    	'id',
    	'user_id',
		'type',
		'content',
    	'status'
    ];

	protected $dates = ['created_at', 'updated_at'];
	
}
