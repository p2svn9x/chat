<?php

Route::group(['prefix' => 'console'], function () {

    Route::get('/dashboard', '\App\Http\Controllers\Console\IndexController@index')->name('console/dashboard');
    Route::get('/category', '\App\Http\Controllers\Console\CategoryController@index')->name('console/category');
});
