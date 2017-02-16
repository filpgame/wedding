<?php

\Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

\Route::post('/rsvp', ['as' => 'rsvp', 'uses' => 'InvitesController@store']);

