<?php

use App\Http\Controllers\MejaApiController;
use App\Http\Controllers\KursiApiController;
use App\Http\Controllers\LemariApiController;
use App\Http\Controllers\LainnyaApiController;
use App\Models\Kursi;
use App\Models\Lainnya;
use App\Models\Lemari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// MEJA
Route::get('/mejas', [MejaApiController::class, 'index']);
Route::post('/mejas', [MejaApiController::class, 'store']);
Route::get('/mejas/{id_meja}', [MejaApiController::class, 'show']);
Route::put('/mejas/{id_meja}', [MejaApiController::class, 'update']);
Route::delete('/mejas/{id_meja}', [MejaApiController::class, 'destroy']);
// KURSI
Route::get('/kursis', [KursiApiController::class, 'index']);
Route::post('/kursis', [KursiApiController::class, 'store']);
Route::get('/kursis/{id_kursi}', [KursiApiController::class, 'show']);
Route::put('/kursis/{id_kursi}', [KursiApiController::class, 'update']);
Route::delete('/kursis/{id_kursi}', [KursiApiController::class, 'destroy']);
// lemari
Route::get('/lemaris', [LemariApiController::class, 'index']);
Route::post('/lemaris', [LemariApiController::class, 'store']);
Route::get('/lemaris/{id_lemari}', [LemariApiController::class, 'show']);
Route::put('/lemaris/{id_lemari}', [LemariApiController::class, 'update']);
Route::delete('/lemaris/{id_lemari}', [LemariApiController::class, 'destroy']);
// lainnya
Route::get('/lainnyas', [LainnyaApiController::class, 'index']);
Route::post('/lainnyas', [LainnyaApiController::class, 'store']);
Route::get('/lainnyas/{id_lainnya}', [LainnyaApiController::class, 'show']);
Route::put('/lainnyas/{id_lainnya}', [LainnyaApiController::class, 'update']);
Route::delete('/lainnyas/{id_lainnya}', [LainnyaApiController::class, 'destroy']);
