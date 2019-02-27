<?php
Route::group(['prefix' => 'images'], function () {
    Route::get('/{id?}', '\App\Http\Controllers\Console\Medias\ImagesController@show')
        ->where('id', '[0-9]+')
        ->name('console/medias/images');
    Route::post('/add', '\App\Http\Controllers\Console\Medias\ImagesController@add')->name('console/medias/folder/add');
});