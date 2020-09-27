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

Route::get('/', function () {
    return view('includes.home');
});





Route::get('/contact', function () {
    return view('jobs.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group([ 'prefix' => 'job', 'namespace' => 'jobs'], function(){
    Route::get('create','JobsController@create')->name('createjob');
    Route::post('store','JobsController@store')->name('store.job');
    Route::get('cats','JobsController@cats')->name('browse.jobs.cats');
    Route::get('cities','JobsController@cities')->name('browse.jobs.cities');
    Route::get('category/{name}','JobsController@category')->name('browse.category.jobs');
    Route::get('show/{id}/{uid}','JobsController@show')->name('browse.one.job');
    Route::post('apply','JobsController@send')->name('apply.job');
    Route::post('save','JobsController@save')->name('save.job');
    Route::get('delete/{job_id}','JobsController@delete')->name('delete.job');
    //Route::get('fuck/{id}/{user_id}','JobsController@show')->name('save.job');




});