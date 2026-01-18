<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        $post_categories = PostCategory::orderBy('name','asc')->get();
        return view('admin.post.index', compact('posts', 'post_categories'));
    }

    public function store(Request $request)
    {
        $tag_list = implode(',', $request->tags);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:posts,slug',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'post_'.time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/'), $final_name);

        $post = new Post();
        $post->post_category_id = $request->post_category_id;
        $post->admin_id = Auth::guard('admin')->user()->id;
        $post->photo = $final_name;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->tags = $tag_list;
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Post added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:portfolios,slug,'.$id,
            'description' => 'required|string',
            'category' => 'required|max:255',
        ]);

        $portfolio = Portfolio::where('id', $id)->first();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'portfolio_'.time().'.`'.$request->photo->getClientOriginalExtension();
            if($portfolio->photo && file_exists(public_path('uploads/'.$portfolio->photo))) {
                unlink(public_path('uploads/'.$portfolio->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name);
            $portfolio->photo = $final_name;
        }

        $portfolio->title = $request->title;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->category = $request->category;
        $portfolio->software = $request->software;
        $portfolio->project_start_date = $request->project_start_date;
        $portfolio->project_end_date = $request->project_end_date;
        $portfolio->client = $request->client;
        $portfolio->website = $request->website;
        $portfolio->item_order = $request->item_order;
        $portfolio->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Request $request, $id)
    {

        $all_portfolio_photos = PortfolioPhoto::where('portfolio_id', $id)->get();
        foreach($all_portfolio_photos as $portfolio_photo) {
            if($portfolio_photo->photo && file_exists(public_path('uploads/'.$portfolio_photo->photo))) {
                unlink(public_path('uploads/'.$portfolio_photo->photo));
            }
            $portfolio_photo->delete();
        }

        $portfolio = Portfolio::where('id', $id)->first();

        if($portfolio->photo && file_exists(public_path('uploads/'.$portfolio->photo))) {
            unlink(public_path('uploads/'.$portfolio->photo));
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio deleted successfully.');
    }
}
