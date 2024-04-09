<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sub_admin;

class SubAdminAuth extends Controller
{
    public function SubAdminDashboard()
    {
        if (session()->has('id')) {
            $username = session()->get('username'); // Retrieve username from session
            $user = sub_admin::where('username', $username)->first(); // Retrieve user data from database using username
            return view('Sub-admin.sa-header', compact('user'));
        } else {
            return redirect('/Admin/login');
        }
    }
    
}
