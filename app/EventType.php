<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'name'];

    public function tickets(){
        return $this->hasMany(Ticket::class, 'event_id');
    }
}
