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
Route::resource('admin', 'AdminController');
Route::resource('blog', 'BlogController');
Route::resource('user', 'UserController');
Route::resource('course', 'CourseController');
Route::resource('course-content', 'CourseContentController');
Route::resource('contact', 'ContactController');
Route::resource('tutor', 'TutorController');
Route::resource('tutor', 'AssignmentController');

Route::get('/about', 'BaseController@about')->name('about');
Route::get('/graduates', 'BaseController@hire')->name('hire');
Route::get('/contact', 'BaseController@contact')->name('contact');
Route::get('/courses/index', 'CourseController@index')->name('courses.index');
Route::get('/privacy', 'BaseController@privacy')->name('privacy');
Route::get('/terms', 'BaseController@terms')->name('terms');
Route::get('/faq', 'BaseController@faq')->name('faq');
Route::get('/find-course', 'BaseController@findcourse')->name('find-course');
Route::get('/curriculum', 'BaseController@curriculum')->name('curriculum');

Route::get('/mycourses/{id}', 'CourseController@mycourse')->name('mycourses');
Route::get('/register-course/{id}', 'CourseController@registerCourses')->name('register.courses');


Route::get('/admins/view-courses', 'AdminController@view_courses')->name('admin.view-courses');
Route::get('/admins/view-students', 'AdminController@view_students')->name('admin.view-students');
Route::get('/admins/view-tutors', 'AdminController@view_tutors')->name('admin.view-tutors');
Route::get('/admins/view-user-detail/{id}', 'AdminController@view_user_detail')->name('admin.view-user-detail');
Route::get('/admins/create-course', 'AdminController@create_course')->name('admin.create-course');
Route::post('/admins/store', 'AdminController@store_course')->name('admin.store-course');

Route::get('/users/profile', 'UserController@profile')->name('user.profile');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('subscriptions', 'SubscriptionsController'); 

Route::get('/tutors/view-courses', 'TutorController@index')->name('tutor.view-courses');
