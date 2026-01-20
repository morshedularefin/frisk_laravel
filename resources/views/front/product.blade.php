@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-9.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Shop</h1>
        </div>
    </div>
</div>

<form action="" method="post">
@csrf
<section class="shop__area space">
    <div class="container">
        <div class="shop__inner-wrap">
            <div class="row">
                <div class="col-70">
                    <div class="shop-sort-bar">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-sm-auto">
                                <p class="woocommerce-result-count">Showing 1–12 of 27 results</p>
                            </div>

                            <div class="col-sm-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Short by latest</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-60">

                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_1.jpg') }}" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tag">SALE</div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Printed T-Shirt</a></h3>
                                    <span class="price"><del>€29.50</del>€20.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_2.jpg') }}" alt="Product Image">
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
                                    <h3 class="product-title"><a href="shop-details.html">Card Wallet</a></h3>
                                    <span class="price">€52.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_3.jpg') }}" alt="Product Image">
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
                                    <h3 class="product-title"><a href="shop-details.html">Kinto Tumbler</a></h3>
                                    <span class="price">€38.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_4.jpg') }}" alt="Product Image">
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
                                    <h3 class="product-title"><a href="shop-details.html">Ripple Crewneck</a></h3>
                                    <span class="price">€160.90</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_5.jpg') }}" alt="Product Image">
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
                                    <h3 class="product-title"><a href="shop-details.html">Herman Miller</a></h3>
                                    <span class="price">€44.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_6.jpg') }}" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tag">SALE</div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Knit Beanie</a></h3>
                                    <span class="price"><del>€50.00</del> €30.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_7.jpg') }}" alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="btn">
                                            <span class="link-effect">
                                                <span class="effect-1">ADD TO CART</span>
                                                <span class="effect-1">ADD TO CART</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tag">SALE</div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-details.html">Bifold Wallet</a></h3>
                                    <span class="price"><del>€110.80</del> €84.80</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="{{ asset('dist/front/img/product/product_1_8.jpg') }}" alt="Product Image">
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
                                    <h3 class="product-title"><a href="shop-details.html">Pillars Tee</a></h3>
                                    <span class="price">€26.90</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap mt-80">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination list-wrap">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-30">
                    <aside class="shop__sidebar">
                        <div class="sidebar__widget sidebar__widget-two">
                            <div class="sidebar__search">
                                <input type="text" placeholder="Search . . .">
                            </div>
                        </div>
                        <div class="sidebar__widget">
                            <h4 class="sidebar__widget-title">Categories</h4>
                            <div class="sidebar__cat-list">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="radio_item_0" checked>
                                    <label class="form-check-label" for="radio_item_0">
                                        All Categories
                                    </label>
                                </div>
                                @foreach($product_categories as $product_category)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="radio_item_{{ $loop->iteration }}">
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
                                        Price: <span class="from">$0</span> — <span class="to">$70</span>
                                    </div>
                                </div>
                            </div>
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