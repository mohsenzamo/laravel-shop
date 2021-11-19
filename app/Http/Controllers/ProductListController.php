<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductListController extends Controller
{

    public function ProductListViewFunction()
    {
        $productlist = Products::all();
        return view('AdminView.List.productlist',compact('productlist'));
    }
}
