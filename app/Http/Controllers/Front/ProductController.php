<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Coupon;

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

    public function cart()
    {
        if(!session()->has('cart') || count(session()->get('cart')) == 0) {
            return redirect()->route('shop')->with('error', 'Your cart is empty. Please add products to cart.');
        }
        return view('front.cart');
    }

    public function add_to_cart($product_id)
    {
        $product = Product::find($product_id);
        if(!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);
        
        // If cart already has this product
        if(isset($cart[$product_id])) {
            return redirect()->back()->with('error', 'Product already in cart.');
        }

        // I do not have any quantity implemented in this system as this is a digital product
        $cart[$product_id] = [
            "name" => $product->name,
            "slug" => $product->slug,
            "price" => $product->sale_price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove_from_cart($product_id)
    {
        //session()->forget('cart');
        // I want to delete only particular item from cart. I have product id.
        $cart = session()->get('cart', []);
        unset($cart[$product_id]);
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }

    public function checkout()
    {
        return view('front.checkout');
    }

    public function apply_coupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->code)->first();
        if(!$coupon) {
            return redirect()->back()->with('error', 'Invalid coupon code.');
        }

        if($coupon->status == 'Inactive') {
            return redirect()->back()->with('error', 'This coupon is inactive.');
        }

        if($coupon->start_date > date('Y-m-d')) {
            return redirect()->back()->with('error', 'This coupon is not valid yet.');
        }

        if($coupon->expiry_date < date('Y-m-d')) {
            return redirect()->back()->with('error', 'This coupon has expired.');
        }

        // Check USE LIMIT
        // LATER

        // Apply Coupon and save into a session variable
        if($coupon->type == 'Fixed') {
            $discount_amount = $coupon->value;
        } elseif($coupon->type == 'Percentage') {
            $cart = session()->get('cart', []);
            $total_amount = 0;
            foreach($cart as $item) {
                $total_amount += $item['price'];
            }
            $discount_amount = ($total_amount * $coupon->value) / 100;
        }
        session()->put('coupon', [
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => $coupon->value,
            'discount_amount' => $discount_amount
        ]);

        return redirect()->back()->with('success', 'Coupon applied successfully!');
        
    }
}
