<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/product/confirm-delete/{id}', [ProductController::class, 'delete'])->name("products.confirm-delete");
Route::resource('products', ProductController::class);
Route::get('/service/confirm-delete/{id}', [ServiceController::class, 'delete'])->name("services.confirm-delete");
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::get('/client/confirm-delete/{id}', [ClientController::class, 'delete'])->name("clients.confirm-delete");
Route::resource('clients', App\Http\Controllers\ClientController::class);