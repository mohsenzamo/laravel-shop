<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function AboutUsViewFunction()
    {
        return view('ClientView.About.aboutus');
    }
}
