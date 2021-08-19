<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\SiswaController;
use \Illuminate\Support\Str;

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

$router->get('siswa/get', 'SiswaController@get');

$router->post('siswa/add', 'SiswaController@add');

$router->put('siswa/update/{id}', 'SiswaController@update');

$router->delete('siswa/delete/{id}', 'SiswaController@delete');

$router->post("/register", "AuthController@register");

$router->post("/login", "AuthController@login");




