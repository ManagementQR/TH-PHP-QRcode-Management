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
Route::post('/client-dashboard', 'LoginController@login');
Route::get('/register', 'LoginController@index_register');
Route::post('/register', 'LoginController@register');
// Route::get('/client-dashboard', function () {
//     return view('client-dashboard');
// });
//giờ vào
Route::get('/gioVao/{user_name}', 'CheckInController@showCheckIn');
Route::get('/search', 'CheckInController@search');
Route::get('/addCheckIn/{user_name}', 'CheckInController@addCheckIn');

//giờ ra
Route::get('/gioRa/{user_name}', 'CheckOutController@showCheckOut');
Route::get('/addCheckOut/{user_name}', 'CheckOutController@addCheckOut');
Route::get('/searchOut', 'CheckOutController@search');







Route::get('/quet_QR', function () {
    return view('quet_QR');
});




