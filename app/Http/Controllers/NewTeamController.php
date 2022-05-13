<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class NewTeamController extends Controller
{ 
    public function index()
    {
        return view('addTeam');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        team::create([
            'name' => $request->name,
        ]);

       // auth()->attempt($request->only('email', 'password'));

        return redirect()->route('admin');
    }
}