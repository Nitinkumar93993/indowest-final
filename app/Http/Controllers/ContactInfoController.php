<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactInfoController extends Controller
{
    public function create()
    {
        $ContactInfo = new ContactInfo;
        $title = "Add";
        $url = url('/Admin/contactInfo');
        $ContactInfo = compact('title', 'url', 'ContactInfo');
        return view('Admin/contactInfo')->with($ContactInfo);
    }

    public function insert(Request $request)
    {
        $ContactInfo = new ContactInfo;
        $ContactInfo->mobilenumber = $request['mobilenumber'];
        $ContactInfo->mobilenumberII = $request['mobilenumberII'];
        $ContactInfo->whatsappnumber = $request['whatsappnumber'];
        $ContactInfo->infoemail = $request['infoemail'];
        $ContactInfo->website = $request['website'];
        $ContactInfo->address = $request['address'];
        $ContactInfo->save();
        return redirect('/Admin/viewContact');
    }

    public function view()
    {
        $ContactInfo = ContactInfo::all();
        $ContactInfomation = compact('ContactInfo');
        return view('Admin/viewContact')->with($ContactInfomation);
    }

    public function edit($id)
    {
        $ContactInfo = ContactInfo::find($id);
        if (is_null($ContactInfo)) {
            return redirect('/Admin/viewContact');
        } else {
            $title = "Edit";
            $url = url('/Admin/updateContact') . "/" . $id;
            $ContactInfo = compact('title', 'url', 'ContactInfo');
            return view('Admin/contactInfo')->with($ContactInfo);
        }
    }
    public function update($id, Request $request)
    {
        $ContactInfo = ContactInfo::find($id);
        $ContactInfo->mobilenumber = $request['mobilenumber'];
        $ContactInfo->mobilenumberII = $request['mobilenumberII'];
        $ContactInfo->whatsappnumber = $request['whatsappnumber'];
        $ContactInfo->infoemail = $request['infoemail'];
        $ContactInfo->website = $request['website'];
        $ContactInfo->address = $request['address'];
        $ContactInfo->save();
        return redirect('/Admin/viewContact');
    }

    public function delete($id)
    {
        ContactInfo::find($id)->delete();
        return redirect()->back();
    }

    
    public function AboutUs()
    {
        $ContactInfos = ContactInfo::all();
        $ContactInfomations = compact('ContactInfos');
        return view('about-us')->with($ContactInfomations);
    }
}
