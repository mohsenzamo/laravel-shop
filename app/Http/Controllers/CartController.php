<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function CartViewFunction()
    {
        return view('ClientView.Shop.cart');
    }
}
