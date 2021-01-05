<?php

namespace App\Http\Controllers\Mapel;

use App\Models\Mapel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = Mapel::paginate(5);
        return view('Mapel.index' ,compact('mapels'));
    }

    public function store()
    {

        $mapel = Mapel::create($this->validateRequest());

        return redirect()->back()->with('success','Mapel berhasil ditambah');
    }

    private function validateRequest(){
        return request()->validate([
            'name'  => 'required',
        ]);
    }
}
