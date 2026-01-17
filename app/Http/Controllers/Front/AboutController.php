<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Client;
use App\Models\Award;
use App\Models\Counter;

class AboutController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::get()->take(4);
        $clients = Client::where('about_page', 'Yes')->get();
        $awards = Award::orderBy('item_order','asc')->get();
        $counter_data = Counter::where('id',1)->first();
        return view('front.about', compact('team_members', 'clients', 'awards', 'counter_data'));
    }
}
