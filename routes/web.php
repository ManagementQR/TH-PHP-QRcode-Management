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
    return 'he';
});

Route::get('/login', 'LoginController@index');
Route::get('/client-dashboard', function () {
    return view('client-dashboard');
});
Route::get('/gioVao/{user_name}', 'CheckInController@showCheckIn');
Route::get('/search', 'CheckInController@search');


Route::post('/client-dashboard', 'LoginController@login');

Route::get('/register', 'LoginController@index_register');
Route::post('/register', 'LoginController@register');

Route::get('/addCheckIn/{user_name}', 'CheckInController@addCheckIn');

Route::get('/quet_QR', function () {
    return view('quet_QR');
});




