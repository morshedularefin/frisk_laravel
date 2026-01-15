@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper style2 bg-smoke">
    <div class="container-fluid">
        <div class="breadcumb-content">
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('team_members') }}">Team Members</a></li>
                <li>{{ $team_member->name }}</li>
            </ul>
        </div>
    </div>
</div>

<div class="team-details-page-area space">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="team-inner-thumb mb-lg-0 mb-40">
                    <img class="w-100" src="{{ asset('uploads/'.$team_member->photo) }}" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-details-about-info mb-0">
                    <h2 class="sec-title mb-3">{{ $team_member->name }}</h2>
                    <h4 class="team-desig">{{ $team_member->position }}</h4>
                    <p class="sec-text mt-30">{!! nl2br($team_member->biography) !!}</p>
                    <div class="about-contact-wrap mt-35">
                        @if($team_member->email!='')
                        <h6 class="about-contact-title"><a href="mailto:{{ $team_member->email }}">{{ $team_member->email }}</a></h6>
                        @endif
                        @if($team_member->phone!='')
                        <h6 class="about-contact-title"><a href="tel:{{ $team_member->phone }}">{{ $team_member->phone }}</a></h6>
                        @endif
                        <div class="social-btn mt-4">
                            @if($team_member->facebook != '')
                            <a href="{{ $team_member->facebook }}" >
                                <i class="fab fa-facebook"></i>
                            </a>
                            @endif
                            @if($team_member->twitter != '')
                            <a href="{{ $team_member->twitter }}">
                                <i class="fab fa-twitter"></i>
                            </a>
                            @endif
                            @if($team_member->youtube != '')
                            <a href="{{ $team_member->youtube }}">
                                <i class="fab fa-youtube"></i>
                            </a>
                            @endif
                            @if($team_member->linkedin != '')
                            <a href="{{ $team_member->linkedin }}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            @endif
                            @if($team_member->instagram != '')
                            <a href="{{ $team_member->instagram }}">
                                <i class="fab fa-instagram"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="contact-area-2 text-center space-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-wrap">
                    <div class="title-area mb-30">
                        <h3 class="sec-title">Contact with Me</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <form action="{{ route('team_member_send_email') }}" method="POST" class="contact-form ajax-contact">
                        @csrf
                        <input type="hidden" name="slug" value="{{ $team_member->slug }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" name="name" placeholder="Full name *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" name="email" placeholder="Email address *">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write your comment *" class="form-control style-border style2"></textarea>
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

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection