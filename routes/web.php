<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // <--- 1. IMPORTA EL CONTROLADOR AQUÍ
use App\Http\Controllers\ProductController;
Route::get('/', [HomeController::class,'index'])->name("home.index");


// 2. USA LA SINTAXIS DE ARRAY (CLASE::CLASS, 'METODO')
Route::get('/about', [HomeController::class, 'about'])->name("home.about");

// Rutas para listas productos
Route::get('/products', [ProductController::class, 'index']) -> name("product.index");
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");