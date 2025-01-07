<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/widgets', function () {
    return view('widgets');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/grids', function () {
    return view('grids');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/formswizard', function () {
    return view('formswizard');
});


