<?php

use App\Http\Controllers\MejaController;
use App\Http\Controllers\KursiController;
use App\Models\Kursi;
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

Route::get('/mejas', [MejaController::class, 'index']);
Route::get('/mejas/tambah', [MejaController::class, 'tambah']);
Route::post('/mejas', [MejaController::class, 'store']);
Route::get('/mejas/{id_meja}/edit', [MejaController::class, 'edit']);
Route::put('/mejas/{id_meja}', [MejaController::class, 'update']);
Route::delete('/mejas/{id_meja}', [MejaController::class, 'destroy']);
// kursi
Route::get('/kursis', [KursiController::class, 'index']);
Route::get('/kursis/tambah', [KursiController::class, 'tambah']);
Route::post('/kursis', [KursiController::class, 'store']);
Route::get('/kursis/{id_kursi}/edit', [KursiController::class, 'edit']);
Route::put('/kursis/{id_kursi}', [KursiController::class, 'update']);
Route::delete('/kursis/{id_kursi}', [KursiController::class, 'destroy']);
// lemari
Route::get('/lemaris', [KursiController::class, 'index']);
Route::get('/lemaris/tambah', [KursiController::class, 'tambah']);
Route::post('/lemaris', [KursiController::class, 'store']);
Route::get('/lemaris/{id_kursi}/edit', [KursiController::class, 'edit']);
Route::put('/lemaris/{id_kursi}', [KursiController::class, 'update']);
Route::delete('/lemaris/{id_kursi}', [KursiController::class, 'destroy']);
