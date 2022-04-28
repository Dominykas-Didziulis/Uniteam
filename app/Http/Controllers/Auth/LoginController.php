<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('home');
    }
    public function getUsersCredentials(Request $request)
    {
        //dd($request->user()->id);

        $user=User::find($request->user()->id);
        return view('auth.update', ['user'=>$user]);
    }
    public function setUsersCredentials(Request $request)
    {
        if($request->password != null)
        $this->validate($request, [
            'name' => 'required|max:20',
            'nickname' => 'required|max:30',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        else
        $this->validate($request, [
            'name' => 'required|max:20',
            'nickname' => 'required|max:30',
            'email' => 'required|email|max:255'
        ]);

        $user=User::find($request->user()->id);
        

        $user->name=$request->name;
        $user->nickname=$request->nickname;
        $user->email=$request->email;
        if($request->password != null)
        $user->password= Hash::make($request->password);
        //dd($request->name);
        $user->save();
        //dd($user);
        //$user=User::where('id',)
        return back();
    }
}
