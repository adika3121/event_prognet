<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    ///////////////////////////////////////////////////////////////////
    //Func resource
    public function index(){
    	return Ticket::with(['user', 'event_id'])->get();
    }

    public function show($id){
    	return Ticket::with(['user', 'event'])->find($id);
    }

    public function store(Request $req){
        $req['confirmed'] = 0;
        $this->validate($req, [
            'user_id' => 'required|integer',
            'event_id' => 'required|integer'
        ]);
    	Ticket::create($req->all());
    }

    public function update($id, Request $req){
        $this->validate($req, [
            'user_id' => 'required|integer',
            'event_id' => 'required|integer'
        ]);
    	Ticket::find($id)->update($req->all());
    }

    public function destroy($id){
    	Ticket::find($id)->delete();
    }

    ///////////////////////////////////////////////////////////////////
    //Func tambahan

    //men-toggle konfirmasi tiket
    public function toggleConfirm($id){
        $ticket = Ticket::with('event')->find($id);
        if($ticket->confirmed)
            $ticket->confirmed = 0;
        else {
            //memeriksa jumlah tiket tersedia
            $total = Ticket::where('event_id', $ticket->event_id)
                                ->where('confirmed', 1)
                                ->get();
            if(count($total) + 1 <= $ticket->event->max_ticket){
                $ticket->confirmed = 1;
                $code = "";
                //membuat kode pada tiket
                while(true){
                    $valid = false;
                    $code = strtoupper(substr(md5(mt_rand(1, 200)), 0, 5));
                    foreach($total as $i){
                        if(strcmp($code, $i->code) == 0){
                            $ticket->update(['code' => $code]);
                            $valid = true;
                            break;
                        }
                    }
                    if($valid){
                        break;
                    }
                }
            } else {
                return "Udah penuh bor";
            }
        }
        $ticket->update();
        return $ticket;
    }

    //membuat qrcode dari ticket
    public function qrcode($id){

    }

}
