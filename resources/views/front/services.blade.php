@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-8.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Services</h1>
        </div>
    </div>
</div>

<div class="feature-area-1 space">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center">
            @foreach($services as $service)
            <div class="col-xl-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <img src="{{ asset('uploads/' . $service->icon) }}" alt="icon">
                    </div>
                    <h4 class="feature-card-title">
                        <a href="{{ route('service',$service->slug) }}">{{ $service->name }}</a>
                    </h4>
                    <p class="feature-card-text">
                        {!! nl2br($service->short_description) !!}
                    </p>
                    <a href="{{ route('service',$service->slug) }}" class="link-btn">
                        <span class="link-effect">
                            <span class="effect-1">VIEW DETAILS</span>
                            <span class="effect-1">VIEW DETAILS</span>
                        </span>
                        <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                    </a>
                </div>
            </div>
            @endforeach

            @if ($services->hasPages())
            <div class="col-lg-12">
                <div class="pagination-wrap mt-50">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination list-wrap">
                            {{-- Previous Page Link --}}
                            @if (!$services->onFirstPage())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $services->previousPageUrl() }}">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($services->getUrlRange(1, $services->lastPage()) as $page => $url)
                                <li class="page-item {{ ($page == $services->currentPage()) ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($services->hasMorePages())
                                <li class="page-item next-page">
                                    <a class="page-link" href="{{ $services->nextPageUrl() }}">
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