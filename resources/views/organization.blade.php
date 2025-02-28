@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <h2 data-1="organization"></h2>

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

<section id="organization">
    <div class="container mt-5">
        <div class="section-header">
            <h2 data-1="organization"></h2>
        </div>
        <div class="container mt-5">
            <div class="foto-service-img">
                <img class="imgChart" src="{{ asset('assets/img//organization/chart2.jpg') }}" alt="Foto About">
                <br>
                <!-- <img src="{{ asset('assets/img//organization/org1.jpg') }}" alt="Foto About"><br>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img//organization/org2.jpg') }}" alt="Foto About"><br>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/img//organization/org3.jpg') }}" alt="Foto About">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
@endsection