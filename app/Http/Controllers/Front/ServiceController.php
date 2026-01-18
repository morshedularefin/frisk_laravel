<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function services()
    {
        $services = Service::orderBy('item_order','asc')->paginate(15);
        return view('front.services', compact('services'));
    }

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('front.service', compact('service'));
    }
}
