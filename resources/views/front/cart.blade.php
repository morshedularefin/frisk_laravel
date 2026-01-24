@extends('front.layouts.master')

@section('main_content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('dist/front/img/bg/breadcumb-bg1-9.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Cart</h1>
        </div>
    </div>
</div>

<div class="cart-wrapper space-top space-extra-bottom">
    <div class="container">

        <form action="#" class="woocommerce-cart-form">
            <table class="cart_table">
                <thead>
                    <tr>
                        <th colspan="3" class="cart-col-productname">PRODUCT</th>
                        <th class="cart-col-total">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $cart = session()->get('cart', []);
                    $total = 0;
                    @endphp
                    @foreach($cart as $id => $item)
                    <tr class="cart_item">
                        <td>
                            <a href="{{ route('remove_from_cart', $id) }}" class="remove"><i class="fas fa-times"></i></a>
                        </td>
                        <td>
                            <a class="cart-productimage" href="{{ route('product', $item['slug']) }}"><img src="{{ asset('uploads/'.$item['photo']) }}" alt="Image" style="width:200px;"></a>
                        </td>
                        <td>
                            <a class="cart-productname" href="{{ route('product', $item['slug']) }}">
                                {{ $item['name'] }}
                            </a>
                        </td>
                        <td>
                            <span class="amount"><bdi><span>$</span>{{ $item['price'] }}</bdi></span>
                        </td>
                    </tr>
                    @php
                    $total += $item['price'];
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </form>
        <div class="row gy-30 justify-content-between">
            <div class="col-xl-4 col-lg-6">
                <div class="cart-coupon">
                    <input type="text" class="form-control" placeholder="Coupon Code...">
                    <button type="submit" class="btn">
                        <span class="link-effect">
                            <span class="effect-1">APPLY</span>
                            <span class="effect-1">APPLY</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn">
                    <span class="link-effect">
                        <span class="effect-1">UPDATE CART</span>
                        <span class="effect-1">UPDATE CART</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12">
                <h3 class="fw-semibold summary-title mt-90 mb-2">Cart Totals</h3>
                <table class="cart_totals">
                    <tbody>
                        <tr>
                            <td>SUBTOTAL</td>
                            <td data-title="Cart Subtotal">
                                <span class="amount"><bdi><span>$</span>{{ number_format($total, 2) }}</bdi></span>
                            </td>
                        </tr>
                        <tr>
                            <td>COUPON</td>
                            <td data-title="Cart Subtotal">
                                <span class="amount"><bdi><span>$10.00</span></bdi></span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td>TOTAL</td>
                            <td data-title="Total">
                                <strong><span class="amount"><bdi><span>$</span>{{ number_format($total, 2) }}</bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="wc-proceed-to-checkout mb-30">
                    <a href="checkout.html" class="btn">
                        <span class="link-effect">
                            <span class="effect-1">PROCEED TO CHECKOUT</span>
                            <span class="effect-1">PROCEED TO CHECKOUT</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('front.layouts.marquee')

@include('front.layouts.footer_1')
@endsection