<?php

namespace App\Http\Controllers;

use App\Models\ppe;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ppe = ppe::first();
        return view('dashboard', [
            'ppe' => $ppe,
        ]);
    }
}
