<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class addTeam extends Controller
{
    public function save(Request $req)
    {
        $team = new Team;
        $team->name = $req->name;
        $team->save();

        return redirect()->route('admin');
    }
}
