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

//Route::get('/footer','HomeController@footer');



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {
    Route::get('/','HomeController@index')->name('home');

    Route::get('contact','HomeController@contact')->name('contact');
    Route::post('contact','HomeController@storeContact')->name('store');
    Auth::routes();


    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');


    Route::get('/register', 'Auth\LoginController@showRegistrationForm')->name('register');
});





Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    , 'namespace' => 'jobs'], function(){

    Route::group(['prefix' => 'job'], function() {

        Route::get('create','JobsController@create')->name('create.job')->middleware('auth', 'CheckForCreate');
        Route::post('create','JobsController@store')->name('store.job')->middleware('CheckForCreate');
        Route::get('cats','JobsController@cats')->name('browse.jobs.cats');
        Route::get('cities','JobsController@cities')->name('browse.jobs.cities');
        Route::get('job-title/{job_title}','JobsController@jobTitle')->name('browse.jobs.jobtitle');

        Route::get('city/{city}','JobsController@city')->name('browse.city.jobs');
        Route::get('category/{name}','JobsController@category')->name('browse.category.jobs');
        Route::get('show/{id}','JobsController@show')->name('browse.one.job');
        Route::get('loadcounter/{id}','JobsController@loadCounter')->name('load.counter');
        Route::post('apply','JobsController@send')->name('apply.job');
        Route::post('save','JobsController@save')->name('save.job');
        Route::get('delete/{job_id}','JobsController@delete')->name('delete.job');
        Route::any('search','JobsController@search')->name('search');
       
    });



});


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'], 'namespace' => 'users',], function() {

    Route::group(['prefix' => 'user'], function() {

        Route::get('/profile-update/{id}', 'UsersController@profile')->name('profile')->middleware('CheckForUrl');
        Route::post('profile-update/{id}', 'UsersController@update')->name('profile.update')->middleware('CheckForUrl');
        Route::post('profile-update-cv/{id}', 'UsersController@updateCv')->name('profile.update.cv')->middleware('CheckForUrl');
        Route::get('profile-image-update/{id}', 'UsersController@updateImageGet')->name('profile.update.image.get')->middleware('CheckForUrl');

        Route::post('profile-image-update/{id}', 'UsersController@updateImage')->name('profile.update.image')->middleware('CheckForUrl');

        Route::get('saved-jobs/{saved_id}', 'UsersController@savedJobs')->name('saved.jobs')->middleware('CheckForUrl');
        Route::get('more-info', 'UsersController@createMoreInfo')->name('moreinfo')->middleware('CheckForMoreInfo');
        Route::post('more-info//{id}', 'UsersController@storeMoreInfo')->name('store.more.info')->middleware('CheckForMoreInfo');

        Route::get('profile/{id}', 'UsersController@profileForPublic')->name('profile.for.public');
        Route::get('my-jobs/{id}', 'UsersController@myJobs')->name('my.jobs')->middleware('CheckForUrl');

        



    });


});