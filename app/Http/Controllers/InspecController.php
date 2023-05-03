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

    public function show($id)
    {
        $inspec = Inspec::find($id);
        $area = Area::where('slug', $inspec->area_id)->first();
        return view('inspection.show', [
            'inspec' => $inspec,
            'area' => $area,
        ]);
    }

    public function select_type(Area $area)
    {
        return view('inspection.select_type', compact('area'));
    }

    public function create(Area $area, $type)
    {
        $typename = str_replace(['-', '_'], ' ', $type);
        $typename = ucwords($typename);

        return view('inspection.add', [
            'area' => $area,
            'type' => $type,
            'typename' => $typename,
        ]);
    }

    public function store(Request $request)
    {
        $newInspec = $request->all();

        if ($request->hasFile('image')) {
            // dd('gambar terbaca');
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images/inspection', $imageName);
            $newInspec["image"] = $imageName;
        }

        Inspec::create($newInspec);
        $route = '/inspection/' . $request->area_id;
        return redirect($route)->with('success', 'Data berhasil ditambahkan!');
    }
}
