<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lintas Daya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo/judul.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  @include('template.topbar')

  @include('template.header')


  @yield('content')

  <!--==========================
  Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Lintas Daya</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->


  <a href="https://api.whatsapp.com/send?phone=628000000" class="icon-whatsapp-popup" target="_blank"><i class="fa fa-whatsapp"></i></a>
  <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->


  <!-- JavaScript Libraries -->
  <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('assets/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('assets/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/lib/magnific-popup/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/lib/sticky/sticky.js') }}"></script>



  <!-- Contact Form JavaScript File -->
  <!-- <script src="contactform/contactform.js"></script> -->


  <!-- Template Main Javascript File -->
  <script src="{{ asset('assets/js/bahasa.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @yield('script')
  @stack('myscript')
</body>

</html>