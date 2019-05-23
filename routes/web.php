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
//     return view('welcome');
	return view( 'home' )
		->with( 'title', 'Home' );
});

Route::get('/incubator', 'IncubatorController@show_home');

Route::get('/more-test', function(){
	return "<h1>proof of concept</h1>";
	});
