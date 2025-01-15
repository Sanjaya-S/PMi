<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

//show all chart
$router->get('/cart', 'CartController@getcart');

$router->get('cart/quantity/{product_id}', 'CartController@getTotalQuantity');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
