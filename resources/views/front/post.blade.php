@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper style2 bg-smoke">
    <div class="container-fluid">
        <div class="breadcumb-content">
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li>{{ $post->title }}</li>
            </ul>
        </div>
    </div>
</div>

<section class="blog__details-area space">
    <div class="container">
        <div class="blog__inner-wrap">
            <div class="row">
                <div class="col-70">
                    <div class="blog__details-wrap">
                        <div class="blog__details-thumb">
                            <img src="{{ asset('uploads/'.$post->photo) }}" alt="img">
                        </div>
                        <div class="blog__details-content">
                            <div class="blog-post-meta">
                                <ul class="list-wrap">
                                    <li>{{ $post->created_at->format('M d, Y') }}</li>
                                    <li>
                                        <a href="{{ route('post_by_category',$post->post_category->slug) }}">{{ $post->post_category->name ?? '' }}</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">by {{ $post->admin->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="title">
                                {{ $post->title }}
                            </h2>
                            
                            {!! $post->description !!}
                            
                            <div class="blog__details-bottom">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="post-tags">
                                            <ul class="list-wrap">
                                                @php
                                                $tags = explode(',', $post->tags);
                                                foreach($tags as $tag) {
                                                    $trimmed_tag = trim($tag);
                                                    if($trimmed_tag) {
                                                        echo '<li><a href="'.route('post_by_tag', $trimmed_tag).'">'.$trimmed_tag.'</a></li>';
                                                    }
                                                }
                                                @endphp
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="post-share">
                                            <h5 class="title">Share:</h5>
                                            <div class="social-btn style3 justify-content-md-end">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank" rel="noopener noreferrer">
                                                    <span class="link-effect">
                                                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                                    </span>
                                                </a>

                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}" target="_blank" rel="noopener noreferrer">
                                                    <span class="link-effect">
                                                        <span class="effect-1"><i class="fab fa-linkedin"></i></span>
                                                        <span class="effect-1"><i class="fab fa-linkedin"></i></span>
                                                    </span>
                                                </a>

                                                <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text=Check%20this%20out!" target="_blank" rel="noopener noreferrer">
                                                    <span class="link-effect">
                                                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner__page-nav mt-20 mb-n1">
                                <a href="{{ $previous_post ? route('post', $previous_post->slug) : 'javascript:void(0)'}}" class="nav-btn">
                                    <i class="fa fa-arrow-left"></i> <span><span class="link-effect">
                                        <span class="effect-1">Previous Post</span>
                                        <span class="effect-1">Previous Post</span>
                                    </span></span>
                                </a>
                                <a href="{{ $next_post ? route('post', $next_post->slug) : 'javascript:void(0)'}}" class="nav-btn"><span><span class="link-effect">
                                    <span class="effect-1">Next Post</span>
                                    <span class="effect-1">Next Post</span>
                                </span></span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog__avatar-wrap">
                            <div class="blog__avatar-img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('uploads/'.$post->admin->avatar) }}" alt="img">
                                </a>
                            </div>
                            <div class="blog__avatar-info">
                                <h4 class="name"><a href="javascript:void(0)">{{ $post->admin->name }}</a></h4>
                                <p>
                                    But in order that you may see whence all this born error of those who accuse pleasure and praise pain will open the whole matter explain the very things which were said by that
                                </p>
                            </div>
                        </div>
                        <div class="comments-wrap">
                            <h3 class="comments-wrap-title">02 Comments</h3>
                            <div class="latest-comments">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/blog/comment01.png" alt="img">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <span class="date">March 26, 2024</span>
                                                    <h6 class="name">Parker Strong</h6>
                                                </div>
                                                <p>But in order that you may see whence all this born error of those who accuse pleasure and praise pain will open the whole matter explain</p>
                                                <a href="blog-details.html" class="link-btn">
                                                    <span class="link-effect">
                                                        <span class="effect-1">REPLY</span>
                                                        <span class="effect-1">REPLY</span>
                                                    </span>
                                                    <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comment02.png" alt="img">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <span class="date">March 26, 2024</span>
                                                            <h6 class="name">Farell Colins</h6>
                                                        </div>
                                                        <p>Finanappreciate your trust greatly Our clients choose dentace ducts because know we are the best area Awaitingare really.</p>
                                                        <a href="blog-details.html" class="link-btn">
                                                            <span class="link-effect">
                                                                <span class="effect-1">REPLY</span>
                                                                <span class="effect-1">REPLY</span>
                                                            </span>
                                                            <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>
                            <form action="#" class="comment-form">
                                <p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="name" id="name" placeholder="Full name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="email" id="email" placeholder="Email address*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Write your comment *" id="contactForm" class="form-control style-border style2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn col-12">
                                    <button type="submit" class="btn mt-25">
                                        <span class="link-effect">
                                            <span class="effect-1">POST COMMENT</span>
                                            <span class="effect-1">POST COMMENT</span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-30">
                    <aside class="blog__sidebar">
                        @include('front.post_sidebar')
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection