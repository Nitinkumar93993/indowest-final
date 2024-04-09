<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventManager;

class EventManagerController extends Controller
{
    //
    public function create_event()
    {
        $eventmanager = new EventManager;
        $title = "add event";
        $url = url('/Admin/event_manage');
        $data = compact('eventmanager', 'title', 'url');
        return view('Admin/event_manage')->with($data);
    }

    public function insert_event(Request $request)
    {
        $eventmanager = new EventManager;
        if ($request->hasFile('event_image')) {         
            $fileEventManager = $request->file('event_image');
            $fileNameEventManager = time() . '_' .  $fileEventManager->getClientOriginalName(); // Example: timestamp_originalname.jpg
            $eventmanager->event_image =  $fileEventManager->storeAs('public/events',  $fileNameEventManager); // Save with the specified filename
        }
        // $eventmanager->event_image = $request['event_image'];  
        $eventmanager->event_title = $request['event_title'];
        $eventmanager->event_type = $request['event_type'];
        $eventmanager->event_date = $request['event_date'];
        $eventmanager->event_timing = $request['event_timing'];
        $eventmanager->save();
        return redirect('/Admin/all-event');

    }
    public function view_all_event()
    {
        $eventmanager = EventManager::all();
        $eventData = compact('eventmanager');
        return view('Admin.all-event')->with($eventData);
    }

    public function index_all_event()
    {
        $eventIndex = EventManager::all();
        $eventDataIndex = compact('eventIndex');
        return view('index')->with($eventDataIndex);
    }

    public function view_Every_Events()
    {
        $view_Every_Events = EventManager::all();
        $eventEveryData = compact('view_Every_Events');
        return view('/events')->with($eventEveryData);
    }

    public function editEvent($id)
    {
        $eventmanager = EventManager::find($id);
        if (is_null($eventmanager)) {
            return redirect('/Admin/all-event');
        } else {
            $title = "edit event";
            $url = url('/Admin/update_event') . "/" . $id;
            $data = compact('eventmanager', 'title', 'url');
            return view('Admin/event_manage')->with($data);
        }
    }

    public function updateEvent($id, Request $request)
    {
        $eventmanager = EventManager::find($id);
        if ($request->hasFile('event_image')) {
            // Store the file in the 'images' directory
            $fileEventManager = $request->file('event_image');
            $fileNameEventManager = time() . '_' .  $fileEventManager->getClientOriginalName(); // Example: timestamp_originalname.jpg
            $eventmanager->event_image =  $fileEventManager->storeAs('public/events',  $fileNameEventManager); // Save with the specified filename
        }
        // $eventmanager->event_image = $request['event_image'];      
        $eventmanager->event_title = $request['event_title'];
        $eventmanager->event_type = $request['event_type'];
        $eventmanager->event_date = $request['event_date'];
        $eventmanager->event_timing = $request['event_timing'];
        $eventmanager->save();
        return redirect('/Admin/all-event');
    }

    public function deleteEvent($id)
    {
        EventManager::find($id)->delete();
        return redirect()->back();
    }

    // sub Admin

    public function createSbEvent()
    {
        $eventmanager = new EventManager;
        $title = "add event(sb)";
        $url = url('/Sub-admin/Add-event');
        $data = compact('eventmanager', 'title', 'url');
        return view('Sub-admin/Add-event')->with($data);
    }

    public function insertSbEvent(Request $request)
    {
        $eventmanager = new EventManager;
        if ($request->hasFile('event_image')) {
            // Store the file in the 'images' directory
            $fileEventManager = $request->file('event_image');
            $fileNameEventManager = time() . '_' .  $fileEventManager->getClientOriginalName(); // Example: timestamp_originalname.jpg
            $eventmanager->event_image =  $fileEventManager->storeAs('public/events',  $fileNameEventManager); // Save with the specified filename
        }
        // $eventmanager->event_image = $request['event_image'];      
        $eventmanager->event_title = $request['event_title'];
        $eventmanager->event_type = $request['event_type'];
        $eventmanager->event_date = $request['event_date'];
        $eventmanager->event_timing = $request['event_timing'];
        $eventmanager->save();
        return redirect('/Sub-admin/view-event');

    }
    public function viewSbEvent()
    {
        $eventmanager = EventManager::all();
        $eventData = compact('eventmanager');
        return view('Sub-admin/viewEvent')->with($eventData);
    }

   


    public function editSbEvent($id)
    {
        $eventmanager = EventManager::find($id);
        if (is_null($eventmanager)) {
            return redirect('/Sub-admin/view-event');
        } else {
            $title = "edit event (sb)";
            $url = url('/Sub-admin/update-event') . "/" . $id;
            $data = compact('eventmanager', 'title', 'url');
            return view('Sub-admin/Add-event')->with($data);
        }
    }

    public function updateSbEvent($id, Request $request)
    {
        $eventmanager = EventManager::find($id);
        if ($request->hasFile('event_image')) {
            // Store the file in the 'images' directory
            $fileEventManager = $request->file('event_image');
            $fileNameEventManager = time() . '_' .  $fileEventManager->getClientOriginalName(); // Example: timestamp_originalname.jpg
            $eventmanager->event_image =  $fileEventManager->storeAs('public/events',  $fileNameEventManager); // Save with the specified filename
        }
        // $eventmanager->event_image = $request['event_image'];      
        $eventmanager->event_title = $request['event_title'];
        $eventmanager->event_type = $request['event_type'];
        $eventmanager->event_date = $request['event_date'];
        $eventmanager->event_timing = $request['event_timing'];
        $eventmanager->save();
        return redirect('Sub-admin/view-event');
    }

    public function deleteSbEvent($id)
    {
        EventManager::find($id)->delete();
        return redirect()->back();
    }

    public function viewcontactexperts()
    {
        $eventmanager = EventManager::all();
        $eventData = compact('eventmanager');
        return view('Sub-admin/viewEvent')->with($eventData);
    }
}
