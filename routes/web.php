<?php

Route::view('/','welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/books', 'BookController');

Auth::routes();

