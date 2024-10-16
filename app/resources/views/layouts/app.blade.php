<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Horizon Wings') }}</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="public/assets/css/animate.min.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="public/assets/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="public/assets/css/owl.theme.default.min.css">
    <!-- navber css -->
    <link rel="stylesheet" href="public/assets/css/navber.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="public/assets/css/meanmenu.css">
    <!-- Style css -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="public/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="public/assets/img/favicon.png">

</head>

<body>
    <!-- Top -->
    @include('layouts.preloader')

    <!-- Top -->
    @include('layouts.top')

    <!--Content -->
    @yield('content')

    <!--Footer -->
    @include('layouts.footer')

    <script src="public/assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="public/assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="public/assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="public/assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="public/assets/js/wow.min.js"></script>
    <!-- aos js -->
    <script src="public/assets/js/aos.js"></script>
    <!-- Custom js -->
    <script src="public/assets/js/custom.js"></script>
    <script src="public/assets/js/add-form.js"></script>
    <script src="public/assets/js/form-dropdown.js"></script>

</body>

</html>