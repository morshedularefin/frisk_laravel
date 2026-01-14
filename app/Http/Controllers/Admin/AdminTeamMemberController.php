<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class AdminTeamMemberController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::get();
        return view('admin.team-member.index', compact('team_members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:team_members,slug',
            'position' => 'required|string|max:255',
            'biography' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'team_member_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $team_member = new TeamMember();
        $team_member->photo = $final_name;
        $team_member->name = $request->name;
        $team_member->slug = $request->slug;
        $team_member->position = $request->position;
        $team_member->biography = $request->biography;
        $team_member->email = $request->email;
        $team_member->phone = $request->phone;
        $team_member->facebook = $request->facebook;
        $team_member->twitter = $request->twitter;
        $team_member->youtube = $request->youtube;
        $team_member->linkedin = $request->linkedin;
        $team_member->instagram = $request->instagram;
        $team_member->save();

        return redirect()->route('admin.team-member.index')->with('success', 'Team member added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:team_members,slug,'.$id,
            'position' => 'required|string|max:255',
            'biography' => 'required|string',
        ]);

        $team_member = TeamMember::where('id', $id)->first();

        if($request->hasFile('photo')) {
            $final_name = 'team_member_'.time().'.'.$request->photo->getClientOriginalExtension();
            if($team_member->photo && file_exists(public_path('uploads/'.$team_member->photo))) {
                unlink(public_path('uploads/'.$team_member->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name);
            $team_member->photo = $final_name;
        }

        $team_member->name = $request->name;
        $team_member->slug = $request->slug;
        $team_member->position = $request->position;
        $team_member->biography = $request->biography;
        $team_member->email = $request->email;
        $team_member->phone = $request->phone;
        $team_member->facebook = $request->facebook;
        $team_member->twitter = $request->twitter;
        $team_member->youtube = $request->youtube;
        $team_member->linkedin = $request->linkedin;
        $team_member->instagram = $request->instagram;
        $team_member->save();

        return redirect()->route('admin.team-member.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $team_member = TeamMember::where('id', $id)->first();

        if($team_member->photo && file_exists(public_path('uploads/'.$team_member->photo))) {
            unlink(public_path('uploads/'.$team_member->photo));
        }

        $team_member->delete();

        return redirect()->route('admin.team-member.index')->with('success', 'Team member deleted successfully.');
    }
}
