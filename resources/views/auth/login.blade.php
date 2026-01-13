@extends('front.layouts.master')

@section('main_content')

<div class="auth-main-area">
    <section class="space signin__area">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-xxl-5 col-md-9 col-lg-7 col-xl-6">
                    <div class="cwa_sign_in_form mt_80 pb_115 xs_pb_95">

                        @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <h3>Sign in your account</h3>
                            <div class="cwa_sign_in_input">
                                <label>Email *</label>
                                <input type="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="cwa_sign_in_input">
                                <label>Password *</label>
                                <input id="password" type="password" name="password">
                                @if ($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="cwa_sign_in_input d-flex flex-wrap align-items-center justify-content-between">
                                <a href="{{ route('password.request') }}" style="color:#2e63be">Forgot Password?</a>
                            </div>
                            <button class="btn mt-4 w-100">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">Sign in</span>
                                    <span class="effect-1">Sign in</span>
                                </span>
                            </button>
                        </form>
                        <p class="dont_account mb-40">Don't have an account? <a href="{{ route('register') }}">Sign Up for free</a>
                        </p>
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