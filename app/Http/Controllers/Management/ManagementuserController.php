<?php

namespace App\Http\Controllers\Management;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementuserController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('index', User::class);

        $users = User::latest()->paginate(5);

        return view('Management.all', compact('users'));
    }


}
