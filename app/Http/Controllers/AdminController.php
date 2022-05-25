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

    public function editRole($id)
    {
        $data= User::find($id);
        return view('editRole',['data'=>$data]);
    }
    public function UpdateRole(Request $req)
    {
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->subname=$req->subname;
        $data->email=$req->email;
        $data->nickname=$req->nickname;
        $data->ulevel=$req->ulevel;
        $data->team_id=$req->team_id;
        ///dd($req);
        $data->save();
        return redirect('admin');
    }

}