<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{

    public function FeaturesViewFunction()
    {
        return view('ClientView.Features.features');
    }
}
