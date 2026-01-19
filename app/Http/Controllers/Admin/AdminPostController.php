<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminCommentStatusChangeMail;

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
        $tag_list = implode(',', $request->tags);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|alpha_dash|string|max:255|unique:posts,slug,' . $id,
            'short_description' => 'required|string',
            'description' => 'required|string',
        ]);

        $post = Post::where('id', $id)->first();

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'post_'.time().'.'.$request->photo->getClientOriginalExtension();
            if($post->photo && file_exists(public_path('uploads/'.$post->photo))) {
                unlink(public_path('uploads/'.$post->photo));
            }
            $request->photo->move(public_path('uploads/'), $final_name);
            $post->photo = $final_name;
        }

        $post->post_category_id = $request->post_category_id;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->short_description = $request->short_description;
        $post->description = $request->description;
        $post->tags = $tag_list;
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();

        if($post->photo && file_exists(public_path('uploads/'.$post->photo))) {
            unlink(public_path('uploads/'.$post->photo));
        }

        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Post deleted successfully.');
    }

    public function comments()
    {
        $comments = Comment::orderBy('id','desc')->get();
        return view('admin.post.comment', compact('comments'));
    }

    public function change_comment_status(Request $request, $id)
    {
        $comment = Comment::where('id', $id)->first();
        if($comment->status == 'Approved') {
            $comment->status = 'Pending';
        } else {
            $comment->status = 'Approved';
            // Send email to commenter when approved
            $data = [
                'name' => $comment->name,
                'email' => $comment->email,
                'post_slug' => $comment->post->slug,
            ];
            Mail::to($comment->email)->send(new AdminCommentStatusChangeMail($data));
        }
        $comment->save();

        return back()->with('success', 'Comment status changed successfully.');
    }

    public function destroy_comment(Request $request, $id)
    {
        $comment = Comment::where('id', $id)->first();
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully.');
    }
}
