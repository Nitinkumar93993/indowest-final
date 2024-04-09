<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{

    public function courseView()
    {
        $courseindexinsert = new Courses;
        $url = url('/Admin/create-course');
        $title = "Add Course + ";
        $data = compact('url', 'title', 'courseindexinsert');
        return view('Admin/create-course')->with($data);
    }
    //
    public function createIndex(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_desc' => 'required|string',
            'course_icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            'course_heading_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $courseindexinsert = new Courses;
        $courseindexinsert->course_name = $request->input('course_name');
        $courseindexinsert->course_desc = $request->input('course_desc');

        if ($request->hasFile('course_icon')) {
            $fileCourseIndex = $request->file('course_icon');
            $courseindexfile = time() . '_' .  $fileCourseIndex->getClientOriginalName();
            $courseindexinsert->course_icon =  $fileCourseIndex->storeAs('public/course/icon', $courseindexfile);
        }
        if ($request->hasFile('course_image')) {
            $imageCourseIndex = $request->file('course_image');
            $imageNameIndex = time() . '_' .  $imageCourseIndex->getClientOriginalName();
            $courseindexinsert->course_image =  $imageCourseIndex->storeAs('public/course/index',  $imageNameIndex);
        }
        if ($request->hasFile('course_heading_image')) {
            $imageCourseHeading = $request->file('course_heading_image');
            $imageNameheading = time() . '_' .  $imageCourseHeading->getClientOriginalName();
            $courseindexinsert->course_heading_image =  $imageCourseHeading->storeAs('public/course/heading',  $imageNameheading);
        }
        $courseindexinsert->course_heading = $request->input('course_heading');
        $courseindexinsert->course_describe = $request->input('course_describe');

        $courseindexinsert->first_heading = $request->input('first_heading');
        $courseindexinsert->first_paragraph = $request->input('first_paragraph');
        
        $courseindexinsert->second_heading = $request->input('second_heading');
        $courseindexinsert->second_paragraph = $request->input('second_paragraph');
        
        $courseindexinsert->third_heading = $request->input('third_heading');
        $courseindexinsert->third_paragraph = $request->input('third_paragraph');

        $courseindexinsert->fourth_heading = $request->input('fourth_heading');
        $courseindexinsert->fourth_paragraph = $request->input('fourth_paragraph');

        $courseindexinsert->fifth_heading = $request->input('fifth_heading');
        $courseindexinsert->fifth_paragraph = $request->input('fifth_paragraph');

        $courseindexinsert->sixth_heading = $request->input('sixth_heading');
        $courseindexinsert->sixth_paragraph = $request->input('sixth_paragraph');

        $courseindexinsert->seventh_heading = $request->input('seventh_heading');
        $courseindexinsert->seventh_paragraph = $request->input('seventh_paragraph');

        $courseindexinsert->eight_heading = $request->input('eight_heading');
        $courseindexinsert->eight_paragraph = $request->input('eight_paragraph');

        $courseindexinsert->ninth_heading = $request->input('ninth_heading');
        $courseindexinsert->ninth_paragraph = $request->input('ninth_paragraph');
        
        $courseindexinsert->tenth_heading = $request->input('tenth_heading');
        $courseindexinsert->tenth_paragraph = $request->input('tenth_paragraph');
        $courseindexinsert->save();

        return redirect('/Admin/all-courses');
    }

    public function displayIndex()
    {
        $courseindexinserts = Courses::all();
        $courseindexinsertss = compact('courseindexinserts');
        return view('Admin/all-courses')->with($courseindexinsertss);
    }
    public function displayIndexCourse()
    {
        $courseIndexView = Courses::all();
        $courseIndexViewS = compact('courseIndexView');
        return view('Admin/all-courses')->with($courseIndexViewS);
    }


    public function editCourse($course_id)
    {
        $courseindexinsert = Courses::find($course_id);

        if (is_null($courseindexinsert)) {
            return redirect('/Admin/all-courses');
        } else {
            $url = url('/Admin/update-course'). "/" . $course_id;
            $title = "Edit Course Details ";
            $data = compact('url', 'title', 'courseindexinsert');
            return view('Admin/create-course')->with($data);
        }
    }

    public function updateCourse($course_id, Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_desc' => 'required|string',
            'course_icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            'course_heading_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $courseindexinsert = Courses::find($course_id);
        $courseindexinsert->course_name = $request->input('course_name');
        $courseindexinsert->course_desc = $request->input('course_desc');

        if ($request->hasFile('course_icon')) {
            $fileCourseIndex = $request->file('course_icon');
            $courseindexfile = time() . '_' .  $fileCourseIndex->getClientOriginalName();
            $courseindexinsert->course_icon =  $fileCourseIndex->storeAs('public/course/icon', $courseindexfile);
        }
        if ($request->hasFile('course_image')) {
            $imageCourseIndex = $request->file('course_image');
            $imageNameIndex = time() . '_' .  $imageCourseIndex->getClientOriginalName();
            $courseindexinsert->course_image =  $imageCourseIndex->storeAs('public/course/index',  $imageNameIndex);
        }
        if ($request->hasFile('course_heading_image')) {
            $imageCourseHeading = $request->file('course_heading_image');
            $imageNameheading = time() . '_' .  $imageCourseHeading->getClientOriginalName();
            $courseindexinsert->course_heading_image =  $imageCourseHeading->storeAs('public/course/heading',  $imageNameheading);
        }
        $courseindexinsert->course_heading = $request->input('course_heading');
        $courseindexinsert->course_describe = $request->input('course_describe');
        $courseindexinsert->first_heading = $request->input('first_heading');
        $courseindexinsert->first_paragraph = $request->input('first_paragraph');
        $courseindexinsert->second_heading = $request->input('second_heading');
        $courseindexinsert->second_paragraph = $request->input('second_paragraph');
        $courseindexinsert->third_heading = $request->input('third_heading');
        $courseindexinsert->third_paragraph = $request->input('third_paragraph');
        $courseindexinsert->fourth_heading = $request->input('fourth_heading');
        $courseindexinsert->fourth_paragraph = $request->input('fourth_paragraph');
        $courseindexinsert->fifth_heading = $request->input('fifth_heading');
        $courseindexinsert->fifth_paragraph = $request->input('fifth_paragraph');
        $courseindexinsert->sixth_heading = $request->input('sixth_heading');
        $courseindexinsert->sixth_paragraph = $request->input('sixth_paragraph');
        $courseindexinsert->seventh_heading = $request->input('seventh_heading');
        $courseindexinsert->seventh_paragraph = $request->input('seventh_paragraph');
        $courseindexinsert->eight_heading = $request->input('eight_heading');
        $courseindexinsert->eight_paragraph = $request->input('eight_paragraph');
        $courseindexinsert->ninth_heading = $request->input('ninth_heading');
        $courseindexinsert->ninth_paragraph = $request->input('ninth_paragraph');
        $courseindexinsert->tenth_heading = $request->input('tenth_heading');
        $courseindexinsert->tenth_paragraph = $request->input('tenth_paragraph');
        $courseindexinsert->save();

        return redirect('/Admin/all-courses');
    }
}
