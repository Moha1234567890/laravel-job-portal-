<?php

use Illuminate\Support\Facades\Route;

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


//
Auth::routes();
Route::group(['namespace'=>'admins', 'middleware'=>'auth:admin'], function() {

    Route::get('/', 'DashboardController@redirect')->name('admins.auth.dashboard');








});





Route::group(['namespace'=>'admins', 'middleware'=>'guest:admin'], function() {

    Route::get('login', 'AdminsController@login')->name('get.admin.login');

    Route::post('login', 'AdminsController@checkLogin')->name('admin.login');









});

Route::post('logout-admins', 'auth\LoginController@logoutAdmin')->name('logout.admins');
