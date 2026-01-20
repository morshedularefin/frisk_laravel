<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class AdminProductCategoryController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::orderBy('name','asc')->get();
        return view('admin.product_category.index', compact('product_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:product_categories,name',
        ]);

        $product_category = new ProductCategory();
        $product_category->name = $request->name;
        $product_category->save();

        return redirect()->route('admin.product-category.index')->with('success', 'Product category added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:product_categories,name,' . $id,
        ]);

        $product_category = ProductCategory::where('id', $id)->first();
        $product_category->name = $request->name;
        $product_category->save();

        return redirect()->route('admin.product-category.index')->with('success', 'Product category updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        // $check = Product::where('product_category_id', $id)->count();
        // if($check > 0){
        //     return back()->with('error', 'This product category is assigned to some products. You can not delete this product category.');
        // }

        $product_category = ProductCategory::where('id', $id)->first();
        $product_category->delete();

        return redirect()->route('admin.product-category.index')->with('success', 'Product category deleted successfully.');
    }
}
