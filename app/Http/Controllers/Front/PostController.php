<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;

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
        return view('front.post', compact('post', 'next_post', 'previous_post'));
    }

    public function post_by_category($slug)
    {

    }

    public function post_by_tag($tag_name)
    {

    }
}
