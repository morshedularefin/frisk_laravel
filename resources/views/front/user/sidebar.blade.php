<div class="col-lg-4 col-xl-3 ">
    <div class="cwa_dashboard_sidebar">
        <div class="cwa_dashboard_sidebar_top">
            <div class="cwa_dashboard_profile_img">
                <img id="profile_img" src="{{ asset('dist/front/img/user.png') }}" alt="" class="img-fluid w-100 h-100">
            </div>
            <h5>{{ Auth::guard('web')->user()->name }}</h5>
            <p>{{ Auth::guard('web')->user()->email }}</p>
        </div>
        <ul class="cwa_deshboard_menu">
            <li>
                <a class="{{ Request::is('user/dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a class="" href="user-profile.html">
                    <i class="fas fa-user-tie"></i> Profile
                </a>
            </li>
            <li>
                <a class="" href="user-order.html">
                    <i class="fas fa-cart-plus"></i> Order
                </a>
            </li>
            <li>
                <a class="" href="user-digital-products.html">
                    <i class="fas fa-download"></i> Digital Product
                </a>
            </li>
            <li>
                <a class="" href="user-wishlist.html">
                    <i class="fas fa-heart"></i> Wishlist
                </a>
            </li>
            <li>
                <a class="" href="user-review.html">
                    <i class="fas fa-star"></i> Reviews
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="logout-button" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-unlock-alt"></i> Log Out</a>
                </form>
            </li>
        </ul>
    </div>
</div>