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

Route::group([],function(){
	Route::get('/home','HomeController@index');
	Route::get('/home/login','HomeController@login');
	
	Route::get('message','CommonController@message');

	Route::get('/home/registered','HomeController@registered');
	Route::post('/home/login','HomeController@dor');

	Route::get('/home/lists','HomeController@lists');
	Route::get('/home/shopping','HomeController@shopping');
	Route::get('/home/order','HomeController@order');
	Route::get('/home/details','HomeController@details');
	Route::resource('core','CoreController');
	Route::get('/home/dz','HomeController@dz');

});

Route::group([],function(){
	// Route::get('login','AdminController@login');
	Route::get('/admin','AdminController@index');
	Route::resource('user','UserController');
});