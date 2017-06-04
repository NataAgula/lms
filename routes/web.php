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

Route::group(['middleware' =>  ['auth', 'is_admin']], function() {
	Route::resource('faculties', 'FacultyController', ['except' => ['destroy']]);
	Route::resource('programs', 'ProgramController', ['except' => ['destroy']]);
	Route::resource('courses', 'CourseController', ['except' => ['destroy']]);
	Route::resource('users', 'UserController', ['except' => ['destroy']]);
	Route::resource('programs.courses', 'ProgramCourseController', ['except' => ['show', 'edit', 'update']]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
