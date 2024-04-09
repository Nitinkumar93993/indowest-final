<?php
// AdminLoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;



class AdminLoginController extends Controller
{

    
    public function showLoginForm()
    {
        return view('Admin/admin-login');
    }

    public function login(Request $request)
    {
        $validUsername = "ankitashubham25@gmail.com";
        $validPassword = "ankitashubham";
    
        $username = $request->input("username");
        $password = $request->input("password");
    
        if ($validUsername === $username && $validPassword === $password) {
            Session::put('admin', true);
            return redirect('/Admin/dashboard');
        } else {
            $error = "Invalid username & password!";
            return redirect()->back()->withInput()->withErrors([$error]);
        }
    }
    
    public function showDashboard()
    {
        if (Session::has('admin')) {
            return view('Admin.dashboard');
        } else {
            return redirect('/admin-login');
        }
    }
    
    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/Admin/dashboard');

    }
}
