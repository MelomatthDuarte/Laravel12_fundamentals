<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
            ['id' => 3, 'title' => 'Python', 'slug' => 'python'],
        ];
        return view('blog', ['posts' => $posts]);
    }

    public function post($slug)
    {
        $post = $slug;
        return view('post', ['post' => $slug]);
    }
}
