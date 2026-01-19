@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-8.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Tag: {{ $tag_name }}</h1>
        </div>
    </div>
</div>

<section class="blog__area space">
    <div class="container">
        <div class="blog__inner-wrap">
            <div class="row">
                <div class="col-70">
                    <div class="blog-post-wrap">
                        <div class="row gy-50 gutter-24">
                            @foreach($posts as $post)
                            <div class="col-md-12">
                                <div class="blog-post-item">
                                    <div class="blog-post-thumb">
                                        <a href="{{ route('post', $post->slug) }}"><img src="{{ asset('uploads/'.$post->photo) }}" alt="img"></a>
                                    </div>
                                    <div class="blog-post-content">
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li>{{ $post->created_at->format('F d, Y') }}</li>
                                                <li>
                                                    <a href="">{{ $post->post_category->name }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title"><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h2>
                                        <a href="{{ route('post', $post->slug) }}" class="link-btn">
                                            <span class="link-effect">
                                                <span class="effect-1">READ MORE</span>
                                                <span class="effect-1">READ MORE</span>
                                            </span>
                                            <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @if ($posts->hasPages())
                            <div class="col-lg-12">
                                <div class="pagination-wrap mt-50">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination list-wrap">
                                            {{-- Previous Page Link --}}
                                            @if (!$posts->onFirstPage())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $posts->previousPageUrl() }}">
                                                        <i class="fas fa-arrow-left"></i>
                                                    </a>
                                                </li>
                                            @endif

                                            {{-- Pagination Elements --}}
                                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                                <li class="page-item {{ ($page == $posts->currentPage()) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach

                                            {{-- Next Page Link --}}
                                            @if ($posts->hasMorePages())
                                                <li class="page-item next-page">
                                                    <a class="page-link" href="{{ $posts->nextPageUrl() }}">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            @endif
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