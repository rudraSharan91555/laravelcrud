<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductController;

// Route to display the product creation form
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Route to store the product
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route to display the list of products (optional)
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
