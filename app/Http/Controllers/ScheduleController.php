<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Mapel;
use App\Models\Room;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = User::whereHas('roles', function ($role) {
            $role->whereNotIn('roles.name', ['siswa', 'admin']);
        })->get();

        return view('schedules.index', compact('schedules'));
    }
    public function edit($id)
    {

        $data = [
            'mapels'    => Mapel::all(),
            'rooms'     => Room::all(),
            'grades'    => Grade::all(),
            'users'     => User::findOrFail($id),
        ];
        return view('schedules.create', $data);
    }
    public function store(Request $request)
    {
       $this->validate($request,[
           'mapel_id','user_id','room_id',
           'grade_id','jam_awal','jam_akhir'
        ]);

        $schedules = Schedule::create([
            'mapel_id'  => $request->mapel_id,
            'user_id'=> $request->user_id,
            'room_id'   => $request->room_id,
            'grade_id'  => $request->grade_id,
            'jam_awal'  => $request->jam_awal,
            'jam_akhir' => $request->jam_akhir,
        ]);


         return redirect()->back()->with('status','Terimakasih telah menambahkan jadwal mengajar untuk '.$schedules->user->name);
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        $schedules = Schedule::where('user_id',$id)->get();


        return view('schedules.show', compact('schedules', 'user'));
    }
}
