<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function ContactUsViewFunction()
    {
        return view('ClientView.About.contactus');
    }
}
