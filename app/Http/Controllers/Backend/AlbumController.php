<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::paginate(40);
        return view('Backend.modules.album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Backend.modules.album.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required',
            'name' => 'required',
            'category_id' => 'required',
        ]);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/album/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        Album::create($validatedData);

        session()->flash('msg', 'Album Created Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('admin.album.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('Backend.modules.album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $categories = Category::all();
        $album->load('category');
        return view('Backend.modules.album.edit',compact('album','categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif',
            'name' => 'required|max:20',
            'category_id' => 'required',

        ]);

        if ($request->hasFile('photo')) {
            $destination = 'uploads/album/' . $album->photo;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/album/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        $album->update($validatedData);
        session()->flash('msg', 'Album Updated Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('admin.album.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $destination = 'uploads/album/' . $album->photo;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $album->delete();

        session()->flash('msg', 'Album Deleted Successfully');
        session()->flash('cls', 'success');
        return redirect()->back();
    }
}
