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
//Route::get('/admin/add-user', 'AdminController@showCreateUserPanel');


// User routes
//Route::resource('/users', 'UserController');
Route::get('/users', 'UserController@index');
Route::get('/user/{userid}', 'UserController@show');
Route::get('/users/create', 'UserController@create');
Route::get('/user/edit/{userid}', 'UserController@edit');
Route::post('/user/update/{userid}', 'UserController@update');
Route::post('/user/store', 'UserController@store');

// Appointment routes
Route::resource('/appointments', 'AppointmentController');
Route::get('/appointment/{appointmentid}', 'AppointmentController@show');
Route::get('/appointments/create', 'AppointmentController@create');
Route::get('/appointment/edit/{appointmentid}', 'AppointmentController@edit');
Route::post('/appointment/update/{appointmentid}', 'AppointmentController@update');
Route::post('/appointment/store', 'AppointmentController@store');

// Medical units routes
Route::resource('/medicalunits', 'MedicalUnitController');
Route::get('/medicalunit/{medicalunitid}', 'MedicalUnitController@show');
Route::get('/medicalunit/create', 'MedicalUnitController@create');
Route::get('/medicalunit/edit/{medicalunitid}', 'MedicalUnitController@edit');
Route::post('/medicalunit/update/{medicalunitid}', 'MedicalUnitController@update');
Route::post('/medicalunit/store', 'MedicalUnitController@store');


Route::get('/secretary', 'SecretaryController@showSecretaryPanel')->name('secretarycontrolpanel');
Route::get('/doctor', 'DoctorController@showDoctorPanel')->name('doctorcontrolpanel');
Route::get('/user', 'UserController@showUserPanel');