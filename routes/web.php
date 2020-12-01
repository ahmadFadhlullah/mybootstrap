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
 * Routing untuk simpan
 */

Route::get('/simpan','SimpanController@index')->name('simpan.index');
Route::post('/simpan/add/{id}','SimpanController@store')->name('simpan.add');
Route::delete('/simpan/delete/{id}','SimpanController@destroy')->name('simpan.destroy');

// CART

Route::put('/carts/update/{id}','CartController@put')->name('carts.update');
Route::get('/cart','CartController@index')->name('carts.index');
Route::post('/carts/add/{id}','CartController@store')->name('carts.add');
Route::delete('/carts/delete/{id}','CartController@destroy')->name('carts.destroy');
Route::get('/carts/edit/{id}','CartController@formPut')->name('carts.edit');

/**
 *
 * ROUTING UNTUK BUKU
 */

    Route::get('/books','BookController@index')->name('books.index');
    Route::get('/books/add','BookController@formStore')->name('books.add');

    // Update Buku

    Route::put('/books/update/{id}','BookController@put')->name('books.update');

    //Delete Buku

    Route::delete('/books/delete/{id}','BookController@destroy')->name('books.destroy');

    //form put
    Route::get('/books/update/{id}','BookController@formPut')->name('books.formPut');

    // menambah buku

    Route::post('/books/add','BookController@store');
    // detail
    Route::get('/books/detail/{id}','BookController@detail')->name('books.detail');
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

Route::get('/products/{id}/detail','ProductController@detail')->name('products.detail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
