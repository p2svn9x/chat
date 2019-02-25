<?php
Route::group(['prefix' => 'users'], function () {
    Route::get('/showView', '\App\Http\Controllers\Console\NewusersController@showView')->name('console/users/showView');
    Route::get('/callApi', '\App\Http\Controllers\Console\NewusersController@callApi')->name('console/users/callApi');
    Route::get('/test/{page?}', '\App\Http\Controllers\UserddController@test')->name('console/users/test');
});