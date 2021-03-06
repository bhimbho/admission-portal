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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('course', 'courseController');
Route::resource('department', 'DepartmentController');
Route::resource('sessions', 'SessionController');

Route::resource('applicants', 'ApplicantsController');
Route::get('applicantionbyyear', ['as' => 'applicantionbyyear', 'uses' => 'ApplicantsController@search_applicant_by_year']);

Route::resource('admitted', 'AdmittedController');
Route::resource('pending', 'PendingController');
Route::resource('rejected', 'RejectedController');
Route::resource('faculty', 'FacultyController');
Route::get('applicant/{applicant_id}', 'ApplicantController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


