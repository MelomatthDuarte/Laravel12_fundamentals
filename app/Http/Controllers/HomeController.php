<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');  // Asegúrate de tener la vista 'welcome.blade.php'
    }
}
