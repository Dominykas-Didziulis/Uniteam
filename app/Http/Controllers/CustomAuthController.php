<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login1");
    }

    public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'subname'=>'required',
            'nickname'=>'required|unique:users',
            'email'=>'required|email',
            'password'=>'required|min:10|max:30'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->subname = $request->subname;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'Naujas narys užregistruotas sėkmingai');
        }else{
            return back()->with('fail', 'Registracija neįvykdyta');
        }
    }
}
