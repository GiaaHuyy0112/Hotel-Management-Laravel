<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'web'], function(){

});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login/', function () {
    return view('login');
});

Route::get('about/', function () {
    return view('about');
});

Route::get('booking/', function () {
    return view('booking');
});

Route::get('bookingcheck/', function () {
    return view('bookingcheck');
});

Route::get('detail/', 'Controller@getDetails');

Route::get('login/', 'Controller@getLogin');

Route::get('login/', 'Controller@postLogin');

Route::get('logout/', 'Controller@logout');