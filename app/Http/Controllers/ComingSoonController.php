<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{

    public function ComingSoonViewFunction()
    {
        return view('ClientView.Public.comingsoon');
    }
}
