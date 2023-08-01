<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');

Route::get('tabel_peminjaman', 'App\Http\Controllers\tabel_peminjamanController@index');
Route::get('tabel_peminjaman/tambah', 'App\Http\Controllers\tabel_peminjamanController@tambah');
Route::post('tabel_peminjaman/tambah_proses', 'App\Http\Controllers\tabel_peminjamanController@tambah_proses');
Route::get('tabel_peminjaman/edit/{id}', 'App\Http\Controllers\tabel_peminjamanController@edit');
Route::post('tabel_peminjaman/edit_proses', 'App\Http\Controllers\tabel_peminjamanController@edit_proses');
Route::get('tabel_peminjaman/delete/{id}', 'App\Http\Controllers\tabel_peminjamanController@delete');