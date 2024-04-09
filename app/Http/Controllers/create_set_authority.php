<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sub_admin;

class create_set_authority extends Controller
{
    public function create()
    {
        $sub_admin = new sub_admin;
        $url = url("/Admin/sub-admin/create");
        $title = "Create Sub Admin Authority";
        $data = compact('url', 'title', 'sub_admin');
        return view("Admin/sub-admin")->with($data);
        // return view("Admin/sub-admin");
    }

    public function put_data(Request $request)
    {
        // Validate the request
        $request->validate([
            'user_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add other validation rules for your fields
        ]);

        // Create a new sub_admin instance
        $sub_admin = new sub_admin;

        // Set attributes
        $sub_admin->name = $request->input('name');
        $sub_admin->contact = $request->input('contact');
        $sub_admin->auth_email = $request->input('auth_email');
        $sub_admin->username = $request->input('username');
        $sub_admin->password = md5($request->input('password'));

        // Handle file upload
        if ($request->hasFile('user_image')) {
            // Store the file in the 'images' directory
            $file = $request->file('user_image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Example: timestamp_originalname.jpg
            $sub_admin->user_image = $file->storeAs('public', $fileName); // Save with the specified filename

        }

        // Store permissions as JSON encoded string
        $sub_admin->set_permission = json_encode($request->input('permissions'));

        // Save the sub_admin instance
        $sub_admin->save();

        // Redirect with success message
        return redirect('/Admin/view-all-sub-admin')->with('success', 'Sub admin added successfully.');
    }



    public function view_sub_admin()
    {
        $sub_admins = sub_admin::all();
        $details = compact('sub_admins');
        return view('Admin/view-all-sub-admin')->with($details);
    }







    public function delete_data($id)
    {
        sub_admin::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $sub_admin = sub_admin::find($id);
        if (is_null($sub_admin)) {
            return redirect('/Admin/view-all-sub-admin');
        } else {
            $url = url('/Admin/update') . "/" . $id;
            $title = "Update Sub Admin Authority";
            $data = compact('sub_admin', 'url', 'title');
            return view('Admin/sub-admin')->with($data);
        }
    }




    public function update($id, Request $request)
    {
        $sub_admin = sub_admin::find($id);
        $sub_admin->name = $request->input('name');
        // Check if a file has been uploaded before calling store()
        if ($request->hasFile('user_image')) {
            $sub_admin->user_image = $request->file('user_image')->store('images'); // Adjust storage path as needed
        }



        // $sub_admin->user_image = $request->file('user_image')->store('images'); // Adjust storage path as needed
        $sub_admin->contact = $request->input('contact');
        $sub_admin->auth_email = $request->input('auth_email');
        $sub_admin->username = $request->input('username');
        $sub_admin->password = $request->input('password');
        $sub_admin->set_permission = json_encode($request->input('permissions')); // Convert array to JSON string
        $sub_admin->save();
        return redirect('/Admin/view-all-sub-admin');
    }
}
