<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function portfolios()
    {
        $portfolios = Portfolio::orderBy('item_order','asc')->paginate(4);
        return view('front.portfolios', compact('portfolios'));
    }

    public function portfolio($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('front.portfolio', compact('portfolio'));
    }
}
