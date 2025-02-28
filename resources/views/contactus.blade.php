@extends('template.template')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <h2 data-1="contact"></h2>

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

<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2 data-1="contact"></h2>
            <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
                export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
                irure minim illum fore</p> -->
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

    <div class="container">
        <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Your Number Phone" data-rule="minlen:4" data-msg="Please enter your number phone" />
                    <div class="validation"></div>
                </div>
                <!-- <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div> -->
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" data-1="sendMessage"></button></div>
            </form>
            @if(Session::has('status'))
            <div class="alert alert-success mt-2">{{ Session::get('status') }}</div>
            @endif
        </div>
    </div>
</section><!-- #contact -->
@endsection