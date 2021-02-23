<?php

namespace App\Http\Controllers\User;

use App\Models\Role;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Wala;
use App\Models\Profile;
use App\Models\Student;
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

                $findUser = User::with('roles')->findOrFail($user->id);
                if ($findUser->roles->first()->name == 'admin') {
                    $profile = Profile::create([
                        'user_id'      => $findUser->id,
                    ]);
                    flash()->success('Admin berhasil ditambahkan');
                }elseif ($findUser->roles->first()->name == 'guru') {
                    $teacher = Teacher::create([
                        'user_id'   => $findUser->id,
                    ]);

                    if ($teacher->save()) {

                        $profile = Profile::create([
                            'user_id' => $findUser->id,
                        ]);
                    }
                    flash()->success('Guru berhasil ditambahkan');
                }elseif($findUser->roles->first()->name == 'walas') {

                    $teacher = Teacher::create([
                        'user_id'   => $findUser->id,
                    ]);

                    if($teacher->save()){
                        $walas = Wala::create([
                            'teacher_id'    => $findUser->id,
                        ]);

                        $profile = Profile::create([
                            'user_id' => $findUser->id,
                        ]);
                    }
                    flash()->success('walas berhasil ditambahkan');
                }elseif($findUser->roles->first()->name == 'siswa'){
                    $student = Student::create([
                        'user_id'   => $findUser->id,
                    ]);
                    $profile = Profile::create([
                            'user_id' => $findUser->id,
                        ]);
                    flash()->success('walas berhasil ditambahkan');
                }

        } else {
                flash()->error('Tidak dapat menambahkan Member');
        }
        return redirect()->back();
    }

}
