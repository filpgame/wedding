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

\Route::group(['middleware' => ['web']], function (\Illuminate\Routing\Router $router) {
    $router->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    \Route::auth();
    $router->post('/rsvp', ['as' => 'rsvp', 'uses' => 'InvitesController@store']);
    \Route::group(['middleware' => ['adm']], function (\Illuminate\Routing\Router $router) {
        Route::resource('invites', 'InvitesController');
        Route::resource('people', 'PeopleController');
        Route::resource('users', 'UsersController');
        Route::get('/home', 'HomeController@loggedIndex');

    });
});
