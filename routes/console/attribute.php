<?php
Route::group(['prefix' => 'attribute'], function () {
    Route::get('/list/{id?}/{page?}/{limit?}', '\App\Http\Controllers\Console\Attribute\IndexController@index')
        ->name('console/attribute/list')
        ->where(['id', '[0-9]+'], ['page', '[0-9]+'], ['limit', '[0-9]+']);
    Route::get('/add/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@add')->name('console/attribute/add')->where('id', '[0-9]+');
    Route::get('/edit/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@add')->name('console/attribute/edit')->where('id', '[0-9]+');
    Route::get('/show/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@show')->name('console/attribute/show')->where('id', '[0-9]+');
    Route::post('/save/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@save')->name('console/attribute/save')->where('id', '[0-9]+');
});