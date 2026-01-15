<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Mail\TeamMemberContactMail;
use Illuminate\Support\Facades\Mail;

class TeamMemberController extends Controller
{
    public function team_members()
    {
        $team_members = TeamMember::paginate(20);
        return view('front.team_members', compact('team_members'));
    }

    public function team_member($slug)
    {
        $team_member = TeamMember::where('slug', $slug)->first();
        return view('front.team_member', compact('team_member'));
    }

    public function team_member_send_email(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $team_member = TeamMember::where('slug', $request->slug)->first();

        if($team_member->email == '') {
            return back()->with('error', 'The team member does not have an email address.');
        }

        Mail::to($team_member->email)->send(new TeamMemberContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully.');
    }
}
