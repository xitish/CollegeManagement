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
    return view('home');
});

// Student Related Routes
Route::resource('student', 'StudentController');

//Department Related Routes
Route::resource('department', 'DepartmentController');
Route::get('department/{shortname}/year/{year}', 'DepartmentController@yearWise');

Route::get('date/{year}', 'StudentController@getBatch');

Auth::routes();
