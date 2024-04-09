<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialData;

class Testimonial extends Controller
{
    public function create_test()
    {
        return view('Admin.testimonial');
    }
    public function add_test(Request $request)
    {
        $TestimonialData = new TestimonialData;
        $TestimonialData->testimonial_name = $request['testimonial_name'];

        if ($request->hasFile('testimonial_image')) {
            $test_image = $request->file('testimonial_image');
            $testimonial_img = time() . '_' . $test_image->getClientOriginalName();
            $TestimonialData->testimonial_image = $test_image->storeAs('public/testimonial', $testimonial_img);
        }
        $TestimonialData->testimonial_content = $request['testimonial_content'];
        $TestimonialData->save();
        return redirect('/Admin/view_testimonial');
    }

    public function view_testimonial()
    {
        $testimonialData = TestimonialData::all();
        return view('Admin/view-testimonial', compact('testimonialData'));
    }
    
    public function index_estimonial()
    {
        $testimonialIndex = TestimonialData::all();
        return view('index', compact('testimonialIndex'));
    }
}
