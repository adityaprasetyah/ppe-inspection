<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class InspecController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('inspection.index', compact('areas'));
    }

    public function list(Area $area)
    {
        return view('inspection.list', compact('area'));
    }

    public function show($area)
    {
        return view('inspec.show', [
            'area' => $area,
        ]);
    }

    public function create()
    {
        return view('inspection.add');
    }
}
