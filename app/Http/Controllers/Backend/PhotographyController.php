<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Photography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photographies = Photography::latest()->get();
        return view('Backend.modules.photography.index', compact('photographies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = Album::all();
        return view('Backend.modules.photography.create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required',
            'album_id' => 'required',
        ]);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/photography/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        Photography::create($validatedData);

        session()->flash('msg', 'Photo Uploaded Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('admin.photography.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photography $photography)
    {
        // return view('Backend.modules.photography.show', compact('photography'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photography $photography)
    {
        $albums = Album::all();
        $photography->load('album');
        return view('Backend.modules.photography.edit',compact('photography','albums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photography $photography)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif',
            'album_id' => 'required',

        ]);

        if ($request->hasFile('photo')) {
            $destination = 'uploads/photography/' . $photography->photo;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/photography/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        $photography->update($validatedData);
        session()->flash('msg', 'Photo Updated Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('admin.photography.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photography $photography)
    {
        $destination = 'uploads/photography/' . $photography->photo;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $photography->delete();

        session()->flash('msg', 'Photo Deleted Successfully');
        session()->flash('cls', 'success');
        return redirect()->back();
    }
}
