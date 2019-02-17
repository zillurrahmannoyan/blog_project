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

Route::get('/', 'HomeController@index');







/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/admin-login', 'AdminController@index');
Route::get('/admin-dasboard', 'AdminController@show_dashboard');
Route::post('/admin-dasboard', 'AdminController@dashboard');