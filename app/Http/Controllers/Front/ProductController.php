<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product_categories = ProductCategory::orderBy('name')->get();
        
        $products = Product::orderBy('id','asc');
        if($request->category != null) {
            $products = $products->where('product_category_id', $request->category);
        }

        if($request->price_min != null && $request->price_max != null) {
            $products = $products->whereBetween('sale_price', [$request->price_min, $request->price_max]);
        }

        $products = $products->paginate(10);

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

    // public function product_search(Request $request)
    // {
    //     dd($request->all());
    //     $search_text = $request->input('search_text');
    //     $product_categories = ProductCategory::orderBy('name')->get();
    //     $products = Product::where('name', 'LIKE', "%{$search_text}%")
    //                         ->orWhere('short_description', 'LIKE', "%{$search_text}%")
    //                         ->orWhere('description', 'LIKE', "%{$search_text}%")
    //                         ->orderBy('id','asc')
    //                         ->paginate(10);
    //     return view('front.shop', compact('product_categories', 'products'));
    // }
}
