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
        return view('front.shop', compact('product_categories', 'products'));
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $related_products = Product::where('product_category_id', $product->product_category_id)
                                    ->where('id', '!=', $product->id)
                                    ->inRandomOrder()
                                    ->get();
        return view('front.product', compact('product', 'related_products'));
    }
}
