<?php

namespace App\Http\Controllers\User;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

        return $this->middleware('auth');

    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'name'      => 'required',
            'email'     => 'required',
            'roles'      => 'required',
            'password'  => 'required',
        ]);


        $request->merge(['password' => bcrypt($request->get('password'))]);

        if ($user = User::create($request->except('roles'))) {
                $user->syncRoles($request->get('roles'));
                flash()->success('Member berhasil ditambahkan');
        } else {
                flash()->error('Tidak dapat menambahkan Member');
        }
        return redirect()->back();
    }

}
