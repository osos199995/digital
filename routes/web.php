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
//    return view('index')->name('ss');
//});


Route::get('/','CareersController@index')->name('home');
Route::get('careers','CareersController@Careers')->name('careers');
Route::get('openpositions/{id}','CareersController@open')->name('openpositions');
Route::get('details/{id}','CareersController@Details')->name('details');
Route::post('candidate','CareersController@store')->name('candidate');

Auth::routes();

Route::get('/home', 'CareersController@index')->name('home');
Route::group(['middleware'=>['auth']],function () {
    Route::get('/dashboard', 'AdminDashboardController@index')->name('dashboard');
    Route::resource('admin-users', 'AdminUserController');
    Route::resource('/admin_careers', 'AdminCareerController');
    Route::resource('/admin_jobs', 'AdminJobsController');
    Route::resource('/admin_service', 'AdminServicesController');
    Route::resource('/candidates', 'AdminCandidatesController');
});


