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



Route::get('/', function (){
    return view('home');
});

Auth::routes(

);

Route::get('/home', 'HomeController@index');

Route::get('/books','BooksController@show');

Route::get('/books/create','BooksController@create');
Route::post('/books/store', 'BooksController@store');
Route::post('/books/update/{id}', 'BooksController@update');

Route::get('/books/destroy/{id}', 'BooksController@destroy');

Route::get('/books/edit/{id}','BooksController@edit');
