@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-8.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Dashboard</h1>
        </div>
    </div>
</div>

<section class="cwa_dashboard_profile cwa_dashboard">
    <div class="container">
        <div class="row">
            <!--  Sidebar Area -->
            @include('front.user.sidebar')
            
            <!--  Main Content Area -->
            <div class="col-lg-8 col-xl-9">
                <div class="cwa_dashboard_main_contant">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 mb_25">
                            <div class="cwa_profile_overview">
                                <p><i class="fas fa-file-invoice-dollar"></i></p>
                                <h4>8</h4>
                                <p class="name">Total Purchase Item</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb_25">
                            <div class="cwa_profile_overview green">
                                <p><i class="fas fa-file-invoice-dollar"></i></p>
                                <h4>$1,280.08</h4>
                                <p class="name">Total Payment</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb_25">
                            <div class="cwa_profile_overview orange">
                                <p><i class="fas fa-bahai"></i></p>
                                <h4>125</h4>
                                <p class="name">Total Review</p>
                            </div>
                        </div>
                    </div>
                    <div class="cwa_profile_info">
                        <div class="cwa_profile_info_top">
                            <h4>Personal Information</h4>
                            <a href="user-profile.html" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">Edit Info</span>
                                    <span class="effect-1">Edit Info</span>
                                </span>
                            </a>
                        </div>

                        <ul class="">
                            <li><span>Name:</span>Curtis Campher</li>
                            <li><span>Phone:</span>2420 -136- 1452</li>
                            <li class="text-lowercase"><span>Email:</span>user@gmail.com</li>
                            <li><span>Gender:</span>Male</li>
                            <li><span>Age:</span>45 Year</li>
                            <li><span>Country:</span>United States</li>
                            <li><span>Province:</span>Florida</li>
                            <li><span>City:</span>Washington DC</li>
                            <li><span>Zip code:</span>8834</li>
                            <li><span>Address:</span>4A, Park Street</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid p-0 overflow-hidden">
    <div class="slider__marquee clearfix marquee-wrap">
        <div class="marquee_mode marquee__group">
            <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
            <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
            <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
            <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> We Give Unparalleled Flexibility</a></h6>
        </div>
    </div>
</div>

@include('front.layouts.footer_1')
@endsection