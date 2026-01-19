@extends('front.layouts.master')

@section('main_content')
<!--==============================
Hero Area
==============================-->
<div class="hero-wrapper hero-3" id="hero">
    <div class="container">
        <div class="hero-style3">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="hero-title wow img-custom-anim-left">Design Studio</h1>
                    <div class="hero-3-thumb wow img-custom-anim-top">
                        <img class="w-100" src="{{ asset('dist/front/img/hero/hero-3-1.jpg') }}" alt="img">
                    </div>
                    <h1 class="hero-title text-end wow img-custom-anim-right">with Experience</h1>
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <p class="hero-text wow img-custom-anim-right">We are digital agency that helps businesses develop immersive and engaging user experiences that drive top level growth</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->

<!--==============================
Counter Area 02
==============================-->
<div class="counter-area-1 space-bottom overflow-hidden">
    <div class="container">
        <div class="row gy-40 align-items-center justify-content-lg-between justify-content-center">
            <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                <div class="counter-card">
                    <h3 class="counter-card_number">
                        <span class="counter-number">{{ $counter_data->number1 }}</span>+
                    </h3>
                    <h4 class="counter-card_title">{{ $counter_data->title1 }}</h4>
                    <p class="counter-card_text">
                        {!! nl2br($counter_data->text1) !!}
                    </p>
                </div>
            </div>
            <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                <div class="counter-card">
                    <h3 class="counter-card_number">
                        <span class="counter-number">{{ $counter_data->number2 }}</span>+
                    </h3>
                    <h4 class="counter-card_title">{{ $counter_data->title2 }}</h4>
                    <p class="counter-card_text">
                        {!! nl2br($counter_data->text2) !!}
                    </p>
                </div>
            </div>
            <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                <div class="counter-card">
                    <h3 class="counter-card_number">
                        <span class="counter-number">{{ $counter_data->number3 }}</span>+
                    </h3>
                    <h4 class="counter-card_title">{{ $counter_data->title3 }}</h4>
                    <p class="counter-card_text">
                        {!! nl2br($counter_data->text3) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Why Choose Us Area
==============================-->
<div class="why-area-1 space bg-theme">
    <div class="why-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="{{ asset('dist/front/img/normal/why_3-1.jpg') }}" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area mb-45">
                    <h2 class="sec-title">Passionate About Creating Quality Design</h2>
                </div>
                <h4>We Love What We Do</h4>
                <p>We are a creative agency working with brands building insightful strategy, creating unique designs and crafting value</p>
                <h4 class="mt-35">Why Work With Us</h4>
                <p class="mb-n1">If you ask our clients what it’s like working with 36, they’ll talk about how much we care about their success. For us, real relationships fuel real success. We love building brands</p>
            </div>
        </div>

    </div>
</div>

<!--==============================
Project Area
==============================-->
<div class="award-area-1 space overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="award-wrap-area">
                    @foreach($portfolios as $portfolio)
                    <li class="single-award-list style2 tg-img-reveal-item" data-fx="1" data-img="{{ asset('uploads/' . $portfolio->photo) }}">
                        <span class="award-year">
                            @if($portfolio->project_end_date != '')
                            {{ date('Y', strtotime($portfolio->project_end_date)) }}
                            @else
                            ---
                            @endif
                        </span>
                        <div class="award-details">
                            <h4><a href="{{ route('portfolio', $portfolio->slug) }}">{{ $portfolio->title }}</a></h4>
                            <div class="award-meta">
                                <a href="javascript:void(0);">{{ $portfolio->category }}</a>
                            </div>
                        </div>
                        <span class="award-tag">
                            {{ $portfolio->client }}
                        </span>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-wrap mt-50 justify-content-center">
                    <a href="{{ route('portfolios') }}" class="btn">
                        <span class="link-effect">
                            <span class="effect-1">VIEW ALL PROJECTS</span>
                            <span class="effect-1">VIEW ALL PROJECTS</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Feature Area
==============================-->
<div class="feature-area-1 space-bottom">
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
            <div class="col-xl-4 col-md-6">
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
Contact Area
==============================-->
<div class="contact-area-1 space bg-theme">
    <div class="contact-map shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
        <iframe src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&t=m&z=10&output=embed&iwloc=near" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6">
                <div class="contact-form-wrap">
                    <div class="title-area mb-30">
                        <h2 class="sec-title">Have Any Project on Your Mind?</h2>
                        <p>Great! We're excited to hear from you and let's start something</p>
                    </div>
                    <form action="" method="POST" class="contact-form ajax-contact">
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
                                    <input type="text" class="form-control style-border" name="website" id="website" placeholder="Website link">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="How Can We Help You*" id="contactForm" class="form-control style-border"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn col-12">
                            <button type="submit" class="btn mt-20">
                                <span class="link-effect">
                                    <span class="effect-1">SEND MESSAGE</span>
                                    <span class="effect-1">SEND MESSAGE</span>
                                </span>
                            </button>
                        </div>
                    </form>
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
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('post', $post->slug) }}">
                            <img src="{{ asset('uploads/'.$post->photo) }}" alt="blog image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="post-meta-item blog-meta">
                            <a href="javascript:void(0);">{{ $post->created_at->format('F d, Y') }}</a>
                            <a href="javascript:void(0);">{{ $post->post_category->name }}</a>
                        </div>
                        <h4 class="blog-title"><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h4>
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
        </div>
    </div>
</section>

<!--==============================
CTA Area
==============================-->
<div class="cta-area-1 overflow-hidden bg-title space text-xl-start text-center">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center align-items-center">
            <div class="col-xl-8 col-lg-10">
                <div class="title-area mb-xl-0 mb-60">
                    <h2 class="sec-title text-white">Let's Create Something Great</h2>
                    <p class="sec-text mt-30 mb-n2 text-white">We shift you from today’s reality to tomorrow’s potential, ensuring</p>
                </div>
            </div>
            <div class="col-xl-auto">
                <a class="circle-btn btn bg-theme text-title gsap-magnetic" href="contact.html">
                    <span class="link-effect">
                        <span class="effect-1">LET'S TALK</span>
                        <span class="effect-1">LET'S TALK</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
@include('front.layouts.footer_1')
@endsection