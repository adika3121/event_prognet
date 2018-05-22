<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventType;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index(){
        return view('index')
            ->with('events',
    		    Event::with('tickets')->orderBy('created_at')->get()
            )->with('event_types', 
                EventType::all()
            );
    }

    public function not_found(){
    	return view('404_page');
    }

    public function filter(Request $req){
        $events = Event::with('tickets');
        //mengecek jenis event
        if($req->name){
            $name = $req->name;
            $events->where(function($query) use ($name){
                $query->where('name', 'like', '%'.$name.'%')
                ->orWhere('description', 'like', '%'.$name.'%');
            });
        }
        if($req->event_type_id)
            $events->where('event_type_id', $req->event_type_id);

        if($req->when){
            if($req->when == 1)
                $events->whereBetween('start_date', [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ]);
            else if($req->when == 2)
                $events->whereBetween('start_date', [
                    Carbon::now()->startOfMonth(),
                    Carbon::now()->endOfMonth()
                ]);
            else if($req->when == 3)
                $events->whereBetween('start_date', [
                    Carbon::now()->startOfYear(),
                    Carbon::now()->endOfYear()
                ]);
        }

        $event_types = EventType::all();
        return view('filter')
            ->with('filter', true)
            ->with('name', $req->name)
            ->with('event_type_id', $req->event_type_id)
            ->with('events', $events->get())
            ->with('event_types', $event_types);
    }
}
