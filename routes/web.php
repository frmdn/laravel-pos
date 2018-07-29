<?php

Route::get('/', function () {
    return view('welcome');
});

// Customer
Route::get('/customers','CustomersController@index');
Route::get('/customer/{id}','CustomersController@show');
Route::post('/customers','CustomersController@store');
// End Customer

// Barang
Route::get('/barangs','BarangsController@index');
Route::get('/barang/{id}','BarangsController@show');
Route::post('/barangs','BarangsController@store');
// End Barang

// Kategori
Route::get('/kategoris','KategorisController@index');
Route::get('/kategori/{id}','KategorisController@show');
Route::post('/kategoris','KategorisController@store');

// End Kategori

// Varian Barang

Route::get('/varians','VarianBarangController@index');
Route::get('/varian/{id}','VarianBarangController@show');
Route::post('/varians','VarianBarangController@store');

// End Varian Barang


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
