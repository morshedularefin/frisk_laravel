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
        
        $products = Product::query();

        if($request->search != null && $request->search != '') {
            $products = $products->where('name', 'like', '%' . $request->search . '%');
        }

        if($request->category != null) {
            $products = $products->where('product_category_id', $request->category);
        }

        if($request->price_min != null && $request->price_max != null) {
            $products = $products->whereBetween('sale_price', [$request->price_min, $request->price_max]);
        }

        if($request->order == null || $request->order == '') {
            $products = $products->orderBy('id', 'desc');
        } else {
            if($request->order == 'latest') {
                $products = $products->orderBy('id', 'desc');
            } elseif($request->order == 'oldest') {
                $products = $products->orderBy('id', 'asc');
            } elseif($request->order == 'popularity') {
                $products = $products->orderBy('view_count', 'desc');
            } elseif($request->order == 'rating') {
                $products = $products->orderBy('average_rating', 'desc');
            } elseif($request->order == 'price_asc') {
                $products = $products->orderBy('sale_price', 'asc');
            } elseif($request->order == 'price_desc') {
                $products = $products->orderBy('sale_price', 'desc');
            }
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

        // update view count by 1
        $product->view_count = $product->view_count + 1;
        $product->save();

        return view('front.product', compact('product', 'related_products'));
    }
}
