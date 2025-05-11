<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('blog.index', compact('posts'));  // 👈 Pasas $posts a la vista
    }
}
