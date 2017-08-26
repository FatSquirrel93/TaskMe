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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

/**
 * Combine all api routes inside this group.
 * All routes are prefixed 'api'.
 */
Route::group(['prefix'=>'api', 'middleware' => 'auth'], function () {
    Route::get('/users', '\App\Business\User\Web\UserApiController@findAll');
    Route::get('/users/{username}', '\App\Business\User\Web\UserApiController@findByUsername');
});



Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@index')->name('home');