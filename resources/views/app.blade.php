<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-grid.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-reboot.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-dropdown.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-select.min.css") }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.css") }}">
    <!-- Ionicons Icons -->
    <link rel="stylesheet" href="{{ asset("assets/css/ionicons.min.css") }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset("assets/fonts/main-fonts.css") }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset("assets/slick/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/slick/slick-theme.css") }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="font-sans antialiased">
@inertia

<!-- Jquery core -->
<script src={{ asset('assets/js/jquery-3.3.1.min.js') }}></script>
<script src={{ asset('assets/js/bootstrap-dropdown.min.js') }}></script>
<script src={{ asset('assets/js/bootstrap-select.min.js') }}></script>
<!-- Slick Slider Core -->
<script src={{ asset('assets/slick/slick.js') }}></script>
<!-- All Sliders Initialization -->
<script src={{ asset('assets/js/slider.js') }}></script>
<!-- Custom -->
<script src={{ asset('assets/js/common.js') }}></script>
</body>
</html>
