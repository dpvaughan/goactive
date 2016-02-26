<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('activity', 'ActivityController@index');
Route::get('activity/show/{activity}', 'ActivityController@show');
Route::get('activity/add', 'ActivityController@add');

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/', function () {
      return View::make('pages.home', ['name' => 'Home Page']);
    });

    Route::get('/team', function () {
      return View::make('pages.team', ['name' => 'Meet The Team']);
    });

    Route::get('/resources', function () {
      return View::make('pages.resources', ['name' => 'Resources']);
    });

    Route::get('/students', function () {
      return View::make('pages.students', ['name' => 'Students']);
    });

    /*
    Route the logged in user to the students profile page. Use middleware to protect the route
    */

    Route::get('/student_profile', [
                          'middleware' => 'auth',
                          'uses'       => 'UserController@showProfile'
                          ]);

});
