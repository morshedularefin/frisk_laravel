@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-7.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Portfolios</h1>
        </div>
    </div>
</div>

<div class="portfolio-area-1 space overflow-hidden">
    <div class="container">
        <div class="row gy-40 gx-60 justify-content-center">
            @foreach($portfolios as $portfolio)
            <div class="col-xl-6 col-lg-6">
                <div class="portfolio-wrap">
                    <div class="portfolio-thumb">
                        <a href="{{ route('portfolio',$portfolio->slug) }}">
                            <img src="{{ asset('uploads/'.$portfolio->photo) }}" alt="portfolio">
                        </a>
                    </div>
                    <div class="portfolio-details">
                        <h3 class="portfolio-title mb-3"><a href="{{ route('portfolio',$portfolio->slug) }}">{{ $portfolio->title }}</a></h3>
                        <ul class="portfolio-meta">
                            <li><a href="jvascript:void(0);">{{ $portfolio->category }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            @if ($portfolios->hasPages())
            <div class="col-lg-12">
                <div class="pagination-wrap mt-50">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination list-wrap">
                            {{-- Previous Page Link --}}
                            @if (!$portfolios->onFirstPage())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $portfolios->previousPageUrl() }}">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($portfolios->getUrlRange(1, $portfolios->lastPage()) as $page => $url)
                                <li class="page-item {{ ($page == $portfolios->currentPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($portfolios->hasMorePages())
                                <li class="page-item next-page">
                                    <a class="page-link" href="{{ $portfolios->nextPageUrl() }}">
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

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection