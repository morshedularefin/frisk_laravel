<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PricingController extends Controller
{
    public function index()
    {
        $packages = Package::orderby('item_order','asc')->get();
        return view('front.pricing_plan', compact('packages'));
    }
}
