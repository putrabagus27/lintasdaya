@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <h2 data-1="intro" class="introIndex"></h2>
        <h2 data-1="intro2" class="introIndex2"></h2>

    </div>
    <!-- Bacground Image -->
    <div id="intro-carousel" class="owl-carousel">
        <!-- style="background-image: url('{{ asset('img/big-loader.gif')}}');" -->
        <!-- <div class="item" style="background-image: url('{{ asset('assets/img/galery/galery1.jpg')}}');"></div> -->
        <!-- <div class="item" style="background-image: url('{{ asset('assets/img/galery/galery2.jpg')}}');"></div> -->
        <!-- <div class="item" style="background-image: url('{{ asset('assets/img/galery/galery3.jpg')}}');"></div> -->
        <!-- <div class="item" style="background-image: url('{{ asset('assets/img/intro/intro2.png')}}');"></div> -->
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/1.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/2.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/3.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/4.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/5.jpg') }}');"></div>
    </div>

</section><!-- #intro -->

<main id="main">

    <!--==========================
About Section
============================-->
    <section id="about" class="wow fadeInUp">
        <div class="container mt-5">
            <div class="row">


                <div class="col-lg-6 content">
                    <div class="section-header">
                        <h2 data-1="about"></h2>
                    </div>
                    <h3 data-1="h3-about"></h3>
                    <p data-1="p1-about"></p>
                </div>
                <div class="col-lg-6 about-img">
                    <img src="{{ asset('assets/img/aboutus/owner.jpg') }}" alt="Foto About">
                </div>
            </div> <br>
            <p data-1="p2-about"></p>
            <p data-1="p3-about"></p>

        </div>
    </section><!-- #about -->


    <!--==========================
Services Section
============================-->
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2 data-1="services"></h2>
                <p></p>
            </div>

            <div class="container mt-5">
                <div class="foto-service-img">
                    <img src="{{ asset('assets/img/services/services.jpg') }}" alt="Foto About">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <!-- <div class="box">
                        <h4 class="title">ABCD</h4>
                    </div> -->
                    <div class="box wow fadeInLeft">
                        <!-- <div class="icon"><i class="fa fa-picture-o"></i></div> -->
                        <h4 class="title"><a href="#" data-1="servicesPlumbing"></a></h4>
                        <ul>
                            <li>
                                <p class="description" data-1="descriptionPlumbing1"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionPlumbing2"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionPlumbing3"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionPlumbing4"></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <!-- <div class="icon"><i class="fa fa-bar-chart"></i></div> -->
                        <h4 class="title"><a href="#" data-1="servicesMechanical"></a></h4>
                        <ul>
                            <li>
                                <p class="description" data-1="descriptionMechanical1"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionMechanical2"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionMechanical3"></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <!-- <div class="icon"><i class="fa fa-bar-chart"></i></div> -->
                        <h4 class="title"><a href="#" data-1="servicesElectronic"></a></h4>
                        <ul>
                            <li>
                                <p class="description" data-1="descriptionElectronic1"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic2"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic3"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic4"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic5"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic6"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic7"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionElectronic8"></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <!-- <div class="icon"><i class="fa fa-bar-chart"></i></div> -->
                        <h4 class="title"><a href="#" data-1="servicesFiregas"></a></h4>
                        <ul>
                            <li>
                                <p class="description" data-1="descriptionFiregas1"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionFiregas2"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionFiregas3"></p>
                            </li>
                            <li>
                                <p class="description" data-1="descriptionFiregas4"></p>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

        </div>
    </section><!-- #services -->


    <!--==========================
Clients Section
============================-->
    <!-- <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="clients"></h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
                    export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
                    irure minim illum fore</p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Clients">
            </div>

        </div>
    </section> -->


    <!--==========================
    Project Section
============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="project"></h2>
                <p></p>
            </div>

            <div class="owl-carousel clients-carousel">
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project1.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 1</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project2.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 2</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project3.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 3</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project4.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 4</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project5.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 5</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project6.png') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 6</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project7.png') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 7</h4>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project8.png') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Project 8</h4>
                        </span></div>
                    </a>
                </div>
            </div>

        </div>
    </section><!-- #clients -->


    <!--==========================
Our Portfolio Section
============================-->
    <!-- <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="portfolio"></h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
                    export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
                    irure minim illum fore</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 2</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 3</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 4</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 5</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 6</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 7</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="" class="portfolio-popup">
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 8</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
    <!-- #portfolio -->


    <!--==========================
Authorized Section
============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="authorized"></h2>
                <p></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 boxPortfolio">
                    <div class="portfolio-item wow fadeInUp">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgPortfolio" src="{{ asset('assets/img/authorized/dealer1.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 1</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 boxPortfolio">
                    <div class="portfolio-item wow fadeInUp">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgPortfolio" src="{{ asset('assets/img/authorized/dealer2.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 2</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxPortfolio">
                    <div class="portfolio-item wow fadeInUp">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgPortfolio" src="{{ asset('assets/img/authorized/dealer3.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 3</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>




                <div class="col-lg-4 boxPortfolio">
                    <div class="portfolio-item wow fadeInUp">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgPortfolio" src="{{ asset('assets/img/authorized/dealer8.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 8</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-item wow fadeInUp">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgPortfolio" src="{{ asset('assets/img/authorized/dealer10.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 10</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-item wow fadeInUp">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgPortfolio" src="{{ asset('assets/img/authorized/dealer12.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #portfolio -->


    <!--==========================
Testimonials Section
============================-->
    <section id="testimonials" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="testimonial"></h2>
                <p></p>
            </div>
            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p data-1="testimonial1">
                        <!-- {{ asset('assets/img/authorized/dealer12.jpg') }} -->
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                    </p>
                    <!-- <img src="{{ asset('assets/img/no-image.png') }}" class="testimonial-img" alt="Foto Client Testimoni"> -->
                    <h3>PT. L. ARSITEKTUR INDONESIA</h3>
                    <!-- <h4>Ceo &amp; Founder</h4> -->
                </div>

                <div class="testimonial-item">
                    <p data-1="testimonial2">
                        <!-- {{ asset('assets/img/authorized/dealer12.jpg') }} -->
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                        <!-- Tempat untuk deskripsi testimoni disini -->
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                    </p>
                    <!-- <img src="{{ asset('assets/img/no-image.png') }}" class="testimonial-img" alt="Foto Client Testimoni"> -->
                    <h3>PAUL TURNER</h3>
                    <!-- <h4>Designer</h4> -->
                </div>

                <div class="testimonial-item">
                    <p data-1="testimonial3">
                        <!-- {{ asset('assets/img/authorized/dealer12.jpg') }} -->
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">

                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                    </p>
                    <!-- <img src="{{ asset('assets/img/no-image.png') }}" class="testimonial-img" alt="Foto Client Testimoni"> -->
                    <h3>METIS RESTAURANT & GALLERY </h3>
                    <!-- <h4>Store Owner</h4> -->
                </div>

                <div class="testimonial-item">
                    <p data-1="testimonial4">
                        <!-- {{ asset('assets/img/authorized/dealer12.jpg') }} -->
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">

                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                    </p>
                    <!-- <img src="{{ asset('assets/img/no-image.png') }}" class="testimonial-img" alt="Foto Client Testimoni"> -->
                    <h3>PT. BALI FOAM NUSA MEGAH</h3>
                    <!-- <h4>Freelancer</h4> -->
                </div>

                <div class="testimonial-item">
                    <p data-1="testimonial5">
                        <!-- {{ asset('assets/img/authorized/dealer12.jpg') }} -->
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">

                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                    </p>
                    <!-- <img src="{{ asset('assets/img/no-image.png') }}" class="testimonial-img" alt="Foto Client Testimoni"> -->
                    <h3>RAMA BEACH </h3>
                    <!-- <h4>Entrepreneur</h4> -->
                </div>

                <div class="testimonial-item">
                    <p data-1="testimonial6">
                        <!-- {{ asset('assets/img/authorized/dealer12.jpg') }} -->
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">

                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
                    </p>
                    <!-- <img src="{{ asset('assets/img/no-image.png') }}" class="testimonial-img" alt="Foto Client Testimoni"> -->
                    <h3>CHARLES & LAURENCE WALTZ</h3>
                    <!-- <h4>Entrepreneur</h4> -->
                </div>

            </div>

        </div>
    </section><!-- #testimonials -->


    <!--==========================
Call To Action Section
============================-->
    <!-- <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Call To Action</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section> -->
    <!-- #call-to-action -->


    <!--==========================
Our Team Section
============================-->
    <!-- <section id="team" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="team"></h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Team"></div>
                        <div class="details">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Team"></div>
                        <div class="details">
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Team"></div>
                        <div class="details">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/no-image.png') }}" alt="Foto Team"></div>
                        <div class="details">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->


    <!--==========================
Our Gallery Section
============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="galery"></h2>
                <p></p>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery1.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 1</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery2.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 2</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery3.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 3</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery4.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 4</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery5.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 5</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery6.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 6</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery7.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 7</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery8.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 8</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img/galery/galery9.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 9</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//galery/galery10.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 10</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//galery/galery11.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 11</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 boxGalery">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//galery/galery12.png') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//galery/galery13.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//galery/galery14.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//galery/galery15.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//organization/org1.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//organization/org2.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="portfolio-item">
                        <!-- <a href="#" class="portfolio-popup"> -->
                        <img class="imgGalery" src="{{ asset('assets/img//organization/org3.jpg') }}" alt="Foto Portfolio">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <!-- <h2 class="wow fadeInUp">Portfolio Item 12</h2> -->
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #portfolio -->


    <!--==========================
Contact Section
============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="contact"></h2>
                <p></p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3 data-1="addressContact"></h3>
                        <address>Jl. Tukad Citarum Gang I no. 7B, Kel. Renon, Kec. Denpasar Selatan, Kota Denpasar, Bali</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3 data-1="phoneContact"></h3>
                        <p><a href="tel:+155895548855">0361 - 238055</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3 data-1="emailContact"></h3>
                        <p><a href="mailto:info@example.com">mail@lintasdaya.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Maps -->
        <div class="container mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.055753935281!2d115.23221787446353!3d-8.686248288462918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2410ebd20e817%3A0x6dced3256e8417a6!2sLintas%20Daya%2C%20CV!5e0!3m2!1sid!2sid!4v1716521845441!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </section><!-- #contact -->

</main>
@endsection
@push('myscript')
<script>
    new WOW().init();
</script>
@endpush