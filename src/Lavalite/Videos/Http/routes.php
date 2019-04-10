<?php

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/videos/videos', 'Lavalite\Videos\Http\Controllers\VideosAdminController');
});

// User routes for videos
Route::group(['prefix' => 'user'], function () {
    Route::resource('/videos/videos', 'Lavalite\Videos\Http\Controllers\VideosUserController');
});

// Public routes for videos
Route::get('videos/videos', 'Lavalite\Videos\Http\Controllers\VideosPublicController@index');
Route::get('videos/videos/{slug?}', 'Lavalite\Videos\Http\Controllers\VideosPublicController@show');
