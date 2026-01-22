<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::orderBy('name')->get();
        $products = Product::orderBy('id','asc')->paginate(10);
        return view('front.product', compact('product_categories', 'products'));
    }
}
