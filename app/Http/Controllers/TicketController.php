<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Event;
use App\Notif;
use Auth;

class TicketController extends Controller
{

    public function __construct(){
        $this->middleware('auth', [
            'except' => ['index', 'show']
        ]);
    }

    ///////////////////////////////////////////////////////////////////
    //Func resource
    public function index(){
    	return view('dashboard.ticket.index')
                ->with('tickets',
                    Ticket::with('event')->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get()
                );
    }

    public function show($id){
    	return Ticket::with(['user', 'event'])->find($id);
    }

    public function store(Request $req){
        $this->validate($req, [
            'event_id' => 'required|integer'
        ]);
        $code = "";
        $total = Ticket::where('event_id', $req->event_id)
                                ->where('confirmed', 1)
                                ->get();
        $event = Event::find($req->event_id);
        //membuat kode pada tiket
        while(true){
            $valid = true;
            //membuat kode
            //format : id_event - id_user - angka acak
            $code = $event->id.'-'.Auth::user()->id.'-'.strtoupper(substr(md5(mt_rand(1, 200)), 0, 5));
            foreach($total as $i){
                if(strcmp($code, $i->code) == 0){
                    $valid = false;
                    break;
                }
            }
            if($valid){
                break;
            }
        }
    	$ticket = Ticket::create([
            'event_id' => $req->event_id,
            'user_id' => Auth::user()->id,
            'code' => $code,
            'confirmed' => 0
        ]);

        return redirect()->back()->with('success', 'Anda berhasil memesan tiket');
    }

    public function update($id, Request $req){
        $this->validate($req, [
            'user_id' => 'required|integer',
            'event_id' => 'required|integer'
        ]);
    	Ticket::find($id)->update($req->all());
    }

    public function destroy($id){
    	$ticket = Ticket::with('event')->find($id);
        Notif::create([
            'user_id' => $ticket->event->user_id,
            'ticket_id' => $id,
            'type' => 2
        ]);
        $ticket->delete();
        return redirect()->back()->with('success', 'Pesanan tiket berhasil dibatalkan');
    }

    ///////////////////////////////////////////////////////////////////
    //Func tambahan

    //men-toggle konfirmasi tiket
    public function toggle_confirm($id){
        $ticket = Ticket::find($id);
        $event_id = $ticket->event_id;
        if($ticket->confirmed)
            $ticket->confirmed = 0;
        else {
            $ticket->confirmed = 1;
        }
        $ticket->update();
        return redirect()->back()->with('success', 'Konfirmasi tiket berhasil dirubah');
    }

    //membuat qrcode dari ticket
    public function qrcode($id){

    }

}
