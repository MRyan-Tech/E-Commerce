<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;

Route::get('/antrian', [AntrianController::class, 'index']);
Route::get('/antrian', [AntrianController::class, 'getAntrian']);
Route::post('/antrian/store', [AntrianController::class, 'store']);
Route::get('/antrian', [AntrianController::class, 'getAntrianList']);
Route::post('/antrian/update/{id}', [AntrianController::class, 'updateAntrian']);
