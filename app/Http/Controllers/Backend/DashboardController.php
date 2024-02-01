<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Photography;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $bannerCount = Hero::count();
        $categoryCount = Category::count();
        $albumCount = Album::count();
        $photoCount = Photography::count();
        return view('Backend.modules.dashboard',compact('bannerCount','categoryCount','albumCount','photoCount'));
    }
}
