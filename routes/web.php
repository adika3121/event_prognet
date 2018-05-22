<?php

Route::get('/test', 'TestController@index');

///////////////////////////////////////////////////////////////////
//Auth user
Auth::routes();

///////////////////////////////////////////////////////////////////
//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');
Route::get('/change_password', 'HomeController@changePassword');

///////////////////////////////////////////////////////////////////
//Direktori root
Route::get('/', 'PageController@index');
Route::get('/not_found', 'PageController@not_found');
Route::get('/filter', 'PageController@filter');

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
Route::post('/notif/clear', 'NotifController@clear');

///////////////////////////////////////////////////////////////////
//User
Route::resource('/users', 'UserController');
Route::post('/users/change_password', 'UserController@changePassword');

///////////////////////////////////////////////////////////////////
//Admin
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@login');
Route::get('/admin/events', 'AdminController@events');
Route::get('/admin/tickets', 'AdminController@tickets');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/event_types', 'AdminController@event_types');
Route::delete('/admin/events/{id}', 'AdminController@events_destroy');
Route::delete('/admin/tickets/{id}', 'AdminController@tickets_destroy');
Route::delete('/admin/users/{id}', 'AdminController@users_destroy');
Route::delete('/admin/event_types/{id}', 'AdminController@event_types_destroy');
Route::get('/admin/change_password', 'AdminController@passwordForm');
Route::post('/admin/change_password', 'AdminController@changePassword');

