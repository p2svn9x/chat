<?php

Route::group(['prefix' => 'medias'], function () {
    include 'media/folder.php';
    include 'media/images.php';
});
