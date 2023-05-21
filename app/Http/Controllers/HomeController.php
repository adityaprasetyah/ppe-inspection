<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->email == 'user@ksu.com') {
            return redirect(route('dashboard'));
        }

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
