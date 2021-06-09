<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
// pelanggan
Route::get('/pelanggan', [\App\Http\Controllers\PelangganController::class, 'index'])->name('index-pelanggan');
Route::post('/pelanggan/save', [\App\Http\Controllers\PelangganController::class, 'create'])->name('create-pelanggan');
Route::get('/pelanggan/{id}', [\App\Http\Controllers\PelangganController::class, 'edit'])->name('pelanggan-edit');
Route::put('/pelanggan-update/{id}', [\App\Http\Controllers\PelangganController::class, 'update'])->name('pelanggan-update');
Route::delete('delete/pelanggan/{id}', [\App\Http\Controllers\PelangganController::class, 'delete'])->name('delete-pelanggan');


// harga
Route::get('harga',[\App\Http\Controllers\HargaController::class, 'index'])->name('get-harga');
Route::put('/harga/ubah/{id}', [\App\Http\Controllers\HargaController::class, 'update'])->name('ubah-harga');

// transaksi
Route::get('/transaksi', [\App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi-index');