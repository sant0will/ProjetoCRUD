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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/products/index', 'ProductController@index')-> name('homeProduct');
Route::get('/admin/products/new', 'ProductController@new')-> name('newProduct');
Route::get('/admin/products/edit', 'ProductController@edit')-> name('editProduct');
Route::get('/admin/products/print', 'ProductController@print')-> name('printProduct');
Route::get('/admin/products/create', 'ProductController@create')-> name('createProduct');
