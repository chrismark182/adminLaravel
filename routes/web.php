<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@index');