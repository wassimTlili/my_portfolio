<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wassim Tlili</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
     <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">


    <!-- Bootstrap CSS -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Ionicons CSS -->
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Lightbox CSS -->
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head> 

<body id="page-top">

    <!-- Navbar Section -->
    @include('partials.navbar')

    <!-- Intro Section -->
    @include('partials.intro')

    <!-- About Section -->
    @include('partials.about')

    <!-- Services Section -->
    @include('partials.services')

    <!-- Work Section -->
    @include('partials.work')

    <!-- Contact and Footer Section -->
 
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/popper/popper.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/jquery.counterup.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/typed/typed.min.js') }}"></script>
  
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>
  
  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
