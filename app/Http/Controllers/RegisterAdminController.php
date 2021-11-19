<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterAdminController extends Controller
{

    public function RegisterAdminViewFunction()
    {
        return view('AdminView.Auth.register');
    }
}
