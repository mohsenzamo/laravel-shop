<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function ShopViewFunction()
    {
        $productitem = Products::all();
        return view('ClientView.Shop.shop',compact('productitem'));
    }
}
