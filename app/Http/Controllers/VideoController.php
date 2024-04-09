<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Show the form for creating a new video.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Admin.videoUpload');
    }

    /**
     * Store a newly created video in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
      

        $video = new Video();
        $video->title = $request->title;
        $video->description = $request->description;

        if ($request->hasFile('videoFile')) {
            $file = $request->file('videoFile');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $video->videoFile =  $file->storeAs('public/video', $fileName);
        }
        $video->save();
        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully!');
    }

    /**
     * Remove the specified video from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->back()->with('success', 'Video deleted successfully!');
    }
    // Add edit and update methods here as needed...
    public function index()
    {
        // Retrieve all uploaded videos from the database
        $videos = Video::all();

        // Pass the videos data to the view for display
        return view('Admin.viewVideo', compact('videos'));
    }
    public function indexBookcouselling()
    {
        // Retrieve all uploaded videos from the database
        $videos = Video::all();

        // Pass the videos data to the view for display
        return view('bookcounselling', compact('videos'));
    }

    public function webMediaGallery()
    {
        // Retrieve all uploaded videos from the database
        $videos = Video::all();

        // Pass the videos data to the view for display
        return view('web-media-gallery', compact('videos'));
    }
}
