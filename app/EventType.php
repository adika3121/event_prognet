<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    public $timestamps = false;

    protected $fillable = ['id', 'name'];

    public function events(){
        return $this->hasMany(Event::class, 'event_type_id');
    }
}
