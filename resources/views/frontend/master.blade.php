<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title','e-commerce (electronic commerce or EC)')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{URL::to('frontend/assets/css/style.min.css')}}">
</head>
<body>
<div class="page-wrapper">
@include('frontend.layouts.header')

    <main class="main">
        {{--slider--}}
        @include('frontend.slide.slider')

        @yield('contant')
    </main><!-- End .main -->

@include('frontend.layouts.footer')

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="{{URL::to('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{URL::to('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::to('frontend/assets/js/plugins.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{URL::to('frontend/assets/js/main.min.js')}}"></script>
</body>
</html>