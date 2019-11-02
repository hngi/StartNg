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
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/user/course','UserController@show')->name('user.courses');

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

Route::post('admin/store', 'AdminController@store')->name('admin.store');
Route::get('/admins/view-admins', 'AdminController@view_admins')->name('admin.view-admins');
Route::get('/admins/view-courses', 'AdminController@view_courses')->name('admin.view-courses');
Route::get('/admins/view-students', 'AdminController@view_students')->name('admin.view-students');
Route::get('/admins/view-tutors', 'AdminController@view_tutors')->name('admin.view-tutors');
Route::get('/admins/view/{id}', 'AdminController@view_user_detail')->name('admin.view-user-detail');
Route::get('/admins/{id}/view', 'AdminController@view_course_detail')->name('admin.view-course-detail');
Route::get('/admins/destroy/{id}', 'AdminController@disable')->name('admin.disable');
Route::get('/admins/view-tutor-detail/{id}', 'AdminController@destroy')->name('admin.view-tutor-detail');
Route::get('/admins/create-course', 'AdminController@create_course')->name('admin.create-course');
Route::post('/admins/store', 'AdminController@store_course')->name('admin.store-course');

Route::get('/users/profile', 'UserController@profile')->name('user.profile');
Route::post('/users/update', 'UserController@update')->name('user.update');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('subscriptions', 'SubscriptionsController');

// Tutor Route
Route::get('/tutors', 'TutorController@index')->name('tutor.dashboard');
Route::get('/tutors/view-courses', 'TutorController@view_courses')->name('tutor.view-courses');
Route::get('/tutors/profile', 'TutorController@profile')->name('tutor.profile');
Route::get('/tutors/assignment', 'AssignmentController@index')->name('tutor.assignment');
Route::get('/tutors/upload-resource', 'AssignmentController@upload')->name('tutor.upload-resource');
Route::get('/tutors/view-students', 'TutorController@view_students')->name('tutor.view-students');

Route::post('/upload','AssignmentController@uploadAss')->name('ass.upload');