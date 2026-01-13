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
                                        <li><a href="about.html">About Page</a></li>
                                        <li><a href="service.html">Service Page</a></li>
                                        <li><a href="team.html">Team Page</a></li>
                                        <li><a href="pricing.html">Pricing Page</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="faq.html">FAQ Page</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span class="link-effect">
                                            <span class="effect-1">SHOP</span>
                                            <span class="effect-1">SHOP</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="project.html">
                                        <span class="link-effect">
                                            <span class="effect-1">PORTFOLIO</span>
                                            <span class="effect-1">PORTFOLIO</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
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
                        <div class="header-button">
                            <button type="button" class="header-cart sideMenuToggler" href="cart.html"><img src="{{ asset('dist/front/img/icon/shopping-cart.svg') }}" alt="img">
                                <span class="link-effect header-cart-text">
                                    <span class="effect-1">CART <span>(02)</span></span>
                                    <span class="effect-1">CART <span>(02)</span></span>
                                </span>
                            </button>
                            @if(Auth::guard('web')->check())
                            <a href="{{ route('dashboard') }}" class="btn">
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