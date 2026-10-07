<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="EV PLUS">

    <title>@yield('title', 'EV PLUS')</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/logo.jpg') }}">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    @stack('styles')
</head>

<body class="body header-fixed">

    {{-- =========================================================
        PRELOADER
    ========================================================== --}}
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>

    {{-- =========================================================
        PAGE WRAPPER
    ========================================================== --}}
    <div id="wrapper">
        <div id="pagee" class="clearfix">

            {{-- =====================================================
                HEADER
            ====================================================== --}}
            @include('layouts.partials.header')


            {{-- =====================================================
                MAIN CONTENT
            ====================================================== --}}
            <main id="main-content">

                @yield('content')

            </main>


            {{-- =====================================================
                FOOTER
            ====================================================== --}}
            @include('layouts.partials.footer')

        </div>
    </div>


    {{-- =========================================================
        JAVASCRIPT
    ========================================================== --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/infinityslide.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('assets/js/price-ranger.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>