@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-8.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About</h1>
        </div>
    </div>
</div>

<div class="counter-area-1 space overflow-hidden">
    <div class="container">
        <div class="row gy-40 align-items-center justify-content-lg-between justify-content-center">
            <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                <div class="counter-card">
                    <h3 class="counter-card_number">
                        <span class="counter-number">26</span>+
                    </h3>
                    <h4 class="counter-card_title">Years of Experience</h4>
                    <p class="counter-card_text">We are a creative agency brands building insightful strategy, creating unique designs helping</p>
                </div>
            </div>
            <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                <div class="counter-card">
                    <h3 class="counter-card_number">
                        <span class="counter-number">347</span>+
                    </h3>
                    <h4 class="counter-card_title">Successful Projects</h4>
                    <p class="counter-card_text">We are a creative agency brands building insightful strategy, creating unique designs helping</p>
                </div>
            </div>
            <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                <div class="counter-card">
                    <h3 class="counter-card_number">
                        <span class="counter-number">139</span>+
                    </h3>
                    <h4 class="counter-card_title">Satisfied Customers</h4>
                    <p class="counter-card_text">We are a creative agency brands building insightful strategy, creating unique designs helping</p>
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
        <img src="assets/img/normal/why_3-1.jpg" alt="img">
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
Award Area
==============================-->
<div class="award-area-1 space overflow-hidden">
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
Team Area
==============================-->
<div class="team-area-1 space-bottom overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center">
                    <h2 class="sec-title">Our Team Behind The Studio</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach($team_members as $team_member)
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="{{ asset('uploads/'.$team_member->photo) }}" alt="Team Image">
                    </div>
                    <div class="team-card_content">
                        <h3 class="team-card_title"><a href="{{ route('team_member',$team_member->slug) }}">{{ $team_member->name }}</a></h3>
                        <span class="team-card_desig">{{ $team_member->position }}</span>
                    </div>
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
Client Area
==============================-->
<div class="client-area-1 overflow-hidden space">
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

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection