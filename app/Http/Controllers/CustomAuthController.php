<?php
namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login1");
    }

    public function registration(){
        return view("auth.registration");
    }  
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('prisijungti');
        }
    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required|max:20',
            'subname'=>'required|max:20',
            'nickname'=>'required|unique:users|max:20',
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->subname = $request->subname;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->ulevel = "3";
        $data->team_id=$req->team_id;
        $res = $user->save();
        
        if($res){
            return back()->with('success', 'Naujas narys užregistruotas sėkmingai');
        }else{
            return back()->with('fail', 'Registracija neįvykdyta');
        }
    }
    public function loginUser(Request $request){
        
        $request->validate([
            'nickname'=>'required',
            'password'=>'required|min:4'
        ]);
        $user = User::where('nickname','=',$request->nickname)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                $request->session()->put('ulevel',$user->ulevel);
                return redirect('about');
            }
            else
            {
                return back()->with('fail','Neteisingas slaptažodis.');
            }
        }
        else
        {
            return back()->with('fail','Šis naudotojo vardas nėra registruotas.');
        }
    }
    public function editUser($id)
    {
        $data= User::find($id);
        return view('editUser',['data'=>$data]);
    }
    public function UpdateUser(Request $req)
    {
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->subname=$req->subname;
        $data->email=$req->email;
        $data->nickname=$req->nickname;
        $data->ulevel=$req->ulevel;
        $data->team_id=$req->team_id;
        $data->save();
        return redirect('user');
    }
}
