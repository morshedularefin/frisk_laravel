@extends('front.layouts.master')

@section('main_content')

<div class="auth-main-area">
    <section class="space signin__area">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-xxl-5 col-md-9 col-lg-7 col-xl-6">
                    <div class="cwa_sign_in_form mt_80 pb_115 xs_pb_95 p-5">

                        <div class="alert alert-success">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </div>

                        <form method="POST" action="{{ route('password.confirm') }}" autocomplete="off" style="padding:0;">
                            @csrf
                            <div class="cwa_sign_in_input">
                                <label>Password *</label>
                                <input id="password" type="password" name="password">
                                @if ($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <button class="btn mt-4 w-100">
                                <span class="link-effect text-uppercase">
                                    <span class="effect-1">Confirm</span>
                                    <span class="effect-1">Confirm</span>
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