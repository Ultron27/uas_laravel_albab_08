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

Route::prefix('barang')->group(function() {
	Route::get('/', 'BarangController@index');
	Route::post('/', 'BarangController@add');
	Route::get('/add', 'BarangController@add');
	Route::get('/edit/{id}', 'BarangController@edit')->name('edit_barang');
	Route::post('/update','BarangController@update');
	Route::get('/delete/{id}', 'BarangController@delete')->name('hapus_barang');
});

Route::prefix('gudang')->group(function(){
	Route::get('/all', 'GudangController@all')->name('all_gudang');
	Route::get('/add', 'GudangController@add')->name('add_gudang');
	Route::get('/edit/{id}', 'GudangController@edit')->name('edit_gudang');
	Route::post('/save', 'GudangController@save')->name('save_gudang');
	Route::post('/update', 'GudangController@update')->name('update_gudang');
	Route::get('/delete/{id}', 'GudangController@delete')->name('delete_gudang');
	Route::get('/jumlah', 'GudangController@jumlah')->name('jumlah_gudang');
});
