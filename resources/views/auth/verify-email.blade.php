@extends('front.layouts.master')

@section('main_content')

<div class="auth-main-area">
    <section class="space signin__area">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-xxl-5 col-md-9 col-lg-7 col-xl-6">
                    <div class="cwa_sign_in_form mt_80 pb_115 xs_pb_95 p-4 pe-5">

                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}

                        @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success">
                             {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('verification.send') }}" autocomplete="off">
                            @csrf
                            <button class="btn w-100">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">{{ __('Resend Verification Email') }}</span>
                                    <span class="effect-1">{{ __('Resend Verification Email') }}</span>
                                </span>
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn w-100">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">{{ __('Log Out') }}</span>
                                    <span class="effect-1">{{ __('Log Out') }}</span>
                                </span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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