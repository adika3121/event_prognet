<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notif;
use Auth;

class NotifController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	Notif::where('user_id', Auth::user()->id)->update(['status' => 1]);
        return view('dashboard.notif.index')
            ->with('notifs', 
                Notif::where('user_id', Auth::user()->id)->where('status', 0)
                    ->orderBy('created_at', 'desc')->get()
            )->with('all_notifs', 
                Notif::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()
            );
    }

    public function clear(){
        Notif::where('user_id', Auth::user()->id)->delete();
        return view('dashboard.notif.index')
            ->with('notifs', 
                Notif::where('user_id', Auth::user()->id)->where('status', 0)
                    ->orderBy('created_at', 'desc')->get()
            )->with('all_notifs', 
                Notif::where('user_id', Auth::user()->id)->get()
            );
    }
}
