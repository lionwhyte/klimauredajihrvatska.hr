<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkcijeController extends Controller
{
    public function index()
    {
        return view('akcije');
    }
}
