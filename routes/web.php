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
\Route::get('/lista', ['as' => 'lista', 'uses' => 'HomeController@redirectToPontofrio']);
\Route::get('/quero', ['as' => 'quero', 'uses' => 'HomeController@redirectToPontofrio']);
\Route::get('/presente', ['as' => 'presente', 'uses' => 'HomeController@redirectToPontofrio']);