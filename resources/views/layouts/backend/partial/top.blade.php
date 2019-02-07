<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/vendor/linearicons/style.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/demo.css">
    @stack('css')
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/backend') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/backend') }}/img/favicon.png">
</head>

<body>