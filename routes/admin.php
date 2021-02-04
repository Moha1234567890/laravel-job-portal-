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
//Auth::routes();
Route::group(['namespace'=>'admins', 'middleware'=>'auth:admin'], function() {

    Route::get('/', 'DashboardController@redirect')->name('admins.dashboard');
    Route::get('/fetch', 'DashboardController@fetchData')->name('admins.dashboard.fetch');
    Route::get('/fetch-jobs-apps', 'DashboardController@fetchJobApps')->name('admins.dashboard.fetch.jobs.apps');

    Route::get('/create-admins', 'AdminsController@getCreate')->name('create.admins');
    Route::post('/create-admins', 'AdminsController@storeAdmins')->name('store.admins');

    Route::get('/show-admins', 'AdminsController@showAdmins')->name('show.admins');

    Route::get('/show-jobs', 'AdminsController@showJobs')->name('latest.jobs');
    Route::post('/update-jobs/{job_id}', 'AdminsController@updateJobs')->name('update.jobs.admins');

    Route::post('delete-jobs','AdminsController@deleteJobs')->name('delete.jobs.admins');



    Route::get('/create-cats', 'AdminsController@getCreateCats')->name('create.cats.admins');
    Route::post('/create-cats', 'AdminsController@storeCats')->name('store.cats.admins');
    Route::get('/show-cats', 'AdminsController@showCats')->name('show.cats.admins');
    Route::post('delete-cats','AdminsController@deleteCats')->name('delete.cats.admins');
    Route::post('/update-cats/{cat_id}', 'AdminsController@updateCats')->name('update.cats.admins');

});





Route::group(['namespace'=>'admins', 'middleware'=>'guest:admin'], function() {

    Route::get('login', 'AdminsController@login')->name('get.admin.login');

    Route::post('login', 'AdminsController@checkLogin')->name('admin.login');


});

Route::post('logout-admins', 'auth\LoginController@logoutAdmin')->name('logout.admins');
