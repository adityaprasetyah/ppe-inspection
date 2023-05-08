<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function guide() 
    {
        return view('guide');
    }

    public function about() 
    {
        return view('about');
    }
}
