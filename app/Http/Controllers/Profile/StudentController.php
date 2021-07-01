<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($id)
    {
        $student = User::findOrFail($id)->get();

        return view('Management.student.show', compact('student'));
    }
}
