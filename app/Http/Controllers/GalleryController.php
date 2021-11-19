<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function GalleryViewFunction()
    {
        return view('ClientView.Gallery.gallery');
    }
}
