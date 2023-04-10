<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Inspec;
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
        $inspecs = Inspec::where('area_id', $area->slug)->get();
        return view('inspection.list', [
            'inspecs' => $inspecs,
            'area' => $area,
        ]);
    }

    public function show($area)
    {
        return view('inspec.show', [
            'area' => $area,
        ]);
    }

    public function select_type(Area $area)
    {
        return view('inspection.select_type', compact('area'));
    }
}
