@extends('front.layouts.master')

@section('main_content')
<!--==============================
Hero Area
==============================-->
<div class="hero-wrapper hero-2" id="hero">
    <div class="hero-2-thumb wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s">
        <img src="{{ asset('dist/front/img/hero/hero-2-1.jpg') }}" alt="img">
    </div>
    <div class="container">
        <div class="hero-style2">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="hero-title wow img-custom-anim-right text-white">We Make</h1>
                    <h1 class="hero-title wow img-custom-anim-left text-white">Creative Things</h1>
                </div>
                <div class="col-lg-10 offset-lg-2">
                    <h1 class="hero-title wow img-custom-anim-right text-white">Everyday</h1>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-6">
                    <p class="hero-text wow img-custom-anim-left text-white">We are digital agency that helps immersive and engaging user experiences that</p>
                    <div class="btn-group fade_left">
                        <a href="project.html" class="btn style2 wow img-custom-anim-left">
                            <span class="link-effect">
                                <span class="effect-1">VIEW OUR WORKS</span>
                                <span class="effect-1">VIEW OUR WORKS</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-xxl-6 col-xl-7 col-lg-9">
                    <div class="wow img-custom-anim-right">
                        <div class="hero-contact-wrap">
                            27 Division St, New York, NY 10002, USA
                        </div>
                        <div class="hero-contact-wrap">
                            <a href="tel:1800123654987">+1 800 123 654 987</a>
                            <a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->


@include('front.layouts.marquee')

<!--==============================
Feature Area
==============================-->
<div class="feature-area-1 space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="title-area text-center">
                    <h2 class="sec-title">What We Can Do for Our Clients</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 align-items-center justify-content-center">
            @foreach($services as $service)
            <div class="col-xxl-5 col-md-6">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <img src="{{ asset('uploads/' . $service->icon) }}" alt="icon">
                    </div>
                    <h4 class="feature-card-title">
                        <a href="{{ route('service', $service->slug) }}">{{ $service->name }}</a>
                    </h4>
                    <p class="feature-card-text">
                        {!! nl2br($service->short_description) !!}
                    </p>
                    <a href="{{ route('service', $service->slug) }}" class="link-btn">
                        <span class="link-effect">
                            <span class="effect-1">VIEW DETAILS</span>
                            <span class="effect-1">VIEW DETAILS</span>
                        </span>
                        <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!--==============================
Service Area
==============================-->
<div class="service-area-1 space bg-theme">
    <div class="service-img-1-1 shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
        <img src="{{ asset('dist/front/img/normal/service_2-1.jpg') }}" alt="img">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6">
                <div class="about-content-wrap">
                    <div class="title-area mb-0">
                        <h2 class="sec-title">We Offer a Wide Range of Brand Services</h2>
                        <p class="sec-text mt-35 mb-40">We are a creative agency working with brands building insightful strategy, creating unique designs and crafting value</p>
                        @foreach($skills as $skill)
                        <div class="skill-feature">
                            <h3 class="skill-feature_title">{{ $skill->name }}</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: {{ $skill->percentage }}%;">
                                </div>
                                <div class="progress-value"><span class="counter-number">{{ $skill->percentage }}</span>%</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Portfolio Area
==============================-->
<div class="portfolio-area-1 space overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="title-area text-center">
                    <h2 class="sec-title">Discover Our Selected Projects</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row global-carousel gx-60 portfolio-slider" data-slide-show="1" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-center-padding="600px" data-xl-center-padding="400px" data-ml-center-padding="400px" data-lg-center-padding="300px" data-dots="true" data-xl-dots="true" data-ml-dots="true">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4">
                <a href="{{ route('portfolio',$portfolio->slug) }}" class="portfolio-wrap style2">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('uploads/'.$portfolio->photo) }}" alt="portfolio">
                    </div>
                    <div class="portfolio-details">
                        <ul class="portfolio-meta">
                            <li>{{ $portfolio->category }}</li>
                        </ul>
                        <h3 class="portfolio-title">{{ $portfolio->title }}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!--==============================
Award Area
==============================-->
<div class="award-area-1 space-bottom overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="award-wrap-area">
                    @foreach($awards as $award)
                    <li class="single-award-list">
                        <span class="award-year">{{ $award->year }}</span>
                        <div class="award-details">
                            <h4><a href="{{ $award->url=='' ? 'javascript:void(0);' : $award->url }}">{{ $award->title }}</a></h4>
                            <p>
                                {!! nl2br($award->description) !!}
                            </p>
                        </div>
                        <span class="award-tag">{{ $award->tag }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
Video Area
==============================-->
<div class="video-area-1 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-wrap">
                    <div class="jarallax" data-bg-src="{{ asset('dist/front/img/normal/video_2-1.jpg') }}">
                    </div>
                    <a href="https://www.youtube.com/watch?v=vvNwlRLjLkU" class="play-btn circle-btn btn gsap-magnetic popup-video background-image">PLAY VIDEO
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Blog Area
==============================-->
<section class="blog-area space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-6 col-lg-8">
                <div class="title-area text-center">
                    <h2 class="sec-title">Read Our Articles and News</h2>
                </div>
            </div>
        </div>
        <div class="row gy-40 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('dist/front/img/blog/blog_1_1.png') }}" alt="blog image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta-item blog-meta">
                            <a href="blog.html">March 26, 2024</a>
                            <a href="blog.html">Branding</a>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.html">Everything You Should Know About Return</a></h4>
                        <a href="blog-details.html" class="link-btn">
                            <span class="link-effect">
                                <span class="effect-1">READ MORE</span>
                                <span class="effect-1">READ MORE</span>
                            </span>
                            <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('dist/front/img/blog/blog_1_2.png') }}" alt="blog image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta-item blog-meta">
                            <a href="blog.html">March 26, 2024</a>
                            <a href="blog.html">Branding</a>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.html">6 Big Commerce Design Tips For Big Results</a></h4>
                        <a href="blog-details.html" class="link-btn">
                            <span class="link-effect">
                                <span class="effect-1">READ MORE</span>
                                <span class="effect-1">READ MORE</span>
                            </span>
                            <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{ asset('dist/front/img/blog/blog_1_3.png') }}" alt="blog image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta-item blog-meta">
                            <a href="blog.html">March 26, 2024</a>
                            <a href="blog.html">Branding</a>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.html">Four Steps to Conduct a Successful Usability</a></h4>
                        <a href="blog-details.html" class="link-btn">
                            <span class="link-effect">
                                <span class="effect-1">READ MORE</span>
                                <span class="effect-1">READ MORE</span>
                            </span>
                            <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Client Area
==============================-->
<div class="client-area-1 overflow-hidden space-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <ul class="client-list-wrap">
                    @foreach($clients as $client)
                    <li>
                        <a href="{{ $client->url!='' ? $client->url : 'javascript:void(0)' }}">
                            <span class="link-effect">
                                <span class="effect-1"><img src="{{ asset('uploads/'.$client->photo) }}" alt="img"></span>
                                <span class="effect-1"><img src="{{ asset('uploads/'.$client->photo) }}" alt="img"></span>
                            </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!--==============================
CTA Area
==============================-->
<div class="cta-area-1 overflow-hidden bg-theme space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="title-area text-center mb-0">
                    <h2 class="sec-title">Let's Create Something Great</h2>
                    <p class="sec-text mt-30 mb-40">We shift you from today’s reality to tomorrow’s potential, ensuring</p>
                    <div class="btn-group justify-content-center">
                        <a href="contact.html" class="btn mt-0">
                            <span class="link-effect">
                                <span class="effect-1">LET’S TALK WITH US</span>
                                <span class="effect-1">LET’S TALK WITH US</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('front.layouts.footer_1')
@endsection