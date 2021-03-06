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

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->group(['prefix' => 'quote'], function () use ($router) {
        $router->get('/', "QuoteController@index");
        $router->get('/{id: [0-9]+}', "QuoteController@show");
        $router->get('/sourceCountry/destinyCountry', "QuoteController@getCheaperQuote");
        $router->post('/', 'QuoteController@store');
        $router->put('/{id}', 'QuoteController@update');
        $router->delete('/{id}', 'QuoteController@destroy');
    });
});