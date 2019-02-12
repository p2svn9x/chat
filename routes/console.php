<?php

Route::group(['prefix' => 'console'], function () {

    Route::get('/dashboard', '\App\Http\Controllers\Console\IndexController@index')->name('console/dashboard');

    Route::group(['prefix' => 'category'], function () {
        Route::get('/product', '\App\Http\Controllers\Console\CategoryController@index')->name('console/category/product');
        Route::get('/menu', '\App\Http\Controllers\Console\CategoryController@index')->name('console/category/menu');
        Route::post('/save/{id?}', '\App\Http\Controllers\Console\CategoryController@save')->where('id', '[0-9]+');
        Route::get('/edit/{id?}', '\App\Http\Controllers\Console\CategoryController@edit')->where('id', '[0-9]+');
        Route::get('/status/{id?}/{status?}', '\App\Http\Controllers\Console\CategoryController@status')->where(['id', '[0-9]+'], ['status', '[0-1]+']);
        Route::get('/sort/{id?}/{sort?}', '\App\Http\Controllers\Console\CategoryController@sort')->where(['id', '[0-9]+'], ['sort', '[0-9]+']);
    });
});
