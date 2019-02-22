<?php
Route::group(['prefix' => 'folder'], function () {
    Route::get('/show/{parent?}', '\App\Http\Controllers\Console\Images\FofdersController@show')
        ->where('parent', '[0-9]+')
        ->name('console/folder/show');
    Route::post('/add', '\App\Http\Controllers\Console\Images\FofdersController@add')->name('console/folder/add');
});