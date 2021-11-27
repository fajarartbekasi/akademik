<?php

namespace App\Http\Controllers\Mapel;

use App\Models\User;
use App\Models\Mapel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = Mapel::latest()->paginate(6);

        return view('Mapel.index' , compact('mapels'));
    }

    public function store(Request $request)
    {

        $mapel = Mapel::create([
            'kode_mapel' => Str::random(4) . '-' . time(),
            'name'       => $request->name,
        ]);

        flash('Terimakasih Mapel berhasil ditambahkan');
        return redirect()->back()->with('success','Mapel berhasil ditambah');
    }
}
