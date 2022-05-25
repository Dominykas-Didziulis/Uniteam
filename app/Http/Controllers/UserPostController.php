<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function show()
    {
        $data= User::all();
        return view('admin',['users'=>$data]);
    }
}

