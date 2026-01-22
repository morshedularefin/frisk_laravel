<!--==============================
Mobile Menu
============================== -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-area">
        <button class="menu-toggle"><i class="fas fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('dist/front/img/logo.svg') }}" alt="Ovation"></a>
        </div>
        <div class="mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="javascript:void;">Home</a>
                    <ul class="sub-menu">
                        <li class="active"><a href="{{ url('/') }}">Digital Agency</a></li>
                        <li><a href="{{ route('home_2') }}">Creative Agency</a></li>
                        <li><a href="{{ route('home_3') }}">Design Studio</a></li>
                        <li><a href="{{ route('home_4') }}">Modern Agency</a></li>
                        <li><a href="{{ route('home_5') }}">Startup Agency</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void;">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('about') }}">About Page</a></li>
                        <li><a href="{{ route('services') }}">Service Page</a></li>
                        <li><a href="{{ route('team_members') }}">Team Members</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing Page</a></li>
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="{{ route('faq') }}">FAQ Page</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('shop') }}">Shop</a>
                </li>
                <li>
                    <a href="{{ route('portfolios') }}">Portfolio</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-wrap">
            <h6>27 Division St, New York,</h6>
            <h6>NY 10002, USA</h6>
        </div>
        <div class="sidebar-wrap">
            <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
            <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
        </div>
        <div class="social-btn style3">
            <a href="https://www.facebook.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                </span>
            </a>
            <a href="https://instagram.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                </span>
            </a>
            <a href="https://twitter.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                </span>
            </a>
            <a href="https://dribbble.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                </span>
            </a>
        </div>
    </div>
</div>