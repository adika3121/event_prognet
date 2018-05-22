<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventType;
use App\Ticket;
use App\Notif;
use App\User;
use Auth;
use Hash;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('auth:admin');
	}

    //menampilkan home dari dashboard
    public function index(){
    	return view('admin.dashboard.index')
            ->with('events',
                Event::count()
            )->with('users',
                User::count()
            )->with('tickets',
                Ticket::count()
            );
    }

    public function showLogin(){
    	return view('admin.login');
    }

    //menampilkan event
    public function events(){
        return view('admin.dashboard.event.index')
                ->with('events',
                    Event::with(['event_type', 'tickets'])->get()
                );
    }

    //menampilkan tiket
    public function tickets(){
        return view('admin.dashboard.ticket.index')
                ->with('tickets',
                    Ticket::with(['event', 'user'])->get()
                );
    }

    //menampilkan user
    public function users(){
        return view('admin.dashboard.user.index')
                ->with('users',
                    User::with(['events', 'tickets'])->get()
                );
    }

    //menampilkan tipe event
    public function event_types(){
            return view('admin.dashboard.event_type.index')
                ->with('event_types',
                    EventType::with('events')->get()
            );
    }

    //menghapus event
    public function events_destroy($id){
        $tickets = Ticket::where('event_id', $id)->get();
        $event = Event::find($id);
        
        foreach($tickets as $ticket){
            Notif::create([
                'user_id' => $ticket->user_id,
                'type' => 5,
                'content' => 'Event <b>'.$event->name.'</b> dibatalkan oleh Administrator'
            ]);
        }

        Notif::create([
            'user_id' => $event->user_id,
            'type' => 5,
            'content' => 'Event <b>'.$event->name.'</b> dibatalkan oleh Administrator'
        ]);

        Ticket::where('event_id', $id)->delete();
        $event->delete();

         return redirect('/admin/events')->with('success', 'Event berhasil dihapus');
    }

    //menghapus tipe event
    public function event_types_destroy($id){
        $events = Event::where('event_type_id', $id)->get();
        foreach($events as $event){
            $tickets = Ticket::where('event_id', $event->id)->get();
            foreach($tickets as $ticket){
                Notif::create([
                    'user_id' => $ticket->user_id,
                    'type' => 2,
                    'content' => 'Tiket <b>'.$ticket->event->name.'</b> dibatalkan oleh Administrator'
                ]);
            }
            Ticket::where('event_id', $event->id)->delete();
            Notif::create([
                'user_id' => $event->user_id,
                'type' => 5,
                'content' => 'Event <b>'.$event->name.'</b> dibatalkan oleh Administrator'
            ]);
        }
        Event::where('event_type_id', $id)->get();
        EventType::find($id)->delete();
        return redirect('/admin/event_types')->with('success', 'Tipe Event berhasil dihapus');
    }

    //membuat tipe event
    public function event_types_store(Request $req){
        $this->validate($req, [
            'name' => 'required'
        ]);
        EventType::create($req->all());
        return redirect('/admin/event_types')->with('success', 'Tipe Event berhasil dibuat');
    }

    //menghapus ticket
    public function tickets_destroy($id){
        $ticket = Ticket::with('event')->find($id);
        
        Notif::create([
            'user_id' => $ticket->user_id,
            'type' => 2,
            'content' => 'Tiket <b>'.$ticket->event->name.'</b> dibatalkan oleh Administrator'
        ]);
        $ticket->delete();

         return redirect('/admin/tickets')->with('success', 'Tiket berhasil dihapus');
    }

    //menghapus ticket
    public function users_destroy($id){
        $user = User::find($id);

        $tickets = Ticket::where('user_id', $user->id)->get();
        foreach($tickets as $ticket){
            Notif::create([
                'user_id' => $ticket->event->user_id,
                'type' => 2,
                'content' => 'Tiket dari <b>'.$user->name.'</b> dibatalkan karena akunnya dihapus oleh Administrator'
            ]);
        }
        
        Ticket::where('user_id', $user->id)->delete();
        $user->delete();

        $events = Event::where('user_id', $user->id)->get();
        
        if(count($events) > 0){
            foreach($events as $event){
                $tickets = Ticket::where('event_id', $event->id)->get();
                if(count($tickets) > 0){
                    foreach ($tickets as $ticket) {
                        Notif::create([
                            'user_id' => $ticket->user_id,
                            'type' => 5,
                            'content' => 'Event <b>'.$event->name.'</b> dibatalkan oleh Administrator'
                        ]);
                    }
                }
            }
        }
        Event::where('user_id', $user->id)->delete();

        return redirect('/admin/users')->with('success', 'User berhasil dihapus');
    }

    //menampilkan halaman ganti password
    public function passwordForm(){
        return view('admin.change_password');
    }

    //mengganti password
    public function changePassword(Request $req){
        $this->validate($req, [
            'old_password' => 'required',
            'new_password' => 'required'
        ]);

        if(Hash::check($req->old_password, Auth::user()->password)){
            Auth::user()->password = Hash::make($req->new_password);
            Auth::user()->update();
            return redirect()->back()->with('success', 'Password berhasil diganti');
        }

        return redirect()->back()->with('error', 'Password lama tidak cocok');
    }
}
