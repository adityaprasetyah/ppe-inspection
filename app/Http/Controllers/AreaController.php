<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('area.index', [
            'areas' => $areas,
        ]);
    }

    public function add()
    {
        return view('area.add');
    }

    public function store(Request $request)
    {
        $area = $request->all();
        $area['slug'] = strtolower(str_replace(' ', '-', $area['name']));

        Area::create($area);
        return redirect('/area')->with('success', 'Berhasil menambahkan area!');
    }

    public function destroy($slug)
    {
        $area = Area::where('slug', $slug)->first();
        $area->delete();
        return redirect('/area')->with('success', 'area berhasil dihapus!');
    }
}
