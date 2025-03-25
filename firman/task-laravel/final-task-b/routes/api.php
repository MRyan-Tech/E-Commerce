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
Route::get("products/{id}", [ProductController::class, "product"]);
Route::get("/products", [ProductController::class, "allProducts"]);


Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::prefix('products')->group(function () {
        Route::post("/add", [ProductController::class, "addProduct"]);
        Route::post("/update/{id}", [ProductController::class, "updateProduct"]);
    });

});