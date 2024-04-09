<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookRealityTest;

class BookRealityTestController extends Controller
{
    //
    public function create(){
        return view('Admin.bookRealityTest');
    }

    public function store(Request $request){
        $bookrealitytest = new bookrealitytest;
        $bookrealitytest->test_type = $request['test_type'];
        $bookrealitytest->test_vanue = $request['test_vanue'];
        $bookrealitytest->testDate = $request['testDate'];
        $bookrealitytest->testTimeStart = $request['testTimeStart'];
        $bookrealitytest->testTimeEnd = $request['testTimeEnd'];
        $bookrealitytest->testCharges = $request['testCharges'];
        $bookrealitytest->save();
        return redirect()->back();
    }

    public function view(){
        $bookrealitytest = bookrealitytest::all();
        $bookrealitytests = compact('bookrealitytest');
        return view('Admin.viewBookRealityTest')->with($bookrealitytests);
    }

    
    public function userView(){
        $bookrealitytest = bookrealitytest::all();
        $bookrealitytests = compact('bookrealitytest');
        return view("book-reality-test")->with($bookrealitytests);
    }
}
