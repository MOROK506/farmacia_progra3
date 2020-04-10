<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UserController')->middleware('auth');
Route::resource('/clientes', 'ClienteController')->middleware('auth');
Route::resource('/productos', 'productoController')->middleware('auth');
