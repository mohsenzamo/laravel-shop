<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexClientController extends Controller
{
    public function IndexClientViewFunction()
    {
        return view('ClientView.Index.index');
    }
}
