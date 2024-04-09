<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventManager; 

class EventManagerController extends Controller
{
    //
    public function create_event(){
        return view('Admin/event_manage');
    }
    
    public function insert_event(Request $request)
    {
        $eventmanager = new EventManager;
        if ($request->hasFile('event_image')) {
            // Store the file in the 'images' directory
            $fileTestimonial = $request->file('event_image');
            $fileNameTestimonial = time() . '_' .  $fileTestimonial->getClientOriginalName(); // Example: timestamp_originalname.jpg
            $eventmanager->event_image =  $fileTestimonial->storeAs('public/testimonial',  $fileNameTestimonial); // Save with the specified filename
        }
        // $eventmanager->event_image = $request['event_image'];      
        $eventmanager->event_type = $request['event_type'];
        $eventmanager->event_date = $request['event_date'];
        $eventmanager->event_timing = $request['event_timing'];
        $eventmanager->save();
        return redirect('/Admin/all-event');
    }
    public function view_all_event(){
        $eventmanagers = EventManager::all();
        $eventData = compact('eventmanagers');
        return view('/Admin/all-event')->with($eventData);
    }

    public function index_all_event(){
        $eventIndex = EventManager::all();
        $eventDataIndex = compact('eventIndex');
        return view('index')->with($eventDataIndex);
    }

    public function view_Every_Events(){
        $view_Every_Events = EventManager::all();
        $eventEveryData = compact('view_Every_Events');
        return view('/events')->with($eventEveryData);
    }
}
