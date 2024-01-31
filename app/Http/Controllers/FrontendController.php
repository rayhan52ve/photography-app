<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Bio;
use App\Models\Category;
use App\Models\Hero;
use App\Models\WebsiteInfo;
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
        $bio = Bio::first();
        return view('Frontend.modules.about',compact('bio'));
    }

    public function gallery()
    {
        $albumCount = Album::count();
        $categories = Category::with('albums')->get();
        return view('Frontend.modules.gallery',compact('categories','albumCount'));
    }

    public function gallerySingle($id)
    {
        $websiteInfo = WebsiteInfo::first();
        $album = Album::find($id);
        return view('Frontend.modules.gallery_single',compact('album','websiteInfo'));
    }

    public function services()
    {
        return view('Frontend.modules.services');
    }

    public function contact()
    {
        $bio = Bio::first();
        return view('Frontend.modules.contact',compact('bio'));
    }
}
