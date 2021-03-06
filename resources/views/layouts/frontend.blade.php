<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="E-commerce Selling Book">
        <meta name="keywords" content="Website to collect all kind of book all over around the world">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/components/util.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        @stack('styles')
    </head>

    <body>
        <!-- preLoader of Page -->
        <div id="preloder"><div class="loader"></div></div>
        <!--Responsive Menu-->
        @include('partials.hamburger_menu')
        <!--Header-->
       @component('components.header') @endcomponent
        <!--search bar area-->
        @yield('search')

        @yield('content')

        <!--Footer Area-->
        @component('components.footer') @endcomponent
        <!-- Js Plugins -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('js/mixitup.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        @include('sweetalert::alert');
        @stack('scripts')
    </body>

</html>
