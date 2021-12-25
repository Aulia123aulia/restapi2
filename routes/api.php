<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BukuController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('peminjaman',[PeminjamanController::class,'index']);
Route::post('peminjaman',[PeminjamanController::class,'create']);
Route::put('/peminjaman/{id}',[PeminjamanController::class,'update']);
Route::delete('/peminjaman/{id}',[PeminjamanController::class,'delete']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('buku',[BukuController::class,'index']);
Route::post('buku',[BukuController::class,'create']);
Route::put('/buku/{id}',[BukuController::class,'update']);
Route::delete('/buku/{id}',[BukuController::class,'delete']);
