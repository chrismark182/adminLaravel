<?php

//Auth::routes();
Auth::routes(['verify' => true]);//Verifica si el email ha sido verificado 

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/usuarios', 'UserController@index');

//Para generar la vista mas completa del controlador
//Route::resource('/usuarios', 'UserController')->middleware('auth'); //Autentificar acceso login
Route::resource('/usuarios', 'UserController');
Route::resource('/roles', 'RoleController');

//Rutas para nuestra seccion de Notas
//Route::get('/notas/todas', 'NotasController@todas');
Route::resource('/notas/todas', 'NotasController');
Route::get('/notas/favoritas', 'NotasController@favoritas');
Route::get('/notas/archivadas', 'NotasController@archivadas');



