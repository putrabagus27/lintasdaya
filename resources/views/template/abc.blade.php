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

    <!--==========================
    Top Bar
  ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">email@gmail.com</a>
                <i class="fa fa-phone"></i> +62 xxx xxxx xxxx
            </div>
            <!-- Top Bar Right -->
            <!-- <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div> -->
        </div>
    </section>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">
            <!-- Logo -->
            <div id="logo" class="pull-left">
                <!-- <h1><a href="index.html" class="scrollto"><img src="img/Logo/LogoLD.png" alt=""></a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html"><img src="{{ asset('assets/img/logo/logonav.png') }}" alt="" title="" /></a>
            </div>
            <!-- Navigation -->
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <!-- <li class="menu-active"><a href="#body">Home</a></li> -->
                    <li class="menu-has-children"><a href="#">About Us</a><i class="fa fa-angle-down"></i>
                        <ul>
                            <li><a href="history.html">History</a></li>
                            <li><a href="visimisi.html">Visi Misi Perusahaan</a></li>
                            <li><a href="chart.html">Organization Chart</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="project.html">Project Experience</a></li>
                    <li><a href="download.html">Download</a></li>
                    <li><a href="testimoni.html">Testiomoni</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="menu-has-children"><a href="#">Languange</a><i class="fa fa-angle-down"></i>
                        <ul>
                            <li><a href="index.html" onclick="changeLanguage('en')">English</a></li>
                            <li><a href="index.html" onclick="changeLanguage('id')">Indonesia</a></li>
                            <!-- <li><a href="index.html" onclick="changeLanguage('fr')">France</a></li> -->
                            <!-- <li><a href="gambar.html">gambar</a></li> -->
                        </ul>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


    @yield('content')



    <a href="https://api.whatsapp.com/send?phone=6281772831437" class="icon-whatsapp-popup"><i class="fa fa-whatsapp"></i></a>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script src="js/bahasa.js"></script>

</body>

</html>