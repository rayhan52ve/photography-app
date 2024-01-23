<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bio = Bio::first();
        return view('Backend.modules.bio', compact('bio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existingBio = Bio::first();

        if ($existingBio) {
            $existingBio->update($request->except('image'));
            if ($request->hasFile('image')) {
                $destination = 'uploads/bio/' . $existingBio->image;

                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension; // Change the file extension to webp
                $path = 'uploads/bio/';

                $file->move(public_path($path), $filename);

                $existingBio->update(['image' => $filename]);
            }
        } else {
            $bio = new Bio;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'uploads/bio/';
                $file->move(public_path($path), $filename);

                $bio->image = $filename;
            }

            $bio->name = $request->name;
            $bio->age = $request->age;
            $bio->designation = $request->designation;
            $bio->phone = $request->phone;
            $bio->email = $request->email;
            $bio->city = $request->city;
            $bio->description = $request->description;
            $bio->city = $request->city;
            $bio->story = $request->story;
            $bio->save();
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bio $bio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bio $bio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bio $bio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bio $bio)
    {
        //
    }
}
