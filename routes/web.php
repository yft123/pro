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
	Route::get('/home/shopping','HomeController@shopping');
	Route::get('/home/order','HomeController@order');
	Route::get('/home/details','HomeController@details');
	Route::resource('core','CoreController');
	Route::get('/home/dz','HomeController@dz');

});

//详情页
Route::get('xiangqing','XiangqingController@xiangqing');
Route::get('xiangqing1','XiangqingController@xiangqing1');
Route::get('xiangqing2','XiangqingController@xiangqing2');
Route::get('xiangqing3','XiangqingController@xiangqing3');

//购物车
Route::post('/jump','JumpController@store');
//列表页
Route::get('/goods/lists','GoodsController@lists');




Route::group([],function(){
	Route::get('/admin','AdminController@index');
	//用户管理
	Route::resource('user','UserController');
	//商品管理
	Route::resource('/goods','GoodsController');
	//分类管理
	Route::resource('cate','CateController');
	//站点管理
	Route::resource('zhandian','ZhandianController');
	//导航管理
	Route::resource('nav','NavController');
	//主页明星轮播
	Route::resource('/Singlegoods','SinglegoodsController');
});