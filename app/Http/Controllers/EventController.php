<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index(){
    	return Event::with(['user', 'event_type'])->get();
    }

    public function show($id){
    	return Event::with(['user', 'event_type'])->find($id);
    }

    public function store(Request $req){
    	$this->validate($req, [
    		'name' => 'required|string', 
	   		'start_date' => 'required|datetime', 
	   		'end_date' => 'required|datetime', 
	   		'location' => 'required|string', 
	   		'description' => 'required|string',
	   		'event_type_id' => 'required|integer', 
	   		'max_ticket' => 'required|integer', 
	   		'user_id' => 'required|integer'
    	]);
    	Event::create($req->all());
    }

    public function update($id, Request $req){
    	$this->validate($req, [
    		'name' => 'required|string', 
	   		'start_date' => 'required|datetime', 
	   		'end_date' => 'required|datetime', 
	   		'location' => 'required|string', 
	   		'description' => 'required|string',
	   		'event_type_id' => 'required|integer', 
	   		'max_ticket' => 'required|integer', 
	   		'user_id' => 'required|integer'
    	]);
    	Event::find($id)->update($req->all());
    }

    public function destroy($id){
    	Event::find($id)->delete();
    }
}
