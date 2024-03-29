<?php

namespace App\Http\Controllers\Management;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('index', User::class);

        $siswas = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'siswa');
        })->paginate(5);

        return view('management.siswa', compact('siswas'));
    }
    public function create()
    {
        $this->authorize('create', User::class);

        $roles = Role::where('name', 'siswa');
        return view('management.student.create', compact('roles'));
    }
    public function edit($id)
    {
        $this->authorize('edit', User::class);

        $data = [
            'user'  => User::findOrFail($id),
            'rooms' => Room::all(),
        ];


        return view('management.student.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $this->authorize('update', User::class);

        $user = Student::where('user_id', $id)->first();

        $user->update($request->all());

        flash('Profile Siswa berhasil di update terimakasih');

        return redirect()->back();
    }
}
