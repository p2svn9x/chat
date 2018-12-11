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

Route::get('/', function () {
    return view('welcome');
});
require 'dashboard/route.php';
require 'api/routes.php';
//Route::get('/dashboard', 'HomeController@index' );
Route::get('conme/test1', 'HahaController@index');
Route::get('conme/test', 'HahaController@demo');
Route::get('/login', '\App\Http\Controllers\Auth\LoginController@formLogin')->name('login');
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

