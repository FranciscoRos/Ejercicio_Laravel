<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // <--- 1. IMPORTA EL CONTROLADOR AQUÍ

Route::get('/', function () {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
});

// 2. USA LA SINTAXIS DE ARRAY (CLASE::CLASS, 'METODO')
Route::get('/about', [HomeController::class, 'about'])->name("home.about");