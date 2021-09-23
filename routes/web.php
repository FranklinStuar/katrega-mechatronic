<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ServiceController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/product/confirm-delete/{id}', [ProductController::class, 'delete'])->name("products.confirm-delete");
Route::resource('products', ProductController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);