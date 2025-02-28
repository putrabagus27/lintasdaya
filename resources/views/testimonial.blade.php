@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <h2 data-1="testimonial"></h2>

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

<section id="testimonials" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2 data-1="testimonial"></h2>
            <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
                export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
                irure minim illum fore</p> -->
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
@endsection