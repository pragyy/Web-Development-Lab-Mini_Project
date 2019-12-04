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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/showUsers', 'Controller@showUsers')->middleware('auth');

Route::get('/showMovies','Controller@showMovies');

Route::get('/showPayments','Controller@showPayments')->middleware('auth');

Route::post('/processMovie', 'Controller@processMovie');

Route::get('/addMovie/{user_id}', 'Controller@addMovie');
