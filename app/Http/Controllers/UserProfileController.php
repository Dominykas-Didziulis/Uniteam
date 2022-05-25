<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        $data= User::find();
        return view('userprofile',['users'=>$data]);
    }

    public function editUser($id)
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
        $data->save();
        return redirect('admin');
    }
}