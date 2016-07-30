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

Route::auth();

Route::get('/dashboard', 'DashboardController@index');

Route::group(['prefix' => 'preside', 'middleware' => 'session'], function() {
    Route::resource('sessions', 'SessionController',
        ['except' => ['show']
    ]);
});

Route::resource('questions', 'QuestionController');

Route::get('sessions', 'QuestionController@listAllSessions');

Route::group(['prefix' => 'sessions', 'middleware' => 'auth'], function() {
    Route::get('/{id}/questions', 'QuestionController@index');
});
