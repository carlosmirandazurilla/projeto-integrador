
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html lang="pt">
    
<head>
<title> Exchange </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Mercado Exchage Marketplace">
<meta name="viewport" content="width=device-width, initial-scale=1">


<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Exchange') }}</title>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/app2/bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ asset('css/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/slick-1.8.0/slick.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/main_styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">

<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('css/popper.js') }}" defer></script>
<script src="{{ asset('css/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('css/greensock/TweenMax.min.js') }}" defer></script>
<script src="{{ asset('css/greensock/TimelineMax.min.js') }}" defer></script>
<script src="{{ asset('css/scrollmagic/ScrollMagic.min.js') }}" defer></script>
<script src="{{ asset('css/greensock/animation.gsap.min.js') }}" defer></script>
<script src="{{ asset('css/greensock/ScrollToPlugin.min.js') }}" defer></script>
<script src="{{ asset('css/OwlCarousel2-2.2.1/owl.carousel.js') }}" defer></script>
<script src="{{ asset('css/slick-1.8.0/slick.js') }}" defer></script>
<script src="{{ asset('css/easing/easing.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>   

</head>

<body>

<div id="container" class="">
		@include('layouts.header')
		@yield('content')
		@include('layouts.footer')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>