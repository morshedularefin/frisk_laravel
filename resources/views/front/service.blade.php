@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper style2 bg-smoke">
    <div class="container-fluid">
        <div class="breadcumb-content">
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>{{ $service->name }}</li>
            </ul>
        </div>
    </div>
</div>

<div class="service-details-page-area space">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12">
                <div class="service-inner-thumb mb-80 wow img-custom-anim-top">
                    <img class="w-100" src="{{ asset('uploads/'.$service->photo) }}" alt="img">
                </div>
            </div>
            <div class="col-xl-8">
                <div class="title-area mb-0">
                    <h2 class="sec-title">{{ $service->name }}</h2>
                    <div class="sec-text mt-30">
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection