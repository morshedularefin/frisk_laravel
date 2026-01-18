<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;

class AdminPostCategoryController extends Controller
{
    public function index()
    {
        $post_categories = PostCategory::orderBy('name','asc')->get();
        return view('admin.post_category.index', compact('post_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:post_categories,name',
            'slug' => 'required|alpha_dash|string|max:255|unique:post_categories,slug',
        ]);

        $post_category = new PostCategory();
        $post_category->name = $request->name;
        $post_category->slug = $request->slug;
        $post_category->save();

        return redirect()->route('admin.post-category.index')->with('success', 'Post category added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:post_categories,name,' . $id,
            'slug' => 'required|alpha_dash|string|max:255|unique:post_categories,slug,' . $id,
        ]);

        $post_category = PostCategory::where('id', $id)->first();
        $post_category->name = $request->name;
        $post_category->slug = $request->slug;
        $post_category->save();

        return redirect()->route('admin.post-category.index')->with('success', 'Post category updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $post_category = PostCategory::where('id', $id)->first();
        $post_category->delete();

        return redirect()->route('admin.post-category.index')->with('success', 'Post category deleted successfully.');
    }
}
