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
route::get("wellcome",function(){
	return view("welcome");
});

//ADMIN PAGE
route::group(["prefix"=>"","middleware"=>"authMiddle"],function(){
	route::group(["prefix"=>"users"],function(){
		route::get("list","usersController@getList");
		route::get("add","usersController@getAdd");
		route::post("add","usersController@postAdd");
		route::get("edit/{id}","usersController@getEdit");
		route::post("edit/{id}","usersController@postEdit");
		route::get("delete/{id}","usersController@getDelete");
	});
	route::group(["prefix"=>"statistical"],function(){
		route::get("","statisticalController@getStatistical");
        route::post("","statisticalController@postStatistical");

	});
});
route::get("","authController@getlogin");
route::post("login","authController@postlogin");
route::get("logout","authController@logout");











