<?php
Route::group(['prefix' => 'folder'], function () {
    Route::get('/show/{parent?}', '\App\Http\Controllers\Console\Medias\FoldersController@show')
        ->where('parent', '[0-9]+')
        ->name('console/medias/folder/show');
    Route::post('/add', '\App\Http\Controllers\Console\Medias\FoldersController@add')->name('console/medias/folder/add');
});