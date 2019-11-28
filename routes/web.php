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
// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'BaseController@index')->name('index');

Route::resource('admin', 'AdminController');
Route::resource('user', 'UserController');
Route::get('/disable/user/{id}', 'UserController@disable')->name('users.disable');
Route::resource('course', 'CourseController');
Route::get('/disable/course/{id}', 'CourseController@disable')->name('courses.disable');
Route::resource('course-content', 'CourseContentController');
Route::resource('contact', 'ContactController');
Route::resource('tutor', 'TutorController');
Route::get('/disable/tutor/{id}', 'TutorController@disable')->name('tutors.disable');
Route::resource('review', 'ReviewController');
Route::resource('assignment', 'AssignmentController');
Route::resource('submission', 'SubmissionController');
Route::post('/score', 'SubmissionController@score')->name('score');
Route::resource('schedule', 'ScheduleController');
Route::resource('resource', 'ResourcesController');

Route::get('/about', 'BaseController@about')->name('about');
Route::get('/graduates', 'BaseController@hire')->name('hire');
Route::get('/contact', 'BaseController@contact')->name('contact');
Route::get('/privacy', 'BaseController@privacy')->name('privacy');
Route::get('/terms', 'BaseController@terms')->name('terms');
Route::get('/faq', 'BaseController@faq')->name('faq');
Route::get('/find-course', 'BaseController@find_course')->name('find-course');
Route::get('/curriculum', 'BaseController@curriculum')->name('curriculum');
Route::post('/search-course', 'BaseController@search')->name('search');

Route::get('/mycourses/{id}', 'CourseController@mycourse')->name('mycourses');
Route::get('/register-course/{id}', 'CourseController@registerCourses')->name('register.courses');

Route::get('/courses/registered', 'CourseController@myCourses')->name('course.mycourses');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('subscriptions', 'SubscriptionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
