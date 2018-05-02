<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PageController extends Controller
{
    public function index(){
    	return view('index')->with('events',
    		Event::with('tickets')->orderBy('created_at')->get()
    	);
    }

    public function not_found(){
    	return view('404_page');
    }
}
