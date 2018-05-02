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
    	return Notif::all();
    }
}
