<?php

Route::group(['prefix' => 'v1'], function () {
    Route::get('/friends', 'Api\FriendsController@index')->name('friends');
});
Route::group(['prefix' => 'api'], function () {
    Route::post('/login', 'Api\Auth\LoginController@email')->name('loginEmail');
});
