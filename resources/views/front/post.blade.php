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
                            <h3 class="comments-wrap-title">{{ (strlen($total_comments) == 1 && $total_comments!=0) ? '0'.$total_comments : $total_comments }} Comments</h3>
                            <div class="latest-comments">
                                <ul class="list-wrap">

                                    @foreach($comments as $comment)
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                @php
                                                $email = trim(strtolower($comment->email));
                                                $hash = md5($email);
                                                $gravatar_url = "https://www.gravatar.com/avatar/$hash?s=80&d=mp";
                                                echo '<img src="'.$gravatar_url.'" alt="img">';
                                                @endphp
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <span class="date">{{ $comment->created_at->format('F d, Y') }}</span>
                                                    <h6 class="name">{{ $comment->name }}</h6>
                                                </div>
                                                <p>
                                                    {!! nl2br($comment->comment) !!}
                                                </p>
                                                <a href="" class="link-btn" data-bs-toggle="modal" data-bs-target="#modal_reply_{{ $comment->id }}">
                                                    <span class="link-effect">
                                                        <span class="effect-1">REPLY</span>
                                                        <span class="effect-1">REPLY</span>
                                                    </span>
                                                    <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                                                </a>
            <!-- Reply Modal -->
            <div class="modal fade" id="modal_reply_{{ $comment->id }}" tabindex="-1" aria-hidden="true" style="z-index:100;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Give a Reply</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Name *</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Email *</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="">Reply *</label>
                                        <textarea class="form-control h_100" name="reply"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Reply Modal -->
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
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                            <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>
                            <form action="{{ route('comment_store') }}" class="comment-form" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <p class="comment-notes">
                                    Your email address will not be published. Required fields are marked *
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="name" placeholder="Full Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="email" placeholder="Email address *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comment" placeholder="Write your comment *" class="form-control style-border style2" required></textarea>
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