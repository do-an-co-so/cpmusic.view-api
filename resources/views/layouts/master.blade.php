<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <!-- Icons -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/nucleo/css/nucleo.css"
          type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/argon.min.css?v=1.2.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('LinkStyleSheet')
</head>
<body>
    @include('layouts.partials.sidenav')

    <div id="panel" class="main-content">
        @include('layouts.partials.topnav')

        <div class="container-fluid mt-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scroll-lock@3.1.3/jquery-scrollLock.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard-pro/assets/js/argon.min.js?v=1.2.0"></script>
    @yield('LinkScript')
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('styles')
    @stack('scripts')
</body>
</html>
