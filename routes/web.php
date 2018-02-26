<?php

Route::view('/','welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books/data', 'BookController@bookData');
Route::resource('/books', 'BookController');

Auth::routes();

