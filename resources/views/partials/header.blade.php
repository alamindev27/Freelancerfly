<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>{{ setting()->site_name }} Freelancerfly</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset(setting()->site_favicon) }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting()->site_favicon) }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/plugin/dropify-master/dist/css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/lc_lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/select.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/root.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/common/css/toastr.min.css')}}">



    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/user/css/responsive.css') }}">
    <script async src="../pagead2.googlesyndication.com/pagead/js/f42cf.txt?client=ca-pub-7686913957263432" crossorigin="anonymous"></script>
    @yield('styles')
</head>

<body>
    <div class="page-wraper">
