<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post("/register", [UserController::class, "register"]);
Route::post("/login", [UserController::class, "login"]);

Route::middleware(['auth:sanctum'])->group(function () {
    // Route::get('/user', [UserController::class, 'index']);
    // Route::get('/logout', [UserController::class, 'index']);

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'data']);
        Route::post('/', [ProductController::class, 'store']);
        // Route::get('/{id}', [ProductController::class, 'show']);
        // Route::put('/{id}', [ProductController::class, 'update']);
        // Route::delete('/{id}', [ProductController::class, 'destroy']);
    });

});


Route::get("/users", [UserController::class, "allUser"]);
