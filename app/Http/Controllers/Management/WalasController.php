<?php

namespace App\Http\Controllers\Management;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index()
    {
        $walas = Role::with('users')->where('name', 'walas')->paginate(5);

        return view('management.walas', compact('walas'));
    }
}
