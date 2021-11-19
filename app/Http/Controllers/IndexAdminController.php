<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexAdminController extends Controller
{

    public function IndexAdminViewFunction()
    {
        return view('AdminView.Index.index');
    }
}
