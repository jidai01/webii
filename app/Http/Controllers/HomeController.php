<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = "Home";
        $content = "Ini halaman Home dari controller";
        return view('home', compact('title', 'content'));
    }
}
