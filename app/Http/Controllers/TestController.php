<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Notif;

class TestController extends Controller
{
    public function index(){
    	return Notif::with(['ticket' => function($query){
    		$query->with('user')->get();
    	}])->find(3);
    }
}
