@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <!-- <h2>History</h2> -->

    </div>
    <!-- Bacground Image -->
    <div id="intro-carousel" class="owl-carousel">
        <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

</section><!-- #intro -->

<section id="about" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Foto About">
            </div>
            <div class="col-lg-6 content">
                <h2>Capability</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus repellendus odit fuga
                    officiis sit exercitationem, quidem eum at accusantium, quam perferendis accusamus quaerat
                    totam, distinctio blanditiis iure. Fugit et quas ad animi ducimus laudantium nam ipsa, a hic
                    corporis doloremque iusto unde tempore laboriosam blanditiis nulla? Nostrum, sint rem!</p>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="section-header">
            <h2>Philosophy</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur ipsam eligendi dolores ad illo
                sunt, voluptate est at porro perspiciatis cumque pariatur amet minus repellendus laboriosam aliquid
                ipsa exercitationem. Repellat aperiam illum iusto omnis mollitia exercitationem nulla tempore nihil,
                iure assumenda aliquam sit laudantium dicta quam vero, nemo placeat temporibus.</p>
        </div>
    </div> -->
</section><!-- #about -->
@endsection