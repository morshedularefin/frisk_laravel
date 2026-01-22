<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductPhoto;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id','asc')->get();
        $product_categories = ProductCategory::orderBy('name','asc')->get();
        return view('admin.product.index', compact('products', 'product_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:products,slug',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lte:regular_price',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'product_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $product = new Product();
        $product->product_category_id = $request->product_category_id;
        $product->photo = $final_name;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->view_count = 0;
        $product->total_rating = 0.00;
        $product->total_reviews = 0;
        $product->average_rating = 0.00;
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:products,slug,'.$id,
            'short_description' => 'required|string',
            'description' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lte:regular_price',
        ]);

        $product = Product::where('id', $id)->first();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'product_'.time().'.'.$request->photo->getClientOriginalExtension();
            if($product->photo && file_exists(public_path('uploads/'.$product->photo))) {
                unlink(public_path('uploads/'.$product->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name);
            $product->photo = $final_name;
        }

        $product->product_category_id = $request->product_category_id;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $all_product_photos = ProductPhoto::where('product_id', $id)->get();
        foreach($all_product_photos as $product_photo) {
            if($product_photo->photo && file_exists(public_path('uploads/'.$product_photo->photo))) {
                unlink(public_path('uploads/'.$product_photo->photo));
            }
            $product_photo->delete();
        }

        $product = Product::where('id', $id)->first();

        if($product->photo && file_exists(public_path('uploads/'.$product->photo))) {
            unlink(public_path('uploads/'.$product->photo));
        }

        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }

    public function photos($id)
    {
        $product = Product::where('id', $id)->first();
        $product_photos = ProductPhoto::orderBy('id','asc')->where('product_id', $id)->get();
        return view('admin.product.photo', compact('product', 'product_photos'));
    }

    public function photo_store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'product_photo_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $product_photo = new ProductPhoto();
        $product_photo->product_id = $request->product_id;
        $product_photo->photo = $final_name;
        $product_photo->save();

        return redirect()->back()->with('success', 'Photo added successfully.');
    }

    public function photo_update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product_photo = ProductPhoto::where('id', $id)->first();

        $final_name = 'product_photo_'.time().'.'.$request->photo->getClientOriginalExtension();
        if($product_photo->photo && file_exists(public_path('uploads/'.$product_photo->photo))) {
            unlink(public_path('uploads/'.$product_photo->photo));
        }
        $request->photo->move(public_path('uploads/'), $final_name);

        $product_photo->photo = $final_name;
        $product_photo->save();
        
        return redirect()->back()->with('success', 'Photo updated successfully.');
    }

    public function photo_destroy(Request $request, $id)
    {
        $product_photo = ProductPhoto::where('id', $id)->first();
        if($product_photo->photo && file_exists(public_path('uploads/'.$product_photo->photo))) {
            unlink(public_path('uploads/'.$product_photo->photo));
        }
        $product_photo->delete();

        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }
}
