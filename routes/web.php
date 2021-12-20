<?php

// back end
Route::get('/home-admin','AdminController@show_dashboard');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

// user name
Route::get('/all-user','UserController@all_user');

Route::get('/block-user/{username}','UserController@block_user');
Route::get('/active-user/{username}','UserController@active_user');
Route::get('/edit-user/{username}','UserController@edit_user');
Route::post('/update-user/{username}','UserController@update_user');

Route::get('/search-user','UserController@all_user');

// Thống kê
Route::get('/statistic-staff-is-late','StatisticController@staff_is_late');
Route::get('/statistic-work-days-month','StatisticController@work_days');

Route::get('/work-days-month','StatisticController@work_days_month');

// front end
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




