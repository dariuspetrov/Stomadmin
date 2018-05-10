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
Route::get('/secretary', 'SecretaryController@showSecretaryPanel')->name('secretarycontrolpanel');
Route::get('/doctor', 'DoctorController@showDoctorPanel')->name('doctorcontrolpanel');
Route::get('/user', 'UserController@showUserPanel');
//Route::get('/admin/add-user', 'AdminController@showCreateUserPanel');

Route::resource('/users', 'UserController');
Route::resource('/medicalunits', 'MedicalUnitController');
Route::resource('/appointments', 'AppointmentController');
Route::resource('/referrals', 'ReferralController');
