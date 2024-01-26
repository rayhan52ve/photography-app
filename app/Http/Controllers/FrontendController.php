<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function home()
    {
        $heroes = Hero::all();
        return view('Frontend.modules.index',compact('heroes'));
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
        return view('Frontend.modules.gallery_single');
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
