<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DynamicImg;

class ImageController extends Controller
{
    public function index()
    {
        return view('Admin/dynamicImage');
    }

    public function upload(Request $request)
{
    try {
        $DynamicImg = new DynamicImg;
        // Validate the uploaded file

        $DynamicImg->image_title = $request['image_title'];
        $DynamicImg->web_category = $request['web_category'];
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size and allowed file types as needed
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '_' . $image->getClientOriginalName();
            $DynamicImg->image = $image->storeAs('public/storage', $image_name);
        }

        $DynamicImg->save();

        return back()->with('success', 'Image uploaded successfully.');
    } catch (\Exception $e) {
        // Log the error using logger()
        logger()->error('Error uploading image: ' . $e->getMessage());

        // Return back with error message
        return back()->with('error', 'Failed to upload image. Please try again.');
    }
    
}


    public function view()
    {
        $images = DynamicImg::all();
        return view('Admin/viewImage', compact('images'));
    }

    public function viewWebMediaGallery()
    {
        $images = DynamicImg::all();
        return view('web-media-gallery', compact('images'));
    }

}
