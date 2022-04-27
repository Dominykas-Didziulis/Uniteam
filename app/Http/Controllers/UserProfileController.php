<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        $data= User::all();
        return view('userprofile',['users'=>$data]);
    }
}