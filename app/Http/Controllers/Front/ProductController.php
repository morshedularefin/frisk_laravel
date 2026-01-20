<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::orderBy('name')->get();
        return view('front.product', compact('product_categories'));
    }
}
