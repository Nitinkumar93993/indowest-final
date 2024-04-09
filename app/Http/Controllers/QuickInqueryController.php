<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuickInqueryModel;

class QuickInqueryController extends Controller
{
    public function create()
    {
        return view('EXPRESS-ENTRY');
    }
    public function store(Request $request)
    {
        $QuickInqueryModel = new QuickInqueryModel;
        $QuickInqueryModel->firstname = $request['firstname'];
        $QuickInqueryModel->lastname = $request['lastname'];
        $QuickInqueryModel->selectCountryCode = $request['selectCountryCode'];
        $QuickInqueryModel->phonenumber = $request['phonenumber'];
        $QuickInqueryModel->email = $request['email'];
        $QuickInqueryModel->dateofbirth = $request['dateofbirth'];
        $QuickInqueryModel->message = $request['message'];
        $QuickInqueryModel->save();
        return view("Dashboard.user_dashboard");
    }

    public function view(){
        $QuickInqueryModel = QuickInqueryModel::all();
        $QuickInqueryModels = compact('QuickInqueryModel');
        return view('Admin.viewQuickInquery')->with($QuickInqueryModels);
    }
    
    
}
