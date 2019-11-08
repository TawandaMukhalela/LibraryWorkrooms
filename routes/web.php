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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\WorkroomController;
use App\Workroom;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/workrooms', 'WorkroomController@index');
Route::get('/workrooms/book/{id}', 'WorkroomController@show');
Route::post('/booking/create/{id}', 'BookingController@create');
Route::view('/home', 'home')->middleware('auth');
