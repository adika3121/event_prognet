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
Route::get('/', 'PageController@index');
Route::get('/not_found', 'PageController@not_found');

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
