@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper style2 bg-smoke">
    <div class="container-fluid">
        <div class="breadcumb-content">
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</div>

<section class="shop__area space">
    <div class="container">
        <div class="row gx-60 gy-60">
            <div class="col-xl-6">
                <div class="product-big-img">
                    <div class="global-carousel product-thumb-slider" data-slide-show="1" data-asnavfor=".product-small-img" data-loop="true">
                        <div class="slide">
                            <div class="img"><img src="{{ asset('uploads/'.$product->photo) }}" alt="Product Image"></div>
                        </div>
                        @foreach($product->photos as $image)
                        <div class="slide">
                            <div class="img"><img src="{{ asset('uploads/'.$image->photo) }}" alt="Product Image"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row global-carousel product-small-img" data-slide-show="3" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="2" data-asnavfor=".product-thumb-slider" data-loop="true">
                    <div class="col-lg-4 slide-thumb">
                        <div class="img"><img src="{{ asset('uploads/'.$product->photo) }}" alt="Product Image"></div>
                    </div>
                    @foreach($product->photos as $image)
                    <div class="col-lg-4 slide-thumb">
                        <div class="img"><img src="{{ asset('uploads/'.$image->photo) }}" alt="Product Image"></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-6">
                <div class="product-about">
                    <h2 class="product-title">{{ $product->name }}</h2>
                    
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        (5 Customer Reviews)
                    </div>
                    <p class="price">
                        @if($product->regular_price != $product->sale_price)
                            <del>${{ $product->regular_price }}</del>
                        @endif
                        ${{ $product->sale_price }}
                    </p>
                    <div class="text">
                        {!! nl2br($product->short_description) !!}
                    </div>
                    <div class="actions">
                        <a href="cart.html" class="btn">
                            <span class="link-effect">
                                <span class="effect-1">ADD TO CART</span>
                                <span class="effect-1">ADD TO CART</span>
                            </span>
                        </a>
                    </div>
                    <div class="product_meta">
                        <span class="posted_in">Category: <a href="shop.html" rel="tag">{{ $product->product_category->name }}</a></span>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav product-tab-style1" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            @if($product->features->count() > 0)
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn" id="info-tab" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a>
            </li>
            @endif
            <li class="nav-item" role="presentation">
                <a class="nav-link th-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews(1)</a>
            </li>
        </ul>
        <div class="tab-content" id="productTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p>
                    {!! $product->description !!}
                </p>                    
            </div>
            @if($product->features->count() > 0)
            <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                <table class="woocommerce-table">
                    <tbody>
                        @foreach($product->features as $feature)
                        <tr>
                            <th class="w_40_p">{{ $feature->name }}</th>
                            <td>{{ $feature->value }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="woocommerce-Reviews mb-25">
                    <div class="comments-wrap">
                        <div class="latest-comments">
                            <ul class="list-wrap">
                                <li>
                                    <div class="comments-box">
                                        <div class="comments-avatar">
                                            <img src="{{ asset('dist/front/img/blog/comment01.png') }}" alt="img">
                                        </div>
                                        <div class="comments-text">
                                            <div class="avatar-name">
                                                <span class="date">March 26, 2024</span>
                                                <h6 class="name">Parker Strong</h6>
                                            </div>
                                            <div class="product-rating mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>
                                                But in order that you may see whence all this born error of those who accuse pleasure and praise pain will open the whole matter explain
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-top">
            <h3 class="fw-semibold mb-30 mt-n2">Related Products</h3>
            <div class="row global-carousel" data-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">

                @forelse($related_products as $related_product)
                <div class="col-sm-6">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ asset('uploads/' . $related_product->photo) }}" alt="Product Image">
                            <div class="actions">
                                <a href="cart.html" class="btn">
                                    <span class="link-effect">
                                        <span class="effect-1">ADD TO CART</span>
                                        <span class="effect-1">ADD TO CART</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="{{ route('product', $related_product->slug) }}">{{ $related_product->name }}</a></h3>
                            <span class="price">
                                @if($related_product->regular_price != $related_product->sale_price)
                                    <del>${{ $related_product->regular_price }}</del>
                                @endif
                                ${{ $related_product->sale_price }}
                            </span>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-danger">No related products found.</p>
                @endforelse

                
                
            </div>
        </div>
    </div>
</section>

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection