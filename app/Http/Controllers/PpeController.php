<?php

namespace App\Http\Controllers;

use App\Models\ppe;
use Illuminate\Http\Request;

class PpeController extends Controller
{
    public function edit ()
    {
        $ppe = ppe::first();
        return view('ppe.edit', [
            'ppe' => $ppe,
        ]);
    }

    public function update()
    {
        $ppe = ppe::first();
        $ppe->update(request()->all());
        return redirect('/dashboard')->with('success', 'Berhasil mengubah data PPE!');
    }
}
