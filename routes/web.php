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
\Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
\Route::post('/rsvp', ['as' => 'rsvp', 'uses' => 'HomeController@rsvp']);
\Route::post('/lista', ['as' => 'rsvp', 'uses' => 'HomeController@redirectToPontofrio']);
\Route::post('/quero', ['as' => 'rsvp', 'uses' => 'HomeController@redirectToPontofrio']);
\Route::post('/presente', ['as' => 'rsvp', 'uses' => 'HomeController@redirectToPontofrio']);