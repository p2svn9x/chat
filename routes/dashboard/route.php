<?php

Route::group(['prefix' => 'Dashboard'], function () {
    Route::get('/dashboard', 'Size\DashboardController@index')->name('dashboard');
});