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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
//departments controller
Route::resource('/userrights', 'UserRightsController');
//departments controller
Route::resource('/departments', 'DepartmentsController');
//programs controller
Route::resource('/programs', 'ProgramsController');
//exams controller
Route::resource('/exams', 'ExamsController');
//programs, then show exams controller
Route::get('programsexams/{id}', 'ProgramsExamsController@show');
//session controller
Route::resource('/sessions', 'SessionsController');
//exams, then show session controller
Route::get('examssessions/{id}', 'ExamsSessionsController@show');
//admin page
//
Route::get('/admin', function () {
    return view('admin_start');
});
});

Route::group(['middleware' => 'App\Http\Middleware\CandidateMiddleware'], function()
{

Route::resource('/logged', 'LoggedStudentsController');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('start');
});

Route::resource('/students', 'StudentsController');
