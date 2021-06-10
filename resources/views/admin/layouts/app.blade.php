<!doctype html>
<html class="fixed" lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Admin Template" />
    <meta name="description" content="Admin">
    <meta name="author" content="">

    <title>{{ config('app.admin') }} - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="icon" href="{{ asset('adm/images/favicon.ico')}}" type="image/png">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('adm/vendor/bootstrap/css/bootstrap.css')}}" />

    <link rel="stylesheet" href="{{asset('adm/vendor/font-awesome/css/font-awesome.css')}}" />

    <link rel="stylesheet" href="{{asset('adm/css/theme.css')}}" />
    <link rel="stylesheet" href="{{asset('adm/css/skins/default.css')}}" />

    <script src="{{asset('adm/vendor/modernizr/modernizr.js')}}"></script>
</head>
<body>
    <section class="body">

        @include('admin.layouts.blocks._header')

        <div class="inner-wrapper">
            @include('admin.layouts.blocks._aside_left')

            <section role="main" class="content-body">
                @yield('content')
            </section>
        </div>


    </section>

    @stack('modals')

    <!-- Vendor -->
    <script src="{{asset('adm/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('adm/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('adm/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('adm/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('adm/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    <script src="{{asset('adm/js/theme.js')}}"></script>

    <script src="{{asset('adm/js/theme.custom.js')}}"></script>
    <script src="{{asset('adm/js/theme.init.js')}}"></script>

    @stack('scripts')

</body>
</html>
