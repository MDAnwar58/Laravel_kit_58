<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('summernote/summernote-lite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
{{--    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}
    <link rel="stylesheet" href="{{ asset('css/backend_custom.css') }}">

    {{--scirpt--}}
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('script')
</head>
<body>
{{--===================    navbar start   ===================--}}

{{--=====================    navbar end   =====================--}}

@if(!Route::is('admin.login') && !Route::is('admin.register')&& !Route::is('register'))
    @include('backend.partials.nav')
@endif

<div class="admin-bg">
    <div class="row">
        @if(Route::is('admin.login'))
            <div class="col-lg-12">
                @yield('content')
            </div>
        @else
        <div class="col-lg-3">
            @include('backend.partials.sidebar')
        </div>
        <div class="col-lg-9">
            @yield('content')
        </div>
        @endif
    </div>
</div>

{{--=====================    banner start   =====================--}}
{{--=====================    banner end   =====================--}}
</body>
</html>
