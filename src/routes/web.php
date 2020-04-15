<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/login', 'AuthController@login');

$router->group(['middleware' => 'auth'], function ($router) {
    $router->get('/concerts', 'ConcertController@index');
    $router->post('/concerts', 'ConcertController@store');
    $router->get('/concerts/{id}', 'ConcertController@show');
    $router->put('/concerts', 'ConcertController@update');
    $router->delete('/concerts/{id}', 'ConcertController@destroy');
});
