<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products/{product}', [ProductsController::class, 'show']); 
Route::get('/products/{product}/edit', [ProductsController::class, 'edit']);
Route::put('/products/{product}', [ProductsController::class, 'update']);
Route::delete('/products/{product}', [ProductsController::class, 'destroy']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


