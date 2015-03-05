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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'WelcomeController@index');
Route::get('work', 'WelcomeController@work');
Route::get('data', 'WelcomeController@data');
Route::get('leads', 'WelcomeController@leads');
Route::get('terms', 'WelcomeController@terms');

/*Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);*/
