<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventType;
use App\Ticket;
use App\Notif;
use Auth;

class EventController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth', [
    //         'except' => ['index', 'show']
    //     ]);
    // }

    //////////////////////////////////////////////////////////////////////////////////////////////
    //Resources

    public function index(){
    	return view('dashboard.event.index')
                ->with('events',
                    Event::with(['event_type', 'tickets'])->where('user_id', Auth::user()->id)->get()
                )->with('notifs', 
                    Notif::where('user_id', Auth::user()->id)->where('status', 0)
                        ->orderBy('created_at', 'desc')->get()
                );
    }

    public function create(){
        return view('dashboard.event.create')
                ->with('event_types', EventType::all())
                ->with('notifs', 
                    Notif::where('user_id', Auth::user()->id)->where('status', 0)
                        ->orderBy('created_at', 'desc')->get()
                );
    }

    public function edit($id){
        return view('dashboard.event.edit')
                ->with('event', 
                    Event::with('event_type')->find($id)
                )->with('event_types',
                    EventType::all()
                );
    }

    public function show($id){
        $event = Event::with(['user', 'event_type', 'tickets'])->find($id);
        if($event){
            $ordered = false;
            if(!Auth::guest()){
                foreach($event->tickets as $ticket){
                    if($ticket->user_id == Auth::user()->id)
                        $ordered = true;
                }
            }
            return view('detail')->with('event', $event)
                                ->with('ordered', $ordered);
        }
        return redirect('/not_found');
    }

    public function store(Request $req){
    	$this->validate($req, [
    		'name' => 'required|string', 
	   		'start_date' => 'required', 
	   		'location' => 'required|string', 
	   		'description' => 'required|string',
	   		'event_type_id' => 'required|integer', 
	   		'max_ticket' => 'required|integer'
    	]);

        $filename = 'event.jpg';

        if($req['image']){
            
            $image = $req->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('img/events');
            $image->move($destination, $filename);

        }
    	$row = new Event();
        $row->name = $req->name;
        $row->start_date = $req->start_date;
        $row->location = $req->location;
        $row->description = $req->description;
        $row->event_type_id = $req->event_type_id;
        $row->max_ticket = $req->max_ticket;
        $row->user_id = Auth::user()->id;
        $row->image = $filename;
        $row->save();

        return redirect('/events')->with('success', 'Event berhasil dibuat');
    }

    public function update($id, Request $req){
    	$this->validate($req, [
            'name' => 'required|string', 
            'start_date' => 'required', 
            'location' => 'required|string', 
            'description' => 'required|string',
            'event_type_id' => 'required|integer', 
            'max_ticket' => 'required|integer'
        ]);

        $row = Event::find($id);

        $filename = $row->image;

        if($req['image']){
            $image = $req->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('img/events');
            $image->move($destination, $filename);
            $req['image'] = $filename;
        }

        $row->name = $req->name;
        $row->start_date = $req->start_date;
        $row->location = $req->location;
        $row->description = $req->description;
        $row->event_type_id = $req->event_type_id;
        $row->max_ticket = $req->max_ticket;
        $row->user_id = Auth::user()->id;
        $row->image = $filename;
        $row->save();

        $tickets = Ticket::where('event_id', $row->id)->get();
        foreach($tickets as $ticket){
            Notif::create([
                'user_id' => $ticket->user_id,
                'type' => 4,
                'content' => 'Event <b>'.$event->name.'</b> mendapat pembaharuan'
            ]);
        }

        return redirect('/events')->with('success', 'Event berhasil diupdate');
    }

    public function destroy($id){
        $tickets = Ticket::where('event_id', $id)->get();
        $event = Event::find($id);
        
        foreach($tickets as $ticket){
            Notif::create([
                'user_id' => $ticket->user_id,
                'type' => 5,
                'content' => 'Event <b>'.$event->name.'</b> dibatalkan'
            ]);
        }

        Ticket::where('event_id', $id)->delete();
        $event->delete();

         return redirect('/events')->with('success', 'Event berhasil dihapus');
    }

    //////////////////////////////////////////////////////////////////////////////////////////////
    //Tambahan

    public function ticket($id){
        return view('dashboard.event.ticket')
                ->with('event',
                    Event::find($id)
                )->with('tickets',
                    Ticket::with('user')->where('event_id', $id)->get()
                )->with('notifs', 
                    Notif::where('user_id', Auth::user()->id)->where('status', 0)
                        ->orderBy('created_at', 'desc')->get()
                );
    }
}
