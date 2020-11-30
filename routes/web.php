<?php

use Illuminate\Support\Facades\Route;

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



/**
 *
 * ROUTING UNTUK BUKU
 */

    Route::get('/books','BookController@index')->name('books.index');
    Route::get('/books/add','BookController@formStore')->name('books.add');


 /**
  *
  *AKHIR ROUTING BUKU
  */



Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create','ProductController@createView');
Route::get('/products','ProductController@index')->name('index');


// menambah data
Route::post('/products/create','ProductController@create');

//menghapus data

Route::delete('/products/{id}','ProductController@destroy');

//form for edit

// edit data

Route::get('/products/{id}/edit','ProductController@formPut');
Route::put('/products/{id}/edit','ProductController@put');

// detail barang

Route::get('/products/{id}/detail','ProductController@detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
