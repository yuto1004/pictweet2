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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/tweets', 'TweetsController@index');

    Route::get('/', 'TweetsController@index');

    Route::get('/tweets/create', 'TweetsController@create');

    Route::post('/tweets', 'TweetsController@store');

    Route::get('/tweets/{tweet_id}/edit', 'TweetsController@edit');

    Route::get('/tweets/{id}/delete', 'TweetsController@destroy');

    Route::get('/users/{id}', 'UsersController@show');

});