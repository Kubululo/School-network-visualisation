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
Route::get('/documentation', function () {
    return view('documentation');
});
Route::get('/home/reservation/b113', function () {
    return view('resB113');
});
Route::get('/home/users', function () {
    return view('users');
});
Route::get('auth/logout', 'Auth\AuthController@logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home/reservation/b113', 'ScheduleController@index')->name('events.index')->middleware('auth');
Route::post('/home/reservation/b113', 'ScheduleController@addEvent')->name('events.add')->middleware('auth');
Route::get('/home/users', 'active_controller@allUsers')->middleware('auth');
Route::get('/home/computers', 'computers@computers')->middleware('auth');
Route::post('/insertPC', 'computers@add_computer')->middleware('auth');
Route::post('/insertPrinter', 'computers@add_printer')->middleware('auth');
Route::post('/insertNTB', 'computers@add_notebook')->middleware('auth');
Route::get('/home/ping/b201a', 'ping_controller@pingB201a')->middleware('auth');
Route::get('/home/user', 'users_controller@allUsers')->middleware('auth');
Route::post('/promote','users_controller@promote')->middleware('auth');
Route::post('/demote','users_controller@demote')->middleware('auth');
Route::post('/forget','users_controller@forget')->middleware('auth');
Route::post('/remember','users_controller@remember')->middleware('auth');



