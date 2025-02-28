@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <h2 data-1="h2introMechanical"></h2>

    </div>
    <!-- Bacground Image -->
    <div id="intro-carousel" class="owl-carousel">
        <!-- <div class="item" style="background-image: url('{{ asset('assets/img/intro/intro2.png')}}');"></div> -->
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/1.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/2.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/3.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/4.jpg') }}');"></div>
        <div class="item" style="background-image: url('{{ asset('assets/img/intro-carousel/5.jpg') }}');"></div>
    </div>

</section><!-- #intro -->

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
    </div>

    </div>
</section>
@endsection