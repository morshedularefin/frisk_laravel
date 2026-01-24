@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-9.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Shop</h1>
        </div>
    </div>
</div>

<form action="{{ route('shop') }}" method="get">
<section class="shop__area space">
    <div class="container">
        <div class="shop__inner-wrap">
            <div class="row">
                <div class="col-70">
                    <div class="shop-sort-bar">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-sm-auto">
                                <p class="woocommerce-result-count">
                                    Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results
                                </p>
                            </div>

                            <div class="col-sm-auto">
                                <div class="woocommerce-ordering">
                                    <select name="order" class="orderby">
                                        <option value="latest" {{ request('order') == 'latest' ? 'selected' : '' }}>Sort by latest</option>
                                        <option value="oldest" {{ request('order') == 'oldest' ? 'selected' : '' }}>Sort by oldest</option>
                                        <option value="popularity" {{ request('order') == 'popularity' ? 'selected' : '' }}>Sort by popularity</option>
                                        <option value="rating" {{ request('order') == 'rating' ? 'selected' : '' }}>Sort by average rating</option>
                                        <option value="price_asc" {{ request('order') == 'price_asc' ? 'selected' : '' }}>Sort by price: low to high</option>
                                        <option value="price_desc" {{ request('order') == 'price_desc' ? 'selected' : '' }}>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-60">
                        @foreach($products as $product)
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('uploads/'.$product->photo) }}" alt="Product Image">
                                    <div class="actions">
                                        <a href="" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a></h3>
                                    
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                    <span class="price">
                                        @if($product->regular_price != $product->sale_price)
                                            <del>${{ $product->regular_price }}</del>
                                        @endif
                                        ${{ $product->sale_price }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @if ($products->hasPages())
                        <div class="col-lg-12">
                            <div class="pagination-wrap mt-50">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination list-wrap">
                                        {{-- Previous Page Link --}}
                                        @if (!$products->onFirstPage())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $products->appends($_GET)->previousPageUrl() }}">
                                                    <i class="fas fa-arrow-left"></i>
                                                </a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach ($products->appends($_GET)->getUrlRange(1, $products->lastPage()) as $page => $url)
                                            <li class="page-item {{ ($page == $products->currentPage()) ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($products->hasMorePages())
                                            <li class="page-item next-page">
                                                <a class="page-link" href="{{ $products->appends($_GET)->nextPageUrl() }}">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-30">
                    <aside class="shop__sidebar">
                        <div class="sidebar__widget sidebar__widget-two">
                            <div class="sidebar__search">
                                <input type="text" placeholder="Search . . ." name="search" value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Categories</h4>
                            <div class="sidebar__cat-list">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="radio_item_0" value="" {{ request('category') == null ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio_item_0">
                                        All Categories
                                    </label>
                                </div>
                                @foreach($product_categories as $product_category)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="radio_item_{{ $loop->iteration }}" value="{{ $product_category->id }}" {{ request('category') == $product_category->id ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio_item_{{ $loop->iteration }}">
                                        {{ $product_category->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Filter by Price</h4>
                            <div class="widget_price_filter">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider"></div>
                                    <div class="price_label">
                                        Price: <span class="from">${{ request('price_min') ? request('price_min') : 1 }}</span> — <span class="to">${{ request('price_max') ? request('price_max') : 999 }}</span>
                                    </div>
                                    <input type="hidden" name="price_min" id="price_min" value="{{ request('price_min') ? request('price_min') : 1 }}">
                                    <input type="hidden" name="price_max" id="price_max" value="{{ request('price_max') ? request('price_max') : 999 }}">
                                </div>
                            </div>
                            <script>
                                $(".price_slider").slider({
                                    range: true,
                                    min: 0,
                                    max: 1000,
                                    values: [{{ request('price_min') ? request('price_min') : 1 }}, {{ request('price_max') ? request('price_max') : 999 }}],
                                    slide: function (event, ui) {
                                        $(".from").text("$" + ui.values[0]);
                                        $(".to").text("$" + ui.values[1]);
                                        $("#price_min").val(ui.values[0]);
                                        $("#price_max").val(ui.values[1]);
                                    }
                                });
                                $(".from").text("$" + $(".price_slider").slider("values", 0));
                                $(".to").text("$" + $(".price_slider").slider("values", 1));
                                $("#price_min").val($(".price_slider").slider("values", 0));
                                $("#price_max").val($(".price_slider").slider("values", 1));
                            </script>
                        </div>
                        <div class="sidebar__widget">
                            <button type="submit" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">FILTER</span>
                                    <span class="effect-1">FILTER</span>
                                </span>
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
</form>

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection