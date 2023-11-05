<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index'); // assuming you have a Blade view named 'index.blade.php' in your resources/views directory
    }
}
