<?php

Route::get('/', function () {
    return view('not_activated');
});

Route::get('/show-cookie', function () {
    return view('show-cookie');
});


Route::get('/_login', function () {
    return view('login');
});
Route::post('/_login', 'LoginController@login');

Route::get('/_logout', 'LoginController@logout');

Route::get('/ReadytoScan', function () {
    return view('loginsuccess');
});

Route::get('/checkinsuccess', function () {
    return view('checkinsuccess');
});

Route::get('/Scan-QR-Code/{name}',  'ScanController@Qrcode');
// Route::get('/viewall',  'RegisController@viewall');

// Route::get('/checkin', 'CheckinManual@Checkin');

Route::get('/checkin_manual', function () {
    return view('checkin');
});

Route::post('/checkin_manual', 'CheckinManual@Checkin');
Route::get('/walkin_regis', function () {
    return view('walkin_regis');
});
Route::get('/views', 'ForumController@ViewCustomer');
Route::post('Scan-QR-Code/joined', 'ScanController@Joined');
Route::post('walkin_register', 'RegisController@saveApiData');


Route::get('/_menu', 'ForumController@MenuForum');
