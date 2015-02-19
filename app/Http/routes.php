<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','HomeController@getIndex');


/**
 * User auth routes
 */
Route::get('user/register',['as'=>'register','uses'=>'UserController@getRegister']);
Route::get('user/login',['as'=>'login','uses'=>'UserController@getLogin']);
Route::post('user/register',['as'=>'postreg','uses'=>'UserController@postRegister']);
Route::post('user/login',['as'=>'postlogin','uses'=>'UserController@postLogin']);

/**
 * Lesson routes
 */
Route::get('lesson',['as'=>'lessonhome','uses'=>'LessonController@getIndex']);

/**
 * Default laravel controllers
 */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
