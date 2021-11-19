<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{

    public function PricingViewFunction()
    {
        return view('ClientView.Shop.pricing');
    }
}
