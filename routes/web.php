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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', function () {
    return view('print.invoice');
});
Route::get('/berita_acara', function () {
    return view('print.berita_acara');
});
// Route::get('/kwitansi', function () {
//     return view('print.kwitansi');
// });

// Route::get('data/perusahaan', function () {
//     return view('perusahaan.index');
// });

Route::get('/data/perusahaan', 'App\Http\Controllers\PerusahaanController@index')->name('perusahaan');
Route::post('/data/perusahaan', 'App\Http\Controllers\PerusahaanController@store')->name('store.perusahaan');
Route::put('/data/perusahaan/{id}', 'App\Http\Controllers\PerusahaanController@update')->name('update.perusahaan');
Route::get('/data/perusahaan/{id}', 'App\Http\Controllers\PerusahaanController@destroy')->name('delete.perusahaan');

Route::get('/data/perintah_kerja', function () {
    return view('perintah_kerja.index');
});

// Route::get('/data/perintah_kerja/{id}', 'App\Http\Controllers\PerusahaanController@show')->name('perintah.kerja');
Route::post('/data/perintah_kerja', 'App\Http\Controllers\PerusahaanController@store_spk')->name('store.perintah.kerja');
Route::get('/data/perintah_kerja', 'App\Http\Controllers\PerintahkerjaController@index')->name('perintah.kerja');
Route::post('/data/perintah_kerja/create', 'App\Http\Controllers\PerintahkerjaController@create')->name('perintah.kerja.create');
Route::get('/data/pesan/{id}', 'App\Http\Controllers\PerusahaanController@show')->name('pesan');
Route::get('/kwitansi/{id}', 'App\Http\Controllers\PerusahaanController@kwitansi')->name('kwitansi');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
