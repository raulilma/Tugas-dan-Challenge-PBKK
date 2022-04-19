<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
Route::get('/', [ProdukController::class, 'index'])->name('home');
Route::get('/buat', [ProdukController::class, 'create'])->name('produk.tambah-data');
Route::post('/buat', [ProdukController::class, 'store'])->name('produk.buat-data');
Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
//detail
Route::get('/detail/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::delete('/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');