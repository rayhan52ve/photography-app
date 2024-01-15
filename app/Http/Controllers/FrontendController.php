<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function home()
    {
        return view('Frontend.modules.index');
    }

    public function about()
    {
        return view('Frontend.modules.about');
    }

    public function gallery()
    {
        return view('Frontend.modules.gallery');
    }

    public function gallerySingle()
    {
        return view('Frontend.modules.gallery-single');
    }

    public function services()
    {
        return view('Frontend.modules.services');
    }

    public function contact()
    {
        return view('Frontend.modules.contact');
    }
}
