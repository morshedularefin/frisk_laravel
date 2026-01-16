<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('item_order','asc')->where('faq_page', 'Yes')->get();
        return view('front.faq', compact('faqs'));
    }
}
