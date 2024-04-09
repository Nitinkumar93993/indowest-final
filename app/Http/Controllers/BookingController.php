<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Make sure to import your Booking model here

class BookingController extends Controller
{
    /**
     * Show the booking form.
     *
     * @return \Illuminate\View\View
     */
   

    /**
     * Store a newly created booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'selectCountry' => 'required|string|max:255',
            'selectService' => 'required|string|max:255',
            'eventDate' => 'required|date',
            'timeSlot' => 'required|string|max:255',
        ]);

        // Create a new booking record
        Booking::create($validatedData);

        // Redirect back to the booking form with a success message
        return redirect("/dashboard")->with('success', 'Booking submitted successfully!');
    }



    public function viewAll()
    {
        // Retrieve all booking records from the database
        $bookings = Booking::all();

        // Pass the bookings data to the view for display
        return view('Admin/ViewBookCounselling', compact('bookings'));
    }




    /**
     * Delete the specified booking from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        // Find the booking by id and delete it
        $booking = Booking::findOrFail($id);
        $booking->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Booking deleted successfully!');
    }
}
