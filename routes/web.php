<?php

///////////////////////////////////////////////////////////////////
//Auth user
Auth::routes();

///////////////////////////////////////////////////////////////////
//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kelola_event', 'HomeController@kelola_event');
Route::get('/kelola_tiket', 'HomeController@kelola_tiket');
Route::get('/kelola_akun', 'HomeController@kelola_akun');

///////////////////////////////////////////////////////////////////
//Direktori root
Route::get('/', function () {
    return view('index');
});
Route::get('/coba', function () {
    return view('index_sudahLogin');
});
Route::get('/coba2', function () {
    return view('kategori_kelasInteraktif');
});
Route::get('/coba3', function () {
    return view('hasil_search');
});
Route::get('/coba4', function () {
    return view('hasil_searchNotFound');
});
///////////////////////////////////////////////////////////////////
//Event
Route::resource('/events', 'EventController');
///////////////////////////////////////////////////////////////////
//Ticket
Route::resource('/tickets', 'TicketController');
