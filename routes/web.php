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

Route::get('/', 'Home\HomeController@index')->name('home');

Route::get('/login/admin', 'Admin\LoginAdminController@getLogin');
Route::post('/login/admin', 'Admin\LoginAdminController@setLogin');

Route::get('/login/author', 'Admin\LoginAuthorController@getLogin');
Route::post('/login/author', 'Admin\LoginAuthorController@setLogin');