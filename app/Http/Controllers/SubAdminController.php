<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\AddSubAdmin;
use App\Models\AddSubAdmin;

class SubAdminController extends Controller
{
    public function create()
    {
        return view('Admin.addSubAdmin');
    }
    public function store(Request $request)
    {
        $AddSubAdmin = new AddSubAdmin;

        $AddSubAdmin->sbname = $request['sbname'];
        // $AddSubAdmin->sbfile = $request['sbfile'];


        if ($request->hasFile('sbfile')) {
            $SBFILE = $request->file('sbfile');
            $subAdminFile = time() . '_' . $SBFILE->getClientOriginalName();
            $AddSubAdmin->sbfile =  $SBFILE->storeAs('public/CreateSAimage', $subAdminFile);
        }

        $AddSubAdmin->sbemail = $request['sbemail'];
        $AddSubAdmin->sbusername = $request['sbusername'];
        $AddSubAdmin->sbpassword = $request['sbpassword'];

        // permissions
        $AddSubAdmin->sbAdd = $request['sbAdd'];
        $AddSubAdmin->sbEdit = $request['sbEdit'];
        $AddSubAdmin->sbView = $request['sbView'];
        $AddSubAdmin->sbDelete = $request['sbDelete'];

        $AddSubAdmin->blogAdd = $request['blogAdd'];
        $AddSubAdmin->blogEdit = $request['blogEdit'];
        $AddSubAdmin->blogView = $request['blogView'];
        $AddSubAdmin->blogDelete = $request['blogDelete'];

        $AddSubAdmin->testimonialAdd = $request['testimonialAdd'];
        $AddSubAdmin->testimonialEdit = $request['testimonialEdit'];
        $AddSubAdmin->testimonialView = $request['testimonialView'];
        $AddSubAdmin->testimonialDelete = $request['testimonialDelete'];

        $AddSubAdmin->courseAdd = $request['courseAdd'];
        $AddSubAdmin->courseEdit = $request['courseEdit'];
        $AddSubAdmin->courseView = $request['courseView'];
        $AddSubAdmin->courseDelete = $request['courseDelete'];

        $AddSubAdmin->teamAdd = $request['teamAdd'];
        $AddSubAdmin->teamEdit = $request['teamEdit'];
        $AddSubAdmin->teamView = $request['teamView'];
        $AddSubAdmin->teamDelete = $request['teamDelete'];

        $AddSubAdmin->eventAdd = $request['eventAdd'];
        $AddSubAdmin->eventEdit = $request['eventEdit'];
        $AddSubAdmin->eventView = $request['eventView'];
        $AddSubAdmin->eventDelete = $request['eventDelete'];

        $AddSubAdmin->oneAdd = $request['oneAdd'];
        $AddSubAdmin->oneEdit = $request['oneEdit'];
        $AddSubAdmin->oneView = $request['oneView'];
        $AddSubAdmin->oneDelete = $request['oneDelete'];

        $AddSubAdmin->twoAdd = $request['twoAdd'];
        $AddSubAdmin->twoEdit = $request['twoEdit'];
        $AddSubAdmin->twoView = $request['twoView'];
        $AddSubAdmin->twoDelete = $request['twoDelete'];

        $AddSubAdmin->save();
    }

// admin dashboard view 
public function adminDashboardView(){
    $AddSubAdmin = AddSubAdmin::all();
    $AddSubAdmins = compact('AddSubAdmin');
    return view('/Admin/viewSubAdmin')->with($AddSubAdmins);
}


    // Login form view
    public function loginForm()
    {
        if (session()->has('id')) {
            return redirect('/Sub-admin/Dashboard');
        }
        return view('Sub-admin.login');
    }


    public function login(Request $request)
    {
        if (session()->has('id')) {
            return redirect('/Sub-admin/Dashboard');
        }
        $username = $request->input('sbusername');
        $password = $request->input('sbpassword');
        $user = AddSubAdmin::where('sbusername', $username)->first();
        if ($user && $user->sbpassword === $password) {
            session(['id' => $user->id, 'username' => $user->sbusername]);
            return redirect('/Sub-admin/Dashboard');
        } else {
            return redirect('/Sub-admin/login')->with('error', 'invalid credential');
        }
    }
  
    public function dashboard()
    {
        if (session()->has('id')) {
            $username = session('username');
            $user = AddSubAdmin::where('sbusername', $username)->first();
            return view('Sub-admin.dashboard', compact('user'));
        } else {
            return redirect('/Sub-admin/login');
        }
    }

    // Logout
    public function logout()
    {
        session()->forget(['id', 'username']);
        return redirect('/Sub-admin/login');
    }
}
