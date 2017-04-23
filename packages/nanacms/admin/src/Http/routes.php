<?php

Route::get('admin', 'AdminController@index');
Route::get('setting', 'SettingController@index');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('article', 'ArticleController');
});

Route::post('/image/upload', 'ImageController@upload');
