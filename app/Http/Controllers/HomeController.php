<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function kelola_event()
    {
        return view('kelola_event');
    }

    public function kelola_tiket()
    {
        return view('kelola_tiket');
    }

    public function kelola_akun()
    {
        return view('kelola_akun');
    }
}
