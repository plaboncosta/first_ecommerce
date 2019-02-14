
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name', 'Ecommerce') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend') }}/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/default.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/responsive.css">
</head>

<body>