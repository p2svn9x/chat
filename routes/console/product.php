<?php
Route::group(['prefix' => 'products'], function () {
    Route::get('/list', '\App\Http\Controllers\Console\Products\IndexController@index')->name('console/products/list');
    Route::get('/add/{id?}', '\App\Http\Controllers\Console\Products\IndexController@add')->name('console/products/test');
    Route::post('/save/{id?}', '\App\Http\Controllers\Console\CategoryController@save')->where('id', '[0-9]+');
    Route::get('/edit/{id?}', '\App\Http\Controllers\Console\CategoryController@edit')->where('id', '[0-9]+');
    Route::get('/status/{id?}/{status?}', '\App\Http\Controllers\Console\CategoryController@status')->where(['id', '[0-9]+'], ['status', '[0-1]+']);
    Route::get('/sort/{id?}/{sort?}', '\App\Http\Controllers\Console\CategoryController@sort')->where(['id', '[0-9]+'], ['sort', '[0-9]+']);
});