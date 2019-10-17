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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/hireGrad', 'PagesController@hireGrad');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/help', 'PagesController@help');
Route::get('/terms', 'PagesController@terms');
Route::get('/blog1', 'PagesController@blog1');
Route::get('/blog2', 'PagesController@blog2');

Route::resource('courses', 'CoursesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
