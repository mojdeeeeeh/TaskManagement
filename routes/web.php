<?php

// Route::view('/test', 'test');
// Route::view('/test-vue', 'test_vue');
// Route::view('/test2-vue', 'test2-vue');

// Route::get('/test/data', function(){
// 	$users = \App\User::all();

// 	return $users;
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books/data', 'BookController@bookData');
Route::resource('/books', 'BookController');
