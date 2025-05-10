<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
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


Route::controller(PageController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});