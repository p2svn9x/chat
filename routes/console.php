<?php

Route::group(['prefix' => 'console'], function () {

    Route::get('/', '\App\Http\Controllers\Console\IndexController@index')->name('index');
    Route::get('/category', '\App\Http\Controllers\Console\CategoryController@index')->name('category');
});
