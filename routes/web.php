<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get     | Consultar
 * Route::post    | Guardar
 * Route::delete  | Eliminar
 * Route::put     | Actualizar
 */

/**
 * Route::get('/', function () {
 * return 'Ruta home';
 * });
 * 
 * Route::get('blog', function () {
 * return 'Listado de blogs';
 * });
 * 
 * Route::get('blog/{slug}', function ($slug) {
 * // Consulta a base de datos
 * return $slug;
 * });
 * 
 * Route::get('buscar', function (Request $request) {
 * return $request->all();
 * });
 */


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function(){
    // Consulta a la base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        ['id' => 3, 'title' => 'Python', 'slug' => 'python'],
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    // Consulta a base de datos
    return view('post', ['post' => $slug]);
})->name('post');