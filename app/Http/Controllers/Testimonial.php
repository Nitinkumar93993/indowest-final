<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestimonialData;

class Testimonial extends Controller
{
    public function create_test()
    {
        $TestimonialData = new TestimonialData;
        $url = url('/Admin/testimonial');
        $title = "create Sub Admin Authority";
        $data = compact('TestimonialData', 'url', 'title');
        return view('Admin.testimonial')->with($data);
    }


    public function add_test(Request $request)
    {
        $TestimonialData = new TestimonialData;

        $TestimonialData->testimonial_name = $request['testimonial_name'];
        $TestimonialData->testimonial_category = $request['testimonial_category'];
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


    public function editTestimonial($id)
    {
        $TestimonialData = TestimonialData::find($id);
        if (is_null($TestimonialData)) {
            return view('Admin/view-testimonial');
        } else {
            $url = url('/Admin/update_testimonial') . "/" . $id;
            $title = "Update Sub Admin Authority";
            $data = compact('TestimonialData', 'url', 'title');
            return view('Admin.testimonial')->with($data);
        }
    }

    public function updateTestimonial($id, Request $request)
    {
        $TestimonialData = TestimonialData::find($id);
        $TestimonialData->testimonial_name = $request['testimonial_name'];
        $TestimonialData->testimonial_category = $request['testimonial_category'];
        if ($request->hasFile('testimonial_image')) {
            $test_image = $request->file('testimonial_image');
            $testimonial_img = time() . '_' . $test_image->getClientOriginalName();
            $TestimonialData->testimonial_image = $test_image->storeAs('public/testimonial', $testimonial_img);
        }
        $TestimonialData->testimonial_content = $request['testimonial_content'];
        $TestimonialData->save();
        return redirect('/Admin/view_testimonial');
    }





    public function deleteTestimonial($id)
    {
        TestimonialData::find($id)->delete();
        return redirect()->back();
    }

    // sub admin

    public function createSbTest()
    {
        $TestimonialData = new TestimonialData;
        $url = url('/Sub-admin/Add-testimonial');
        $title = "create testimonial";
        $data = compact('TestimonialData', 'url', 'title');
        return view('Sub-admin/Add-testimonial')->with($data);
    }


    public function addSbTest(Request $request)
    {
        $TestimonialData = new TestimonialData;

        $TestimonialData->testimonial_name = $request['testimonial_name'];
        $TestimonialData->testimonial_category = $request['testimonial_category'];
        if ($request->hasFile('testimonial_image')) {
            $test_image = $request->file('testimonial_image');
            $testimonial_img = time() . '_' . $test_image->getClientOriginalName();
            $TestimonialData->testimonial_image = $test_image->storeAs('public/testimonial', $testimonial_img);
        }
        $TestimonialData->testimonial_content = $request['testimonial_content'];
        $TestimonialData->save();
        return redirect('/Sub-admin/view-testimonial');
    }


    public function viewSbTestimonial()
    {
        $testimonialData = TestimonialData::all();
        return view('Sub-admin/view-testimonial', compact('testimonialData'));
    }



    public function editSbTestimonial($id)
    {
        $TestimonialData = TestimonialData::find($id);
        if (is_null($TestimonialData)) {
            return view('Sub-admin/view-testimonial');
        } else {
            $url = url('/Sub-admin/update_testimonial') . "/" . $id;
            $title = "Update Testimonial";
            $data = compact('TestimonialData', 'url', 'title');
            return view('Sub-admin.Add-testimonial')->with($data);
        }
    }

    public function updateSbTestimonial($id, Request $request)
    {
        $TestimonialData = TestimonialData::find($id);
        $TestimonialData->testimonial_name = $request['testimonial_name'];
        $TestimonialData->testimonial_category = $request['testimonial_category'];
        if ($request->hasFile('testimonial_image')) {
            $test_image = $request->file('testimonial_image');
            $testimonial_img = time() . '_' . $test_image->getClientOriginalName();
            $TestimonialData->testimonial_image = $test_image->storeAs('public/testimonial', $testimonial_img);
        }
        $TestimonialData->testimonial_content = $request['testimonial_content'];
        $TestimonialData->save();
        return redirect('/Sub-admin/view-testimonial');
    }


    public function deleteSbTestimonial($id)
    {
        TestimonialData::find($id)->delete();
        return redirect()->back();
    }


    public function viewuserTestimonial()
    {
        $testimonialData = TestimonialData::all();
        return view('testimonials', compact('testimonialData'));
    }
}
