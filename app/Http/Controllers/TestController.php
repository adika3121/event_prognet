<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class TestController extends Controller
{
    public function index(){
    	// return Event::with([
    	// 	'tickets' => function($query){
    	// 		$query->with(['event', 'user']);
    	// 	}
    	// ])->count();
    	return strtoupper(substr(md5(mt_rand(1, 200)), 0, 5));
    }
}
