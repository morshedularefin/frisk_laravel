<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Comment;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCommentMail;

class PostController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id','desc')->paginate(3);
        return view('front.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $next_post = Post::where('id', '>', $post->id)->orderBy('id','asc')->first();
        $previous_post = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $comments = Comment::where('post_id', $post->id)->where('status', 'Approved')->orderBy('id','desc')->get();
        $total_comments = Comment::where('post_id', $post->id)->where('status', 'Approved')->count();
        return view('front.post', compact('post', 'next_post', 'previous_post', 'comments', 'total_comments'));
    }

    public function post_by_category($slug)
    {
        $post_category = PostCategory::where('slug', $slug)->first();
        $posts = Post::orderBy('id','desc')->where('post_category_id', $post_category->id)->paginate(3);
        return view('front.category', compact('posts', 'post_category'));
    }

    public function post_by_tag($tag_name)
    {
        $posts = Post::where('tags', 'LIKE', '%' . $tag_name . '%')->orderBy('id','desc')->paginate(3);
        return view('front.tag', compact('posts', 'tag_name'));
    }

    public function search(Request $request)
    {
        $search_text = $request->search_text;
        $posts = Post::where('title', 'LIKE', '%' . $search_text . '%')
                     ->orWhere('description', 'LIKE', '%' . $search_text . '%')
                     ->orderBy('id','desc')
                     ->paginate(3);
        return view('front.search', compact('posts', 'search_text'));
    }

    public function comment_store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->status = 'Pending';
        $comment->save();

        // Send email to admin as notification
        $admin_data = Admin::where('id',1)->first();
        $admin_email = $admin_data->email;

        Mail::to($admin_email)->send(new UserCommentMail($validated));


        return redirect()->back()->with('success', 'Comment submitted successfully and is pending for the admin approval.');
    }
}
