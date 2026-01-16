<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Client;

class AboutController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::get()->take(4);
        $clients = Client::where('about_page', 'Yes')->get();
        return view('front.about', compact('team_members', 'clients'));
    }
}
