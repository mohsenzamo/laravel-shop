<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{

    public function CheckOutViewFunction()
    {
        return view('ClientView.Shop.checkout');
    }
}
