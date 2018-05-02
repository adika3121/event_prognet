<?php

Route::get('/test', 'TestController@index');

///////////////////////////////////////////////////////////////////
//Auth user
Auth::routes();

///////////////////////////////////////////////////////////////////
//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');

///////////////////////////////////////////////////////////////////
//Direktori root
<<<<<<< HEAD
Route::get('/', 'PageController@index');
Route::get('/not_found', 'PageController@not_found');

=======
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
>>>>>>> a4e45990bf434a1a4d43e943fb2583614b2484ec
///////////////////////////////////////////////////////////////////
//Event
Route::resource('/events', 'EventController');
Route::get('/events/{id}/ticket', 'EventController@ticket');

///////////////////////////////////////////////////////////////////
//Ticket
Route::resource('/tickets', 'TicketController');
Route::post('/tickets/{id}/confirm', 'TicketController@toggle_confirm');
Route::post('/tickets/confirm', 'TicketController@code_confirm');

///////////////////////////////////////////////////////////////////
//Notif
Route::resource('/notif', 'NotifController');

///////////////////////////////////////////////////////////////////
//User
Route::resource('/users', 'UserController');
