<?php
Route::group(['prefix' => 'attribute'], function () {
    Route::get('/list/{id?}/{page?}/{limit?}', '\App\Http\Controllers\Console\Attribute\IndexController@index')
        ->name('console/attribute/list')
        ->where(['id', '[0-9]+'], ['page', '[0-9]+'], ['limit', '[0-9]+']);
    Route::get('/add/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@add')->name('console/attribute/add')->where('id', '[0-9]+');
    Route::get('/edit/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@add')->name('console/attribute/edit')->where('id', '[0-9]+');
    Route::get('/delete/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@delete')->name('console/attribute/delete')->where('id', '[0-9]+');
    Route::get('/show/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@show')->name('console/attribute/show')->where('id', '[0-9]+');
    Route::get('/status/{id?}/{status?}', '\App\Http\Controllers\Console\Attribute\IndexController@status')
        ->name('console/attribute/status')
        ->where(['id', '[0-9]+'], ['status', '[0-1]+']);
    Route::post('/save/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@save')->name('console/attribute/save')->where('id', '[0-9]+');
    Route::get('/sort/{id?}/{sort?}', '\App\Http\Controllers\Console\Attribute\IndexController@sort')->where(['id', '[0-9]+'], ['sort', '[0-9]+']);
    Route::get('/production/{id?}', '\App\Http\Controllers\Console\Attribute\IndexController@attributeByCategory')->where(['id', '[0-9]+']);
});