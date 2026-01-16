@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-8.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Pricing</h1>
        </div>
    </div>
</div>

<div class="space">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach($packages as $package)
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card bg-smoke">
                    <h4 class="pricing-card_title">{{ $package->name }}</h4>
                    <div class="price-card-wrap">
                        <h4 class="pricing-card_price"><span class="currency">$</span>{{ $package->price }}<span class="duration">/{{ $package->duration }}</span>
                        </h4>
                    </div>
                    <p>{!! nl2br($package->description) !!}</p>
                    <div class="checklist">
                        <ul>
                            @foreach($package->features as $feature)
                            <li><i class="fas fa-{{ $feature->availability == 'Yes' ? 'check' : 'times' }}"></i> {{ $feature->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="{{ $package->button_link }}" class="btn">
                        <span class="link-effect">
                            <span class="effect-1">{{ $package->button_text }}</span>
                            <span class="effect-1">{{ $package->button_text }}</span>
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection