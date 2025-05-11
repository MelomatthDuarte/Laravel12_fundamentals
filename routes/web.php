<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $posts = Post::latest()->paginate(5); // Usa paginate o get
    return view('home', compact('posts'));
})->name('home');

Route::get('/blog', function() {
    return view('blog');
})->name('blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)->except('show');

require __DIR__.'/auth.php';
// require __DIR__.'/profile.php'; ← comenta o elimina esta línea
