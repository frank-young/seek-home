<?php

Route::get('admin', 'AdminController@index');
Route::get('setting', 'SettingController@index');

// Route::group(['middleware' => 'auth'], function() {
    Route::resource('article', 'ArticleController');
// });
