<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function ServicesViewFunction()
    {
        return view('ClientView.About.services');
    }
}
