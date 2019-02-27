<?php

Route::group(['prefix' => 'console'], function () {
    Route::get('/dashboard', '\App\Http\Controllers\Console\IndexController@index')->name('console/dashboard');
    include 'console/category.php';
    include 'console/product.php';
    include 'console/attribute.php';
    include 'console/media.php';
    include 'console/newuser.php';

});
