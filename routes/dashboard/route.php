<?php

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'Dashboard\indexController@index')->name('dashboard');
});
//Route::group(['namespace' => 'Dashboard'], function() {
//
//});
