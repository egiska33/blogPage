<?php


Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
