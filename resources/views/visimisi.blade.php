@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <h2 data-1="visimisi"></h2>

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
<section id="visi-misi">
    <div class="container mt-5">
        <div class="section-header">
            <h2 data-1="h2-visi"></h2>
            <p data-1="p-visi"></p>
        </div>
        <div class="section-header">
            <h2 data-1="h2-misi"></h2>
            <ul>
                <li>
                    <p data-1="p1-misi"></p>
                </li>
                <li>
                    <p data-1="p2-misi"></p>
                </li>
            </ul>
        </div>
        <!-- <div class="section-header">
            <h2 data-1="h2-filosofi"></h2>
            <p data-1="p-filosofi"></p>
        </div> -->
    </div>
</section>
@endsection