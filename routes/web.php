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
Route::get('/admin/viewuser/{userid}', 'AdminController@viewSingleUser');
Route::get('/admin/viewusers', 'AdminController@viewUsersData');

Route::get('/secretary', 'DisplayController@showSecretaryPanel')->name('secretarycontrolpanel');
Route::get('/doctor', 'DisplayController@showDoctorPanel')->name('doctorcontrolpanel');