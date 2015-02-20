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

/**
 *
 * GUEST ROUTES
 *
 */
    Route::get('/',['as' =>'index','uses'=>'HomeController@getIndex']);


    /**
     * User auth routes
     */
    Route::get('user/register',['as'=>'register','uses'=>'UserController@getRegister']);
    Route::get('user/login',['as'=>'login','uses'=>'UserController@getLogin']);
    Route::get('user/recover',['as'=>'recover','uses'=>'UserController@getLogin']);
    Route::post('user/register',['as'=>'postreg','uses'=>'UserController@postRegister']);
    Route::post('user/login',['as'=>'postlogin','uses'=>'UserController@postLogin']);
    Route::post('user/recover',['as'=>'postrecover','uses'=>'UserController@postLogin']);

    /**
     * Lesson routes
     */
    Route::get('lesson',['as'=>'lesson','uses'=>'LessonController@getIndex']);

/**
 *
 * END GUEST ROUTES
 *
 */


/**
 *
 * TEACHER ROUTES
 *
 */

/**
 *
 * END TEACHER ROUTES
 *
 */

/**
 *
 * ADMIN ROUTES
 *
 */

    Route::get('lesson/create',['as'=>'lesson_create','uses'=>'LessonController@getCreate']);

/**
 *
 * END ADMIN ROUTES
 *
 */
