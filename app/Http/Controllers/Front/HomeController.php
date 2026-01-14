<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function home_1()
    {
        $testimonials = Testimonial::get();
        return view('front.home_1', compact('testimonials'));
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
        return view('front.home_5', compact('testimonials'));
    }
}
