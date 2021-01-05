<?php

namespace App\Http\Controllers\Room;

use App\Models\Room;
use App\Models\Grade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $data = [
            'grades' => Grade::all(),
            'rooms'  => Room::with('grade')->paginate(5),
        ];

       return view('Room.index', $data);
    }

    public function store()
    {
        $rooms  = Room::create($this->validateRequest());

        return redirect()->back()->with('succes', 'Room berhasil dibuat');
    }

    private function validateRequest(){
        return request()->validate([
            'name'  => 'required',
            'grade_id'  => 'required',
            'capacity'  => 'required',
        ]);
    }
}
