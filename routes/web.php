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

    Route::get('/projects', '\App\Business\Project\Web\ProjectApiController@findAll');
    Route::get('/projects/{id}', '\App\Business\Project\Web\ProjectApiController@findById');
    Route::post('/projects', '\App\Business\Project\Web\ProjectApiController@save');
    Route::put('/projects', '\App\Business\Project\Web\ProjectApiController@save');

    Route::get('/tasks', '\App\Business\Task\Web\TaskApiController@findAll');
    Route::get('/tasks/{id}', '\App\Business\Task\Web\TaskApiController@findById');
    Route::get('/tasks/project/{id}', '\App\Business\Task\Web\TaskApiController@findByProjectId');
    Route::post('/tasks', '\App\Business\Task\Web\TaskApiController@save');
    Route::put('/tasks', '\App\Business\Task\Web\TaskApiController@save');
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function () {
    Route::get('/user', 'HomeController@index')->name('home');
    Route::get('/project', 'HomeController@index')->name('home');
});

Route::group(['prefix'=>'project', 'middleware' => 'auth'], function () {
    Route::get('/{id}', 'HomeController@index')->name('home');
});

Route::get('/dashboard', 'HomeController@index')->name('home');
//Route::get('/admin', 'HomeController@index')->name('home');
//Route::get('/project', 'HomeController@index')->name('home');