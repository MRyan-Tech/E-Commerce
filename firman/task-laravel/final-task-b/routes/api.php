<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route untuk registrasi dan login
Route::post("/register", [UserController::class, "register"]);
Route::post("/login", [UserController::class, "login"]);
Route::get('/users', [UserController::class, 'allUser']);
Route::patch("/users/{id}", [UserController::class, "updateUser"]);
Route::get("/users/{id}", [UserController::class, "user"]);
Route::post("/products", [ProductController::class, "addProduct"]);
Route::get("products/{id}", [ProductController::class, "product"]);
Route::patch("products/{id}", [ProductController::class, "updateProduct"]);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get("/products", [ProductController::class, "allProducts"]);

    Route::prefix('products')->group(function () {
        // Route::get('/', [ProductController::class, 'data']);
        Route::post('/', [ProductController::class, 'store']);
        // Route::get('/{id}', [ProductController::class, 'show']);
        // Route::put('/{id}', [ProductController::class, 'update']);
        // Route::delete('/{id}', [ProductController::class, 'destroy']);
    });

});


// Route yang memerlukan autentikasi
// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get("/users", [UserController::class, "allUser"]);   

//     Route::prefix("product")->group(function () {
//         Route::get("/", [ProductController::class, "allProducts"]);
//         Route::post("/addProduct", [ProductController::class, "addProduct"]);
//     });
// });