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

Route::get('/dashboard', 'HomeController@index' );
Route::get('/demo', 'HomeController@home');
Route::get('/test1', 'Article\IndexController@show');
Route::get('/test2', 'Article\IndexController@listTest');
Route::get('/test3', 'Article\IndexController@passTest');
Route::get('/test5', 'Article\IndexController@add');
Route::get('/test4', 'Article\IndexController@verifyPasswordLogin');
Route::get('/chat', 'Chat\IndexController@show');
Route::get('/chat1', 'Chat\IndexController@chat');
Route::get('/demo1', 'Chat\IndexController@demo');
Route::get('/login');
Route::post('/login');
Route::post('conme/test1', 'HahaController@index');
Route::get('conme/test', 'HahaController@demo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
