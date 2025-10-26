<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\postsController;
Route::get('/', [HomeController::class, 'index']);


 $variable = "chupa peness";

Route::get('/penesito', function () {
    return view('penesito', ['varia' => $variable = "chupa penes" ]);
});

Route::fallback(function () {
    return redirect('/');
});

//Esta es una ruta con parámetros
//Route::get('/posts/{numeroPost}', function ($IdPost){
  //  return "Este es un post dinámicocon su id: {$numeroPost}";
//});

Route::get('/posts/{id}', 
[PostsController::class, 'postsId' ] );



Route::get('/posts', PostsController::class);

//Esta es una ruta con parámetros dobles
Route::get('/posts/{IdPost}/comments/{IdComment}', function ($IdPost, $IdComment){
    return "Este es un comentario {$IdComment} del post {$IdPost}";
});
//Ejemplo de ruta con parámetros dobles
//Servidor/posts/45/comments/67

//Esta es una ruta con parámetros opcionales
Route::get('/usuarios/{name?}', function ($name = "Invitados"){
    return "Bienvenido {$name}";
});

//Esta es una ruta con parámetros opcionales que se comporta diferente si no se envía el parámetro
Route::get('/usuario/{name?}', function ($name = null){
    if (!$name) {
        return "Bienvenido Invitado";
    }
    return "Bienvenido {$name}";
});