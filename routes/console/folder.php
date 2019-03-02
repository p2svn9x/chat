<?php
Route::group(['prefix' => 'folder'], function () {
    Route::get('/show/{parent?}', '\App\Http\Controllers\Console\Images\FoldersController@show')
        ->where('parent', '[0-9]+')
        ->name('console/media/folder/show');
    Route::post('/add', '\App\Http\Controllers\Console\Images\FoldersController@add')->name('console/media/folder/add');
});