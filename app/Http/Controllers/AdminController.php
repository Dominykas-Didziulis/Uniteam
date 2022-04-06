<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use ReflectionFunctionAbstract;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function show()
    {

        $data= User::all();
        return view('admin',['users'=>$data]);
    }

}