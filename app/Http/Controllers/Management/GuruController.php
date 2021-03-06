<?php

namespace App\Http\Controllers\Management;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $gurus = User::whereHas('roles', function($q){
            $q->where('roles.name', '=', 'guru');
        })->paginate(5);

        return view('management.guru', compact('gurus'));
    }
}
