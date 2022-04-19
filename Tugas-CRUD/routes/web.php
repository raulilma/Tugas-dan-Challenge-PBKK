<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;

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

Route::get('/', [StudioController::class, 'index'])->name('home');
Route::get('/buat', [StudioController::class, 'create'])->name('studio.tambah-data');
Route::post('/buat', [StudioController::class, 'store'])->name('studio.buat-data');
Route::get('/tambah', [StudioController::class, 'addMultiple'])->name('studio.tambah-multi');
Route::post('/tambah', [StudioController::class, 'storeMultiple'])->name('studio.buat-multi');
Route::get('/extra', [StudioController::class, 'addMultipleStudio'])->name('studio.tambah-multiStudio');
Route::post('/extra', [StudioController::class, 'storeMultipleStudio'])->name('studio.buat-multiStudio');
Route::get('/edit/{id}', [StudioController::class, 'edit'])->name('studio.edit');
Route::post('/update/{id}', [StudioController::class, 'update'])->name('studio.update');
//detail
Route::get('/detail/{id}', [StudioController::class, 'show'])->name('studio.show');
Route::delete('/delete/{id}', [StudioController::class, 'destroy'])->name('studio.destroy');