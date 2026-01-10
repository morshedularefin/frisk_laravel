<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right justify-content-end rightsidetop">
        <li class="nav-link">
            <a href="{{ url('/') }}" target="_blank" class="btn btn-warning">Front End</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(Auth::guard()->user()->avatar != '')
                <img alt="image" src="{{ asset('uploads/'.Auth::guard()->user()->avatar) }}" class="rounded-circle-custom">
                @else
                <img alt="image" src="{{ asset('uploads/default.png') }}" class="rounded-circle-custom">
                @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="far fa-user"></i> Edit Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>