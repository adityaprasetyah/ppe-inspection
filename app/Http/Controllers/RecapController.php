<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class RecapController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('recapitulation.index', compact('areas'));
    }

    public function list(Area $area)
    {
        return view('recapitulation.list', compact('area'));
    }

    public function show($area)
    {
        return view('recapitulation.show', [
            'area' => $area,
        ]);
    }

    public function create()
    {
        return view('recapitulation.add');
    }
}
