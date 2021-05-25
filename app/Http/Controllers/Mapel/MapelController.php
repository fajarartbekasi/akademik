<?php

namespace App\Http\Controllers\Mapel;

use App\Models\Mapel;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $array = [
            'users'  => User::whereHas('roles', function($role){
                                    $role->whereNotIn('roles.name', ['admin','siswa']);
                            })->get(),
            'mapels' => Mapel::paginate(5),
        ];

        return view('Mapel.index' , $array);
    }

    public function store()
    {

        $mapel = Mapel::create($this->validateRequest());

        return redirect()->back()->with('success','Mapel berhasil ditambah');
    }

    private function validateRequest(){
        return request()->validate([
            'user_id'  => 'required',
            'name'     => 'required',
        ]);
    }
}
