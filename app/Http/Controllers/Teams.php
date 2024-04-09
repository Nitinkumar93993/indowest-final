<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class Teams extends Controller
{


    public function creating()
    {
        return view("Admin/team-member");
    }
    public function fillTeamMember(Request $request)
    {
        $teammeber = new TeamMember;
        $request->validate([
            'member_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $teammeber->member_name = $request['member_name'];

        if ($request->hasFile('member_image')) {
            $image =  $request->file('member_image');
            $team_image = time() . '_' . $image->getClientOriginalName();
            $teammeber->member_image  = $image->storeAs('public/pics', $team_image);
        }
        $teammeber->member_title = $request['member_title'];
        $teammeber->member_since = $request['member_since'];
        $teammeber->member_contact = $request['member_contact'];
        $teammeber->member_email = $request['member_email']; 
        $teammeber->member_website = $request['member_website'];
        $teammeber->member_fax = $request['member_fax'];
        $teammeber->member_skill = $request['member_skill'];
        $teammeber->undefine = $request['undefine'];
        $teammeber->about_me = $request['about_me'];
        $teammeber->qualification = $request['qualification'];
        $teammeber->achivement = $request['achivement'];
        $teammeber->twitter_url = $request['twitter_url'];
        $teammeber->facebook_url = $request['facebook_url'];
        $teammeber->instagram_url = $request['instagram_url'];
        $teammeber->save();
        return redirect('/Admin/view-team');
    }

    public function viewTeam()
    {
        $teamMembers = TeamMember::all();      
        $adminData = compact('teamMembers');
        $detailsData = compact('teamMembers');     
        $detailsIndex = compact('teamMembers');    
        return view('Admin.view-team', $adminData);
    }

   

    public function indexTeamDetails()
    {
        $teamMembers = TeamMember::all();       
        $detailsIndex = compact('teamMembers');     
        return view('index', $detailsIndex);
    }
    public function showMemberDetails($id)
    {
        $teamMembers = TeamMember::all();
        $teamMember = TeamMember::find($id);
        $find = compact('teamMember', 'teamMembers');
        if ($teamMember && $teamMember->id == $id) {
            return view('team-details', $find);
        } else {
            return redirect()->back()->with('error', 'Member not found.');
        }
    }
}
