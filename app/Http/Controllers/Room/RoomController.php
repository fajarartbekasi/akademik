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
        $rooms = Room::latest()->paginate(6);

       return view('Room.index', compact('rooms'));
    }

    public function store()
    {
        $rooms  = Room::create($this->validateRequest());

        return redirect()->back()->with('status', 'Terimakasih telah menambahkan room baru');
    }

    private function validateRequest(){
        return request()->validate([
            'name'  => 'required',
            'capacity'  => 'required',
        ]);
    }
}
