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

Auth::routes();

Route::get('/', 'BaseController@index')->name('index');
Route::resource('Admin', 'AdminController');
Route::resource('Blog', 'BlogController');
Route::resource('User', 'UserController');
Route::resource('Course', 'CourseController');
Route::resource('Contact', 'ContactController');

Route::get('/about', 'BaseController@about')->name('about');
Route::get('/graduates', 'BaseController@hire')->name('hire');
Route::get('/contact', 'BaseController@contact')->name('contact');
Route::get('/courses/index', 'CourseController@index')->name('courses.index');
//Route::get('/mycourses/{id}', 'BaseController@mycourse')->name('mycourses');
Route::get('/privacy', 'BaseController@privacy')->name('privacy');
Route::get('/terms', 'BaseController@terms')->name('terms');
Route::get('/faq', 'BaseController@faq')->name('faq');
Route::get('/find-course', 'BaseController@findcourse')->name('find-course');
Route::get('/curriculum', 'BaseController@curriculum')->name('curriculum');
