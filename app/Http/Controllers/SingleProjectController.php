<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleProjectController extends Controller
{

    public function SingleProjectViewFunction()
    {
        return view('ClientView.Projects.singleproject');
    }
}
