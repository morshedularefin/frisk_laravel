<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><img src="{{ asset('dist/front/img/icon/close.svg') }}" alt="icon"></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget" style="height:auto;">
                    @php
                    $cart = session()->get('cart', []);
                    $subtotal = 0;
                    @endphp
                    @forelse($cart as $id => $item)
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="{{ route('remove_from_cart', $id) }}" class="remove remove_from_cart_button"><i class="fas fa-times"></i></a>
                        <a href="{{ route('product', $item['slug']) }}"><img src="{{ asset('uploads/'.$item['photo']) }}" alt="Cart Image" style="width:100px;height:auto;">{{ $item['name'] }}</a>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>{{ $item['price'] }}
                        </span>
                    </li>
                    @php
                    $subtotal += $item['price'];
                    @endphp
                    @empty
                    <li class="woocommerce-mini-cart-item mini_cart_item text-danger">
                        Your cart is empty.
                    </li>
                    @endforelse
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>SUBTOTAL</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($subtotal, 2) }}
                    </span>
                </p>
                <p class="woocommerce-mini-cart__total total">
                    @php
                    if(session()->has('coupon')) {
                        $discount_amount = session('coupon.discount_amount');    
                    } else {
                        $discount_amount = 0.00;
                    }
                    $total = $subtotal - $discount_amount;
                    @endphp
                    <strong>COUPON @if(session()->has('coupon'))
                                <br>
                                Code: "{{ session('coupon.code') }}" is applied.
                                @endif</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($discount_amount, 2) }}
                    </span>
                </p>
                <p class="woocommerce-mini-cart__total total">
                    <strong>TOTAL</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($total, 2) }}
                    </span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons btn-wrap justify-content-between">
                    <a href="{{ route('cart') }}" class="btn style-white wc-forward">
                        <span class="link-effect">
                            <span class="effect-1">VIEW CART</span>
                            <span class="effect-1">VIEW CART</span>
                        </span>
                    </a>
                    <a href="{{ route('checkout') }}" class="btn style2 wc-forward">
                        <span class="link-effect">
                            <span class="effect-1">CHECKOUT</span>
                            <span class="effect-1">CHECKOUT</span>
                        </span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>