<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/details/{id}','PostController@details')->name('posts.details');
Route::get('/posts/add', 'PostController@add')->name('posts.add');
Route::post('/posts/insert', 'PostController@insert')->name('posts.insert');
Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit');
Route::post('/posts/update/{id}', 'PostController@update')->name('posts.update');
Route::get('/posts/delete/{id}', 'PostController@delete')->name('posts.delete');


