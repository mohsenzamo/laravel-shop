<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{

    public function LoginAdminViewFunction()
    {
        return view('AdminView.Auth.loginadmin');
    }
}
