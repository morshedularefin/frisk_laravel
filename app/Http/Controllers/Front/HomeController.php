<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Faq;
use App\Models\Client;
use App\Models\Award;
use App\Models\Counter;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function home_1()
    {
        $testimonials = Testimonial::get();
        $team_members = TeamMember::get()->take(4);
        $faqs = Faq::orderBy('item_order','asc')->where('home_page_1', 'Yes')->get();
        $portfolios = Portfolio::orderBy('item_order','asc')->get()->take(4);
        return view('front.home_1', compact('testimonials', 'team_members', 'faqs', 'portfolios'));
    }

    public function home_2()
    {
        $clients = Client::where('home_page_2', 'Yes')->get();
        $awards = Award::orderBy('item_order','asc')->get();
        $skills = Skill::orderBy('item_order','asc')->get();
        $services = Service::orderBy('item_order','asc')->where('home_page_2', 'Yes')->get();
        $portfolios = Portfolio::orderBy('item_order','asc')->get()->take(5);
        return view('front.home_2', compact('clients', 'awards', 'skills', 'services', 'portfolios'));
    }

    public function home_3()
    {
        $counter_data = Counter::where('id',1)->first();
        $services = Service::orderBy('item_order','asc')->where('home_page_3', 'Yes')->get();
        $portfolios = Portfolio::orderBy('item_order','asc')->get()->take(6);
        return view('front.home_3', compact('counter_data', 'services', 'portfolios'));
    }

    public function home_4()
    {
        $testimonials = Testimonial::get();
        $portfolios = Portfolio::orderBy('item_order','asc')->get()->take(6);
        return view('front.home_4', compact('testimonials', 'portfolios'));
    }

    public function home_5()
    {
        $testimonials = Testimonial::get();
        $faqs = Faq::orderBy('item_order','asc')->where('home_page_5', 'Yes')->get();
        $clients = Client::where('home_page_5', 'Yes')->get();
        $skills = Skill::orderBy('item_order','asc')->get();
        $services = Service::orderBy('item_order','asc')->where('home_page_5', 'Yes')->get();
        $portfolios = Portfolio::orderBy('item_order','asc')->get()->take(3);
        return view('front.home_5', compact('testimonials', 'faqs', 'clients', 'skills', 'services', 'portfolios'));
    }
}
