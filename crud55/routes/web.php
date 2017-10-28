<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tickets', 'TicketController@index');
Route::get('/create/ticket', 'TicketController@create');
Route::get('/edit/ticket/{id}', 'TicketController@edit');
Route::post('/create/ticket', 'TicketController@store');
Route::post('/edit/ticket/{id}', 'TicketController@update');
Route::delete('/delete/ticket/{id}', 'TicketController@destroy');
