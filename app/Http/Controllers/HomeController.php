<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use App\Ticket;
use App\Notif;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
       $this->middleware('auth');
    }

    public function index(){

        return view('dashboard.index')
                ->with('events',
                    Event::where('user_id', Auth::user()->id)->count()
                )->with('passed_events',
                    Event::where('user_id', Auth::user()->id)->count()
                )->with('tickets',
                    Ticket::where('user_id', Auth::user()->id)->count()
                );
    }

    public function profile(){
        return view('auth.profile');
    }
    
}
