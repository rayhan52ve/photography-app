<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WebsiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $websiteInfo = WebsiteInfo::first();
        return view('Backend.modules.website_info', compact('websiteInfo'));
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
        $existingWebInfo = WebsiteInfo::first();

        if ($existingWebInfo) {
            $existingWebInfo->update($request->except(['logo','fevicon']));
            if ($request->hasFile('logo')) {
                $destination = 'uploads/websiteinfo/logo/' . $existingWebInfo->logo;

                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename1 = time() . '.' . $extension; // Change the file extension to webp
                $path = 'uploads/websiteinfo/logo/';

                $file->move(public_path($path), $filename1);

                $existingWebInfo->update(['logo' => $filename1]);
            }
            if ($request->hasFile('fevicon')) {
                $destination = 'uploads/websiteinfo/fevicon/' . $existingWebInfo->fevicon;

                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('fevicon');
                $extension = $file->getClientOriginalExtension();
                $filename2 = time() . '.' . $extension; // Change the file extension to webp
                $path = 'uploads/websiteinfo/fevicon/';

                $file->move(public_path($path), $filename2);

                $existingWebInfo->update(['fevicon' => $filename2]);
            }
        } else {
           $webInfo = new WebsiteInfo;
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename1 = time() . '.' . $extension;
                $path = 'uploads/websiteinfo/logo/';
                $file->move(public_path($path), $filename1);

               $webInfo->logo = $filename1;
            }
            if ($request->hasFile('fevicon')) {
                $file = $request->file('fevicon');
                $extension = $file->getClientOriginalExtension();
                $filename2 = time() . '.' . $extension;
                $path = 'uploads/websiteinfo/fevicon/';
                $file->move(public_path($path), $filename2);

               $webInfo->fevicon = $filename2;
            }

           $webInfo->title = $request->title;
           $webInfo->facebook = $request->facebook;
           $webInfo->tweeter = $request->tweeter;
           $webInfo->instagram = $request->instagram;
           $webInfo->linkedin = $request->linkedin;
           $webInfo->contact_description = $request->contact_description;
           $webInfo->copyright = $request->copyright;
           $webInfo->save();
        }
        session()->flash('msg', 'Website Info Updated Successfully');
        session()->flash('cls', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebsiteInfo $websiteInfo)
    {
        //
    }
}
