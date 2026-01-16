<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Faq;

class HomeController extends Controller
{
    public function home_1()
    {
        $testimonials = Testimonial::get();
        $team_members = TeamMember::get()->take(4);
        $faqs = Faq::orderBy('item_order','asc')->where('home_page_1', 'Yes')->get();
        return view('front.home_1', compact('testimonials', 'team_members', 'faqs'));
    }

    public function home_2()
    {
        return view('front.home_2');
    }

    public function home_3()
    {
        return view('front.home_3');
    }

    public function home_4()
    {
        $testimonials = Testimonial::get();
        return view('front.home_4', compact('testimonials'));
    }

    public function home_5()
    {
        $testimonials = Testimonial::get();
        $faqs = Faq::orderBy('item_order','asc')->where('home_page_5', 'Yes')->get();
        return view('front.home_5', compact('testimonials', 'faqs'));
    }
}
