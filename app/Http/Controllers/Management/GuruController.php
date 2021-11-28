<?php

namespace App\Http\Controllers\Management;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('index', User::class);

        $gurus = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'guru');
        })->paginate(5);

        return view('management.guru', compact('gurus'));
    }
    public function edit($id)
    {
        $this->authorize('edit', User::class);

        $teacher = User::findOrFail($id);

        return view('management.teacher.edit', compact('teacher'));
    }
    public function update(Request $request, $id)
    {
        $this->authorize('update', User::class);

        $user = Teacher::where('user_id', $id)->first();

        $user->update($request->all());

        flash('Profile Guru berhasil di update terimakasih');

        return redirect()->back();
    }
}
