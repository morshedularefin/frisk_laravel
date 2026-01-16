@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-8.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">FAQ</h1>
        </div>
    </div>
</div>

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

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection