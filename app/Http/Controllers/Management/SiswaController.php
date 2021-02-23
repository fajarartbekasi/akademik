<?php

namespace App\Http\Controllers\Management;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $siswas = Role::with('users')->where('name','siswa')->paginate(5);

        return view('management.siswa', compact('siswas'));

    }
    public function create()
    {
        $roles = Role::where('name', 'siswa');
        return view('management.student.create', compact('roles'));
    }
    public function edit($id)
    {
        $data = [
            'user'  => User::findOrFail($id),
            'rooms' => Room::all(),
        ];


        return view('management.student.edit', $data);
    }
}
