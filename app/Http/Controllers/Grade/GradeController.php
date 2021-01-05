<?php

namespace App\Http\Controllers\Grade;

use App\Models\Grade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::paginate(5);

        return view('Grade.index', compact('grades'));
    }

    public function store()
    {
        $grades = Grade::create($this->validateRequest());

        return redirect()->back()->with('success','grade berhasil ditambah');
    }

    private function validateRequest(){

        return request()->validate([
            'name' => 'required'
        ]);
    }
}
