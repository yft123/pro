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

Route::group(['middleware'=>'login'],function(){
	//购物车跳转页
	Route::post('/cart','CartController@store');
	//购物车
	Route::get('/cart','CartController@shopping');
	//删除
	Route::get('/cart/delete','CartController@delete');
});
	//主页
	Route::get('/home','HomeController@index');
	
	
	Route::get('message','CommonController@message');

	
	//订单
	Route::get('/order','HomeController@order');

	Route::resource('/core','CoreController');
	//地址
	Route::resource('/address','AddressController');
	Route::get('/getv','AddressController@getv');

//注册
Route::get('/home/registered','HomeController@registered');
Route::post('/home/login','HomeController@dor');

//登录
Route::get('/home/login','LoginController@login');
Route::post('/home/login','LoginController@homelogin');


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
	//轮播管理
	Route::resource('/banner','BannerController');
	//主页明星轮播
	Route::resource('/Singlegoods','SinglegoodsController');
});