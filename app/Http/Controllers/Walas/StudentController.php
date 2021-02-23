<?php

namespace App\Http\Controllers\Walas;

use App\Models\Role;
use App\Models\Grade;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students  = Role::with('users')->where('name','siswa')->get();


        return view('walas.students.index', compact('students'));

    }
}
