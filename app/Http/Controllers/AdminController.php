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

    //menghapus event
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
