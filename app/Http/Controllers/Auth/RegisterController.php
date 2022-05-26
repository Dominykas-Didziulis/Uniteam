<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'subname' => 'required|max:255',
            'nickname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'subname' => $request->subname,
            'nickname' => $request->nickname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ulevel' => 3,
            'team_id' => 1
        ]);


       // auth()->attempt($request->only('email', 'password'));

        return redirect()->route('admin');
    }
}
