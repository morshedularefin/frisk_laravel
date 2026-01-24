<header class="nav-header header-{{ Request::is('home-2') || Request::is('home-4') || Request::is('home-5') ? 'layout2' : 'layout1' }}">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            @php
                                $logo = (Request::is('home-2') || Request::is('home-4') || Request::is('home-5')) ? 'logo-white-sm.svg' : 'logo.svg';
                            @endphp
                            <a href="{{ url('/') }}"><img src="{{ asset('dist/front/img/'.$logo) }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="active menu-item-has-children">
                                    <a href="javascript:void;">
                                        <span class="link-effect">
                                            <span class="effect-1">HOME</span>
                                            <span class="effect-1">HOME</span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Digital Agency</a></li>
                                        <li class="{{ Request::is('home-2') ? 'active' : '' }}"><a href="{{ route('home_2') }}">Creative Agency</a></li>
                                        <li class="{{ Request::is('home-3') ? 'active' : '' }}"><a href="{{ route('home_3') }}">Design Studio</a></li>
                                        <li class="{{ Request::is('home-4') ? 'active' : '' }}"><a href="{{ route('home_4') }}">Modern Agency</a></li>
                                        <li class="{{ Request::is('home-5') ? 'active' : '' }}"><a href="{{ route('home_5') }}">Startup Agency</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void;">
                                        <span class="link-effect">
                                            <span class="effect-1">PAGES</span>
                                            <span class="effect-1">PAGES</span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('services') }}">Service</a></li>
                                        <li><a href="{{ route('team_members') }}">Team Members</a></li>
                                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                        <li><a href="{{ route('cart') }}">Cart</a></li>
                                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">SHOP</span>
                                            <span class="effect-1">SHOP</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('portfolios') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">PORTFOLIO</span>
                                            <span class="effect-1">PORTFOLIO</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">
                                        <span class="link-effect">
                                            <span class="effect-1">BLOG</span>
                                            <span class="effect-1">BLOG</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <span class="link-effect">
                                            <span class="effect-1">CONTACT</span>
                                            <span class="effect-1">CONTACT</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="navbar-right d-inline-flex d-lg-none">
                            <button type="button" class="menu-toggle sidebar-btn">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        @php
                        $cart_count = 0;
                        if(session()->has('cart')) {
                            $cart = session()->get('cart', []);
                            $cart_count = count($cart);
                        }
                        @endphp
                        <div class="header-button">
                            <button type="button" class="header-cart sideMenuToggler" href="cart.html"><img src="{{ asset('dist/front/img/icon/shopping-cart.svg') }}" alt="img">
                                <span class="link-effect header-cart-text">
                                    <span class="effect-1">CART @if($cart_count > 0)<span>({{ $cart_count }})</span>@endif</span>
                                    <span class="effect-1">CART @if($cart_count > 0)<span>({{ $cart_count }})</span>@endif</span>
                                </span>
                            </button>
                            @if(Auth::guard('web')->check())
                            <a href="{{ route('user.dashboard') }}" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">DASHBOARD</span>
                                    <span class="effect-1">DASHBOARD</span>
                                </span>
                            </a>
                            @else
                            <a href="{{ route('login') }}" class="btn">
                                <span class="link-effect">
                                    <span class="effect-1">LOG IN</span>
                                    <span class="effect-1">LOG IN</span>
                                </span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>