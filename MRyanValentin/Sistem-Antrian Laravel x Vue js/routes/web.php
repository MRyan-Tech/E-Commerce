<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menangani Vue.js
Route::get('/{any}', function () {
    return view('welcome'); // Gantilah 'app' dengan nama file Blade utama Vue Anda
})->where('any', '.*');

Route::middleware(['throttle:100,1'])->group(function () {
    Route::get('/data', function (Request $request) {
        return response()->json(['message' => 'Success']);
    });
});