<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route untuk registrasi dan login
Route::post("/register", [UserController::class, "register"]);
Route::post("/login", [UserController::class, "login"]);

// Route yang memerlukan autentikasi
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get("/users", [UserController::class, "allUser"]);   

    Route::prefix("product")->group(function () {
        Route::get("/", [ProductController::class, "allProducts"]);
        Route::post("/addProduct", [ProductController::class, "addProduct"]);
    });
});