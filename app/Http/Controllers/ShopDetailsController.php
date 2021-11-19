<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailsController extends Controller
{

    public function ShopDetailsViewFunction()
    {
        return view('ClientView.Shop.shopdetails');
    }
}
