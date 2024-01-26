<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::all();
        return view('Backend.modules.hero.index',compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.modules.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required',
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/hero/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        Hero::create($validatedData);

        session()->flash('msg', 'Banner Image Added Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('admin.hero.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('Backend.modules.hero.edit',compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {

        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('photo')) {
            $destination = 'uploads/hero/' . $hero->photo;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/hero/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        $hero->update($validatedData);
        session()->flash('msg', 'Banner Updated Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('admin.hero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $destination = 'uploads/hero/' . $hero->photo;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $hero->delete();

        session()->flash('msg', 'Slider Image Deleted Successfully');
        session()->flash('cls', 'success');
        return redirect()->back();
    }
}
