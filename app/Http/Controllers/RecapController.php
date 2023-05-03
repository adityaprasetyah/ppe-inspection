<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Recap;
use Carbon\Carbon;
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
        $recaps = Recap::where('area_id', $area->slug)->get();

        foreach ($recaps as $recap) {
            $next_week = Carbon::now()->addWeek();
            $my_date = Carbon::parse($recap->submission_date);
            if ($my_date->lte($next_week)) {
                $recap['status'] = 'danger';
            } else {
                $recap['status'] = 'success';
            }
        }

        // dd($recaps);
        
        return view('recapitulation.list', [
            'recaps' => $recaps,
            'area' => $area,
        ]);
    }

    public function show($id)
    {
        $recap = Recap::find($id);
        $area = Area::where('slug', $recap->area_id)->first();
        return view('recapitulation.show', [
            'recap' => $recap,
            'area' => $area,
        ]);
    }

    public function create(Area $area)
    {
        return view('recapitulation.add', compact('area'));
    }

    public function store(Request $request)
    {
        $newRecap = $request->all();

        if ($request->hasFile('image')) {
            // dd('gambar terbaca');
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images/recapitulations', $imageName);
            $newRecap["image"] = $imageName;
        }

        Recap::create($newRecap);
        $route = '/recapitulation/' . $request->area_id;
        return redirect($route)->with('success', 'Data berhasil ditambahkan!');
    }
}
