<?php
Route::group(['prefix' => 'products'], function () {

    Route::get('/list/{id?}/{page?}/{limit?}', '\App\Http\Controllers\Console\Products\IndexController@index')
        ->name('console/products/list')
        ->where(['id', '[0-9]+'], ['page', '[0-9]+'], ['limit', '[0-9]+']);

    Route::get('/add/', '\App\Http\Controllers\Console\Products\IndexController@add')
        ->name('console/products/add');

    Route::get('/edit/{id?}', '\App\Http\Controllers\Console\Products\IndexController@add')
        ->name('console/attribute/edit')
        ->where('id', '[0-9]+');

    Route::get('/delete/{id?}', '\App\Http\Controllers\Console\Products\IndexController@delete')
        ->name('console/products/delete')
        ->where('id', '[0-9]+');

    Route::get('/show/{id?}', '\App\Http\Controllers\Console\Products\IndexController@show')
        ->name('console/products/show')
        ->where('id', '[0-9]+');

    Route::get('/status/{id?}/{status?}', '\App\Http\Controllers\Console\Products\IndexController@status')
        ->name('console/products/status')
        ->where(['id', '[0-9]+'], ['status', '[0-1]+']);

    Route::post('/save/{id?}', '\App\Http\Controllers\Console\Products\IndexController@save')
        ->name('console/products/save')
        ->where('id', '[0-9]+');
});