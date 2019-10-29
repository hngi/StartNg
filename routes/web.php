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

//Route::get('/', function () {
//    return view('frontend.frontend.index');
//});
Route::get('/', 'BaseController@index')->name('index');
Route::resource('Admin', 'AdminController');
Route::resource('Blog', 'BlogController');
Route::resource('User', 'UserController');
Route::resource('Course', 'CourseController');
Route::resource('Contact', 'ContactController');