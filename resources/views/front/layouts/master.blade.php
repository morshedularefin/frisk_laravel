<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Frisk - Creative Agency Laravel Script') }}</title>
    <meta name="description" content="Frisk - Creative Agency Laravel Script">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/front/img/favicons/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap" rel="stylesheet">

    @include('front.layouts.styles')

</head>

<body class="{{ Request::is('home-4') ? 'bg-title' : '' }}">
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    @include('front.layouts.sidemenu_cart')
    
    @include('front.layouts.mobile_menu')

    @include('front.layouts.header')

    @yield('main_content')
    
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    @include('front.layouts.scripts')

    @if(session('success'))
    <script>
        iziToast.show({
            icon: 'fas fa-check-circle',
            iconColor: '#28a745',
            color: 'green',
            position: 'topRight',
            message: '{{ session('success') }}',
            timeout: 5000,
        });
    </script>
    @endif

    @if( !request()->routeIs('login') && !request()->routeIs('register') && !request()->routeIs('password.request') && !request()->routeIs('password.reset') )

    @if(session('error'))
    <script>
        iziToast.show({
            icon: 'fas fa-times-circle',
            iconColor: '#dc3545',
            color: 'red',
            position: 'topRight',
            message: '{{ session('error') }}',
            timeout: 5000,
        });
    </script>
    @endif

    @if ($errors->any())
    <script>
        iziToast.show({
            icon: 'fas fa-times-circle',
            iconColor: '#dc3545',
            color: 'red',
            position: 'topRight',
            message: '{{ $errors->first() }}',
            timeout: 5000,
        });
    </script>
    @endif

    @endif
</body>

</html>