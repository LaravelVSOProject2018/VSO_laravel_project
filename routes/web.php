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

//programs controller
Route::resource('/programs', 'ProgramsController');
//exams controller
Route::resource('/exams', 'ExamsController');
//programs, then show exams controller
Route::get('programsexams/{id}', 'ProgramsExamsController@show');
//session controller
Route::resource('/sessions', 'SessionsController');


