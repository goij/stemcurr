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
Route::get('/', ['as' => 'index', 'uses' => 'HomeController@getIndex']);
Route::get('news', ['as' => 'news', 'uses' => 'HomeController@getNews']);
Route::get('about/index', ['as' => 'about', 'uses' => 'AboutController@getIndex']);

/**
 * User auth routes
 */
Route::get('user/register', ['as' => 'register', 'uses' => 'UserController@getRegister']);
Route::get('user/login', ['as' => 'login', 'uses' => 'UserController@getLogin']);
Route::get('user/recover', ['as' => 'recover', 'uses' => 'UserController@getLogin']);
Route::post('user/register', ['as' => 'postreg', 'uses' => 'UserController@postRegister']);
Route::post('user/login', ['as' => 'postlogin', 'uses' => 'UserController@postLogin']);
Route::post('user/recover', ['as' => 'postrecover', 'uses' => 'UserController@postLogin']);

/**
 * Topic routes
 */
Route::get('topic', ['as' => 'topic', 'uses' => 'TopicController@index']);
//Route::get('topic/create', ['as' => 'topic_create', 'uses' => 'TopicController@create']);
//Route::get('topic/{id}', ['uses' => 'TopicController@show']);
//Route::get('topic/edit/{id}', ['uses' => 'TopicController@edit']);
//Route::get('topic/destroy/{id}', ['uses' => 'TopicController@destroy']);
//Route::post('topic/create', ['uses' => 'TopicController@store']);
//Route::post('topic/edit/{id}', ['as' => 'topic_update' , 'uses' => 'TopicController@update']);
Route::resource('topic','TopicController');

/**
 * Question Route
 */
Route::get('question', ['as' => 'question', 'uses' => 'QuestionController@index']);
//Route::get('question/create', ['as' => 'question_create', 'uses' => 'QuestionController@create']);
//Route::post('question/create', ['uses' => 'QuestionController@store']);
Route::resource('question','QuestionController');

/**
 *
 * END ADMIN ROUTES
 *
 */
