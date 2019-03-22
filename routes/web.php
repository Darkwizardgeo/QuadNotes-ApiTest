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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('notes', 'NotesController@all');

    $router->post('notes', 'NotesController@add');

    $router->get('notes/{id}','NotesController@get');

    $router->put('notes/{id}','NotesController@put');

    $router->patch('notes/{id}', 'NotesController@patch');

    $router->delete('notes/{id}', 'NotesController@remove');
});

