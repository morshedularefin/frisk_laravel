@extends('front.layouts.master')

@section('main_content')
<!--==============================
Hero Area
==============================-->
<div class="hero-wrapper hero-7" id="hero">
    <div class="bg-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="hero-style7 text-center">
                        <h1 class="hero-title wow img-custom-anim-top text-smoke">We Help to Grow Your Business</h1>
                        <p class="hero-text wow img-custom-anim-top text-smoke">We are digital agency that helps businesses develop immersive and engaging user experiences that drive top level growth</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="hero-7-thumb wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img src="{{ asset('dist/front/img/hero/hero-7-1.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->

<!--==============================
Client Area
==============================-->
<div class="client-area-1 overflow-hidden space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <ul class="client-list-wrap style2">
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
Feature Area
==============================-->
<div class="feature-area-1 space-bottom">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xl-5 col-lg-8 position-relative">
                <div class="sec_title_static">
                    <div class="sec_title_wrap">
                        <div class="title-area">
                            <h2 class="sec-title">What We Can Do for Our Clients</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6">
                <div class="feature-static-wrap">
                    <div class="feature-static">
                        <div class="feature-card style-grid">
                            <div class="feature-card-icon">
                                <img src="{{ asset('dist/front/img/icon/feature-icon1-1.svg') }}" alt="icon">
                            </div>
                            <div class="feature-card-details">
                                <h4 class="feature-card-title">
                                    <a href="service.html">Social Advertising</a>
                                </h4>
                                <p class="feature-card-text">Good website tells a story that will make users fully immerse themselves operating</p>
                                <a href="service-details.html" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">VIEW DETAILS</span>
                                        <span class="effect-1">VIEW DETAILS</span>
                                    </span>
                                    <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feature-static">
                        <div class="feature-card style-grid">
                            <div class="feature-card-icon">
                                <img src="{{ asset('dist/front/img/icon/feature-icon1-2.svg') }}" alt="icon">
                            </div>
                            <div class="feature-card-details">
                                <h4 class="feature-card-title">
                                    <a href="service.html">Illustration Modelling</a>
                                </h4>
                                <p class="feature-card-text">Good website tells a story that will make users fully immerse themselves operating</p>
                                <a href="service-details.html" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">VIEW DETAILS</span>
                                        <span class="effect-1">VIEW DETAILS</span>
                                    </span>
                                    <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="feature-static">
                        <div class="feature-card style-grid">
                            <div class="feature-card-icon">
                                <img src="{{ asset('dist/front/img/icon/feature-icon1-3.svg') }}" alt="icon">
                            </div>
                            <div class="feature-card-details">
                                <h4 class="feature-card-title">
                                    <a href="service.html">Website Development</a>
                                </h4>
                                <p class="feature-card-text">Good website tells a story that will make users fully immerse themselves operating</p>
                                <a href="service-details.html" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">VIEW DETAILS</span>
                                        <span class="effect-1">VIEW DETAILS</span>
                                    </span>
                                    <img src="{{ asset('dist/front/img/icon/arrow-left-top.svg') }}" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
Project Area
==============================-->
<div class="project-area-4 space overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="title-area text-center">
                    <h2 class="sec-title">Discover Our Selected Projects</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center masonary-active">
            <div class="col-xxl-auto col-lg-7 filter-item">
                <a href="project-details.html" class="portfolio-wrap style3">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('dist/front/img/portfolio/portfolio3_1.jpg') }}" alt="portfolio">
                    </div>
                    <div class="portfolio-details">
                        <ul class="portfolio-meta">
                            <li>Branding</li>
                        </ul>
                        <h3 class="portfolio-title">Decentralized Platform</h3>
                    </div>
                </a>
            </div>
            <div class="col-xxl-auto col-lg-5 filter-item">
                <a href="project-details.html" class="portfolio-wrap style3">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('dist/front/img/portfolio/portfolio3_2.jpg') }}" alt="portfolio">
                    </div>
                    <div class="portfolio-details">
                        <ul class="portfolio-meta">
                            <li>Branding</li>
                        </ul>
                        <h3 class="portfolio-title">Laundering Compliance</h3>
                    </div>
                </a>
            </div>
            <div class="col-xxl-auto filter-item">
                <a href="project-details.html" class="portfolio-wrap style3">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('dist/front/img/portfolio/portfolio3_3.jpg') }}" alt="portfolio">
                    </div>
                    <div class="portfolio-details">
                        <ul class="portfolio-meta">
                            <li>Branding</li>
                        </ul>
                        <h3 class="portfolio-title">Anti Money Laundering</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="btn-wrap mt-50 justify-content-center">
            <a href="project.html" class="btn">
                <span class="link-effect">
                    <span class="effect-1">VIEW ALL PROJECTS</span>
                    <span class="effect-1">VIEW ALL PROJECTS</span>
                </span>
            </a>
        </div>
    </div>
</div>

@include('front.layouts.marquee')

<!--==============================
Faq Area
==============================-->
<div class="faq-area-2 space overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="accordion-area accordion" id="faqAccordion">


                    @foreach($faqs as $faq)
                    <div class="accordion-card style2 {{ $loop->first ? 'active' : '' }}">
                        <div class="accordion-header" id="collapse-item-{{ $faq->id }}">
                            <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="true" aria-controls="collapse-{{ $faq->id }}">{{ $faq->question }}</button>
                        </div>
                        <div id="collapse-{{ $faq->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="collapse-item-{{ $faq->id }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">
                                    {!! nl2br($faq->answer) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Testimonial Area
==============================-->
<div class="testimonial-area-1 space bg-theme">
    <div class="testimonial-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="{{ asset('dist/front/img/testimonial/testi_thumb1_1.jpg') }}" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area">
                    <h2 class="sec-title">Testimonials</h2>
                </div>
                <div class="quote-icon">
                    <img src="{{ asset('dist/front/img/icon/quote.svg') }}" alt="icon">
                </div>
                <div class="row global-carousel testi-slider1" data-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true">
                    @foreach($testimonials as $testimonial)
                    <div class="col-lg-4">
                        <div class="testi-box ">
                            <p class="testi-box_text">
                                {!! nl2br($testimonial->comment) !!}
                            </p>
                            <div class="testi-box_profile">
                                <h4 class="testi-box_name">{{ $testimonial->name }}</h4>
                                <span class="testi-box_desig">{{ $testimonial->designation }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
@include('front.layouts.footer_3')
@endsection