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
Route::view('/', 'homepage');
Route::get('user', 'Auth\AuthenticateController@getAuthenticatedUser')->name('auth.user');
Route::post('auth', 'Auth\AuthenticateController@authenticate')->name('authenticate');