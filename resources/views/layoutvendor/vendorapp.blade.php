<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIWO - doubleten Event Organizer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/doubleten_logo.png')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Table CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="https://partner.weddingku.com/assets/css/register.css" rel="stylesheet" type="text/css">
  <link href="https://partner.weddingku.com/assets/css/pro.css?v=0.7282373" rel="stylesheet" type="text/css">
  <link href="https://partner.weddingku.com/assets/css/base.css?v=0.7282373" rel="stylesheet" type="text/css">
  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/vendorcss.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/tes.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/cusrom.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/table.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Hidayah - v4.2.0
  * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  

  <!-- ======= Hero Section ======= -->
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('layouts.header')
  <div class="d-flex" id="wrapper">
    
    @include('layoutvendor.sidebar')

    <div id="page-content-wrapper">

        @yield('content')
    </div>

    
  </div>
  @include('layouts.footer')
  <!-- Vendor JS Files -->
  <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>
  
    <!-- Core theme JS-->
    <script src="{{url('assets/js/vendorjs.js')}}"></script>

</body>

</html>