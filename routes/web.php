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
    return view('welcome');
});

Route::get('/top', 'ReservationController@index');
Route::get('create', 'ReservationController@create');
Route::post('create', 'ReservationController@store');
Route::get('edit/{id}', 'ReservationController@edit');
Route::post('edit', 'ReservationController@update');
Route::get('delete/{id}', 'ReservationController@show');
Route::post('delete', 'ReservationController@delete');

Route::get('/reservation', function(){
    return view('reservation/reservation_top');
});

Route::get('/reservation/confirm', function(){
    return view('reservation/reservation_confirm');
});

Route::get('reservation/change', function(){
    return view('reservation/reservation_change');
});

