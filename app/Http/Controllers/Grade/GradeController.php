<?php

namespace App\Http\Controllers\Grade;

use App\Models\User;
use App\Models\Grade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $arrays = [
            'users'  => User::whereHas('roles', function($role){
                                    $role->whereNotIn('roles.name', ['admin','siswa']);
                            })->get(),
            'grades' => Grade::paginate(5),
        ];

        return view('Grade.index', $arrays);
    }

    public function store()
    {
        $grades = Grade::create($this->validateRequest());

        return redirect()->back()->with('success','grade berhasil ditambah');
    }

    private function validateRequest(){

        return request()->validate([
            'user_id' => 'required',
            'name' => 'required',
        ]);
    }
}
