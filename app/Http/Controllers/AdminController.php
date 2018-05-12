<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventType;
use App\Ticket;
use App\Notif;
use Auth;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('auth:admin');
	}

    public function index(){
    	return view('admin.dashboard.index')
            ->with('events',
                Event::count()
            );
    }

    public function showLogin(){
    	return view('admin.login');
    }

    public function events(){
        return view('admin.dashboard.event.index')
                ->with('events',
                    Event::with(['event_type', 'tickets'])->get()
                );
    }

    public function events_destroy($id){
        $tickets = Ticket::where('event_id', $id)->get();
        $event = Event::find($id);
        
        foreach($tickets as $ticket){
            Notif::create([
                'user_id' => $ticket->user_id,
                'type' => 5,
                'content' => 'Event <b>'.$event->name.'</b> dibatalkan'
            ]);
        }

        Notif::create([
            'user_id' => $event->user_id,
            'type' => 5,
            'content' => 'Event <b>'.$event->name.'</b> dibatalkan oleh Administaor'
        ]);

        Ticket::where('event_id', $id)->delete();
        $event->delete();

         return redirect('/admin/events')->with('success', 'Event berhasil dihapus');
    }
}
