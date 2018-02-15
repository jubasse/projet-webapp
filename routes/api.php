<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Routing\Router;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\\'], function (Router $router) {
    $router->resource('men', 'ManModelController', ['only' => ['index', 'show']]);
    $router->resource('men', 'ManModelController', [
        'only' => ['store', 'update', 'delete'],
        'middleware' => ['jwt.auth']
    ]);
    $router->resource('women', 'WomanModelController', ['only' => ['index', 'show']]);
    $router->resource('women', 'WomanModelController', [
        'only' => ['store', 'update', 'delete'],
        'middleware' => ['jwt.auth']
    ]);
    $router->resource('articles', 'ArticleController', ['only' => ['index', 'show']]);
    $router->resource('articles', 'ArticleController', [
        'only' => ['store', 'update', 'delete'],
        'middleware' => ['jwt.auth']
    ]);
});
