<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleBlogController extends Controller
{

    public function SingleBlogViewFunction()
    {
        return view('ClientView.Public.singleblog');
    }
}
