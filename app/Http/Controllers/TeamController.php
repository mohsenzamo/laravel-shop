<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function TeamViewFunction()
    {
        return view('ClientView.About.team');
    }
}
