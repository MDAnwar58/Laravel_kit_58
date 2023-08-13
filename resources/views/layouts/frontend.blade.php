<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Kits - 58 - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.highlight.css') }}">
    <link rel="stylesheet" href="{{ asset('summernote/summernote-lite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
{{--    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}
    <link rel="stylesheet" href="{{ asset('css/frontend_custom.css') }}">

    {{--scirpt--}}
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.highlight.js') }}"></script>
    <script src="{{ asset('summernote/summernote-lite.min.js') }}"></script>
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    @yield('script')
</head>
<body>
{{--===================    navbar start   ===================--}}
@if(!Route::is('login') && !Route::is('register')&& !Route::is('register'))
    @include('frontend.partials.nav')
@endif
{{--=====================    navbar end   =====================--}}


{{--=====================    banner start   =====================--}}
@yield('content')
{{--=====================    banner end   =====================--}}

{{--=====================    footer start   =====================--}}
<div class="footer-bg">
    <div class="row">
        <div class="col-md-12 text-center">
            <span>Created by@ <span class="name_span">MD ANWAR SAYEED</span> <span class="number_span">01918725999</span></span>
        </div>
    </div>
</div>
{{--=====================    footer end   =====================--}}
</body>
</html>
