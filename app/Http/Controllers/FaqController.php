<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqModel;

class FaqController extends Controller
{
    //
    public function create()
    {
        return view('Admin.FAQ');
    }

    public function store(Request $request)
    {
        $FaqModel = new FaqModel;
        $FaqModel->faq_question = $request['faq_question'];
        $FaqModel->faq_answer = $request['faq_answer'];
        $FaqModel->faq_category = $request['faq_category'];
        $FaqModel->faq_topic = $request['faq_topic'];
        $FaqModel->save();
        return redirect()->back();
    }

    public function viewUser(){
        $FaqModel = FaqModel::all();
        $FaqModels = compact('FaqModel');
        return view('faq')->with( $FaqModels);
    }
}
