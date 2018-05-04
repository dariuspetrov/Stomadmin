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
    if(Auth::check()){
        return view('home');
    }
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@showAdminPanel')->name('admincontrolpannel');
Route::get('/admin/add-user', 'AdminController@showCreateUserPanel');


Route::get('/users', 'UserController@index');
Route::get('/user/{userid}', 'UserController@show');
Route::post('/user/create', 'UserController@store');

Route::get('/appointments', 'AppointmentController@index');
Route::get('/appointment/{appointmentid}', 'AppointmentController@show');
Route::get('/appointments/create', 'AppointmentController@create');

Route::get('/secretary', 'SecretaryController@showSecretaryPanel')->name('secretarycontrolpanel');
Route::get('/doctor', 'DoctorController@showDoctorPanel')->name('doctorcontrolpanel');
Route::get('/user', 'UserController@showUserPanel');