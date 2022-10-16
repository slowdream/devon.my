<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    @routes

    @vite([
        'resources/js/app.js',
        'resources/assets/css/style.css',
        'resources/assets/css/bootstrap-grid.css',
        'resources/assets/css/bootstrap-reboot.min.css',
        'resources/assets/css/bootstrap-dropdown.min.css',
        'resources/assets/css/bootstrap-select.min.css',
        'resources/assets/css/font-awesome.css',
        'resources/assets/css/ionicons.min.css',
        'resources/assets/fonts/main-fonts.css',
        'resources/assets/slick/slick.css',
        'resources/assets/slick/slick-theme.css',
        'resources/assets/css/style.css',
    ])

    @inertiaHead
</head>

<body class="font-sans antialiased">
@inertia

<!-- Jquery core -->
<script src='http://127.0.0.1:5174/resources/assets/js/jquery-3.3.1.min.js'></script>
<script src='http://127.0.0.1:5174/resources/assets/js/bootstrap-dropdown.min.js'></script>
<script src='http://127.0.0.1:5174/resources/assets/js/bootstrap-select.min.js'></script>
<!-- Slick Slider Core -->
<script src='http://127.0.0.1:5174/resources/assets/slick/slick.js'></script>
<!-- All Sliders Initialization -->
<script src='http://127.0.0.1:5174/resources/assets/js/slider.js'></script>
<!-- Custom -->
<script src='http://127.0.0.1:5174/resources/assets/js/common.js'></script>
</body>

</html>
