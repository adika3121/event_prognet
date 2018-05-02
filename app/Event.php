<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

   	protected $fillable = [
   		'name', 
   		'start_date',
   		'location', 
   		'description',
            'image', 
   		'event_type_id', 
   		'max_ticket', 
   		'user_id'
   	];

      public function user(){
         return $this->belongsTo(User::class, 'user_id');
      }

      public function event_type(){
         return $this->belongsTo(EventType::class, 'event_type_id');
      }

      public function tickets(){
         return $this->hasMany(Ticket::class, 'event_id');
      }
   	
}
