<?php


Route::get('/','UsersController@index');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');























//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//
////Route::get('product',["users"=>"ProductController@index"]);
//
//
//
//
//
//
//
//
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//
//Route::group(['middleware' =>['auth','admin']],function() {
//
//    Route::get('dashboard',function(){
//        return view('admin.dashboard');
//
////    Route::get('admin',function(){
////
////        return view('home');
//
//
//    });
////    Route::get('/role-register','Admin\DashboardController@registered');
////
////    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
////
////    Route::resource('roles','RoleController');
////
////    Route::resource('users','UserController');
////
////    Route::resource('products','ProductController');
//
//
//
//
//
//
//
//
//
//
//});
//


























