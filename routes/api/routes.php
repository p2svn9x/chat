<?php

Route::group(['prefix' => 'v1'], function () {
    Route::get('/friends', 'Api\FriendsController@index')->name('friends');
});
Route::group(['prefix' => 'api'], function () {
    Route::post('/login', 'Api\Auth\LoginController@email')->name('loginEmail');

    Route::group(['prefix' => 'console'], function () {
        Route::post('/category/save/{id?}', '\App\Http\Controllers\Api\Console\CategorysController@save')->where('id', '[0-9]+');
    });
});
