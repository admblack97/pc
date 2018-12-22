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
Route::get('home', 'PCController@home')->name('home');
Route::get('register', 'PCController@register')->name('register');
Route::get('login', 'PCController@login')->name('login');
Route::get('menu', 'PCController@menu')->name('menu');
Route::get('kategori', 'PCController@kategori')->name('kategori');
Route::get('detail', 'PCController@detail')->name('detail');
Route::get('keranjang', 'PCController@keranjang')->name('keranjang');


