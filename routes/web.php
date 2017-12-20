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

Route::get('/', 'HomeController@index');




Route::group(['middleware'=>'login'],function(){
	Route::get('/zfb','PayController@index');
	//购物车跳转页
	Route::post('/cart','CartController@store');
	//购物车
	Route::get('/cart','CartController@shopping');
	//删除
	Route::get('/cart/delete','CartController@delete');

	Route::resource('/core','CoreController');
	//地址
	Route::resource('/address','AddressController');
	Route::get('/getv','AddressController@getv');
	//支付
	Route::get('/order/pay','OrderController@pay');
	//订单
	Route::post('/order/confirm','OrderController@confirm');
	Route::resource('order','OrderController');
	Route::get('/order','HomeController@order');
	
});
	//主页
	Route::get('/home','HomeController@index');

//注册
Route::get('/home/registered','HomeController@registered');
Route::post('home/login','HomeController@dor');
//前台退出登录
Route::get('/logout','HomeController@quit');




//登录
Route::get('/home/login','LoginController@login');
Route::post('/home','LoginController@homelogin');
Route::get('message','CommonController@message');

//列表页
Route::get('/goods/lists','GoodsController@lists');
Route::get('/a','HomeController@a');



//后台退出
Route::get('/admin/login','UserController@quit');
//后台登录
Route::get('/admin/login','loginController@admin');
Route::post('/admin/login','loginController@adminlogin');



Route::group([],function(){
	Route::get('/admin','AdminController@index');
	//用户管理
	Route::resource('/user','UserController');
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
	//视频管理
	Route::resource('/video','VideoController');
	//文章管理
	Route::resource('article','ArticleController');
});

