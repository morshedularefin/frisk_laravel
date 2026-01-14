<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

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
}
