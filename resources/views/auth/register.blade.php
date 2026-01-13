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

                        <form method="POST" action="{{ route('register') }}" autocomplete="off">
                            @csrf
                            <h3>Create Account</h3>
                            <div class="cwa_sign_in_input">
                                <label>Name *</label>
                                <input type="text" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <div class="text-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
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
                                <input type="password" name="password">
                                @if ($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="cwa_sign_in_input">
                                <label>Confirm Password *</label>
                                <input type="password" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <div class="text-danger">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                            <button class="btn mt-4 w-100">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">Submit</span>
                                    <span class="effect-1">Submit</span>
                                </span>
                            </button>
                        </form>
                        <p class="dont_account mb-40">Already have an account? <a href="{{ route('login') }}">Log In Now</a>
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