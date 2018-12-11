<?php

Route::group(['prefix' => 'v1'], function () {
    Route::get('/friends', 'Api\FriendsController@index')->name('friends');
});