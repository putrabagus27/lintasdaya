@extends('template.templatetest')
@section('content')
<!--==========================
    Intro Section
  ============================-->
<section id="intro">

    <div class="intro-content">
        <!-- <h2>Projects<br><span>Experience</span></h2> -->
        <h2 data-1="project"></h2>

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
<main id="id">
    <!--==========================
    Project Section
============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2 data-1="project"></h2>
                <p></p>
            </div>
            <!-- <div class="owl-carousel clients-carousel">
                <img src="{{ asset('assets/img/projectlist/project1.jpg') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project2.jpg') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project3.jpg') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project4.jpg') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project5.jpg') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project6.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project7.png') }}" alt="Foto Clients">
                <img src="{{ asset('assets/img/projectlist/project8.png') }}" alt="Foto Clients">
            </div> -->

            <div class="owl-carousel clients-carousel">
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project1.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project2.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project3.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project4.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project5.jpg') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project6.png') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project7.png') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
                <div class="custom_overlay_wrapper">
                    <img src="{{ asset('assets/img/projectlist/project8.png') }}" alt="Foto Clients">
                    <div class="custom_overlay"><span class="custom_overlay_inner">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget massa a lectus aliquet elementum.</p>
                        </span></div>
                    </a>
                </div>
            </div>


            <!--  -->
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup()">2009</button>
                            <div class="popup" id="popup">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">METIS RESTAURANT</p>
                                                </li>
                                                <li>
                                                    <p class="description">SOFITEL HOTEL</p>
                                                </li>
                                                <li>
                                                    <p class="description">JEWELRY SHOP</p>
                                                </li>
                                                <li>
                                                    <p class="description">MARGARETHA SWEETA VARIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">THE WOLAS</p>
                                                </li>
                                                <li>
                                                    <p class="description">TERAS AYUNG</p>
                                                </li>
                                                <li>
                                                    <p class="description">CURRANT RESIDENCE BALI</p>
                                                </li>
                                                <li>
                                                    <p class="description">PASAR SENI UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">ISSI VILLA KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">EXOTIC GEMS</p>
                                                </li>
                                                <li>
                                                    <p class="description">SEMINARI TUKA</p>
                                                </li>
                                                <li>
                                                    <p class="description">KIRANA VILLA</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI FOAM NUSA MEGAH BALI</p>
                                                </li>
                                                <li>
                                                    <p class="description">MITRAIS OFFICE SANUR 3RD FLOOR</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI FOAM NUSA MEGAH LOMBOK</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">METIS RESTAURANT</p>
                                                </li>
                                                <li>
                                                    <p class="description">SOFITEL HOTEL</p>
                                                </li>
                                                <li>
                                                    <p class="description">JEWELRY SHOP</p>
                                                </li>
                                                <li>
                                                    <p class="description">MARGARETHA SWEETA VARIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">THE WOLAS</p>
                                                </li>
                                                <li>
                                                    <p class="description">TERAS AYUNG</p>
                                                </li>
                                                <li>
                                                    <p class="description">CURRANT RESIDENCE BALI</p>
                                                </li>
                                                <li>
                                                    <p class="description">PASAR SENI UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">ISSI VILLA KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">EXOTIC GEMS</p>
                                                </li>
                                                <li>
                                                    <p class="description">SEMINARI TUKA</p>
                                                </li>
                                                <li>
                                                    <p class="description">KIRANA VILLA</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI FOAM NUSA MEGAH BALI</p>
                                                </li>
                                                <li>
                                                    <p class="description">MITRAIS OFFICE SANUR 3RD FLOOR</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI FOAM NUSA MEGAH LOMBOK</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup2()">2010</button>
                            <div class="popup" id="popup2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">BALI FOAM NUSA MEGAH, BALI</p>
                                                </li>
                                                <li>
                                                    <p class="description">KAMANDALU HOTEL, UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">PULLMAN SPA, KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">“W” HOTEL, KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">INDO VILLA, DAKSINA-KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">ISSI VILLA, KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">IVORY, KUTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">NAKULA BUILDING, KUTA</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">PT. BALI FOAM NUSA MEGAH</p>
                                                </li>
                                                <li>
                                                    <p class="description">KAMANDALU RESORT & SPA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. PERINDO</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. DCA</p>
                                                </li>
                                                <li>
                                                    <p class="description">INDOHOME</p>
                                                </li>
                                                <li>
                                                    <p class="description">SDB</p>
                                                </li>
                                                <li>
                                                    <p class="description">RAMAYANA & CO</p>
                                                </li>
                                                <li>
                                                    <p class="description">RAMAYANA & CO</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup2()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup3()">2011</button>
                            <div class="popup" id="popup3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">BIU-BIU VILLA, PANTAI BALANGAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">SUARGA RESORT, LABUHAN SAIT</p>
                                                </li>
                                                <li>
                                                    <p class="description">MUSEUM MARKETING, UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">MM JUICE, TEUKU UMAR</p>
                                                </li>
                                                <li>
                                                    <p class="description">GRAND JIMBARAN, JIMBARAN</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">UMAH BOEMI</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. FREDERIK</p>
                                                </li>
                                                <li>
                                                    <p class="description">BPK. HERMAWAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">ARTALENTA INDONESIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">DDM</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup3()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup4()">2012</button>
                            <div class="popup" id="popup4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">METIS RESTAURANT</p>
                                                </li>
                                                <li>
                                                    <p class="description">SOFITEL HOTEL</p>
                                                </li>
                                                <li>
                                                    <p class="description">JEWELRY SHOP</p>
                                                </li>
                                                <li>
                                                    <p class="description">MARGARETHA SWEETA VARIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PASAR SINGAKERTHA</p>
                                                </li>
                                                <li>
                                                    <p class="description">KAMANDALU RESORT & SPA LOBBY</p>
                                                </li>
                                                <li>
                                                    <p class="description">MERAH PUTIH RESTAURANT</p>
                                                </li>
                                                <li>
                                                    <p class="description">NGURAH RAI INTERNATIONAL AIRPORT</p>
                                                </li>
                                                <li>
                                                    <p class="description">DISPEND KAB. GIANYAR</p>
                                                </li>
                                                <li>
                                                    <p class="description">3V RENING BAY, NEGARA</p>
                                                </li>
                                                <li>
                                                    <p class="description">DEKANAT UNDIKSHA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PASAR UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">MIRACLE ESTETHIC</p>
                                                </li>
                                                <li>
                                                    <p class="description">WARLOKA RESORT, LABUAN BAJO</p>
                                                </li>
                                                <li>
                                                    <p class="description">DENIS HOUSE</p>
                                                </li>
                                                <li>
                                                    <p class="description">RENOVASI WISMA MANDALIKA, MATARAM</p>
                                                </li>
                                                <li>
                                                    <p class="description">SARANAM ECO RESORT</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">TUNAS JAYA SANUR</p>
                                                </li>
                                                <li>
                                                    <p class="description">KAMANDALU RESORT & SPA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. MERAH PUTIH</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. DANATEL</p>
                                                </li>
                                                <li>
                                                    <p class="description">TUNAS JAYA SANUR</p>
                                                </li>
                                                <li>
                                                    <p class="description">3V</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. ADHI KARYA</p>
                                                </li>
                                                <li>
                                                    <p class="description">TUNAS JAYA SANUR</p>
                                                </li>
                                                <li>
                                                    <p class="description">CV. ADI JAYA UTAMA</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. SAID</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. DENIS</p>
                                                </li>
                                                <li>
                                                    <p class="description">SEKAR ASRI GRAHA CIPTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">SARANAM</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup4()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup5()">2013</button>
                            <div class="popup" id="popup5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">GEDUNG MITRAIS JOGJAKARTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PABRIK BALI FOAM LOMBOK</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA ATING BAHAI</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA KWANJI, NUSA LEMBONGAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA TIEMAN, NUSA LEMBONGAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">LOTUS GOURMENT GARAGE, JIMBARAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI HEALING CENTER, UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">WISMA MANDALIKA, MATARAM</p>
                                                </li>
                                                <li>
                                                    <p class="description">HOTEL SANUR</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA LOHIA, UBUD</p>
                                                </li>
                                                <li>
                                                    <p class="description">RESTAURANT THE ABIANS</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA BUMI SEKEMBANG, GOA GAJAH</p>
                                                </li>
                                                <li>
                                                    <p class="description">MITRAIS OFFICE SANUR GEDUNG 2</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA PECATU, JIMBARAN</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">MITRAIS</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. BALI FOAM NUSA MEGAH</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. TODO SALOMON</p>
                                                </li>
                                                <li>
                                                    <p class="description">LA ARCHITECH</p>
                                                </li>
                                                <li>
                                                    <p class="description">LA ARCHITECH</p>
                                                </li>
                                                <li>
                                                    <p class="description">LA ARCHITECH</p>
                                                </li>
                                                <li>
                                                    <p class="description">TRIPLE STAR CONSTRUCTION</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. SEKAR ASRI GRAHA CIPTA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. MAS INDONESIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. BAMBOO PURE</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. KSKY</p>
                                                </li>
                                                <li>
                                                    <p class="description">SINDHU HADIPRANA</p>
                                                </li>
                                                <li>
                                                    <p class="description">MITRAIS</p>
                                                </li>
                                                <li>
                                                    <p class="description">SINDHU HADIPRANA</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup5()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup6()">2014</button>
                            <div class="popup" id="popup6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">HOTEL MELATI SANUR</p>
                                                </li>
                                                <li>
                                                    <p class="description">BUMI SEKEMBANG</p>
                                                </li>
                                                <li>
                                                    <p class="description">SPA GRAND JIMBARAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">KIDS HOUSE LOHIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">ROEMAH LANGKO, LOMBOK</p>
                                                </li>
                                                <li>
                                                    <p class="description">GARUDA WISNU KENCANA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PABRIK KARTON</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">HOTEL MELATI</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. SINDHU HADIPRANA</p>
                                                </li>
                                                <li>
                                                    <p class="description">SPA GRAND JIMBARAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. BAMBOO PURE</p>
                                                </li>
                                                <li>
                                                    <p class="description">CV. ADI JAYA UTAMA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. GARUDA ADHIMANTRA</p>
                                                </li>
                                                <li>
                                                    <p class="description">BAPAK HANDY</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup6()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup7()">2015</button>
                            <div class="popup" id="popup7">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">KLINIK KECANTIKAN DEFINE</p>
                                                </li>
                                                <li>
                                                    <p class="description">GARUDA WISNU KENCANA</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA KWANJI, NUSA LEMBONGAN</p>
                                                </li>
                                                <li>
                                                    <p class="description">MERAH PUTIH SANGSAKA CATHERING SERVICE</p>
                                                </li>
                                                <li>
                                                    <p class="description">HOTEL INDIGO</p>
                                                </li>
                                                <li>
                                                    <p class="description">MAYA UBUD RESORT</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI BIRD PARK</p>
                                                </li>
                                                <li>
                                                    <p class="description">LE BON VIVANT RESTAURANT</p>
                                                </li>
                                                <li>
                                                    <p class="description">MITRA ADI PERKASA GROUP</p>
                                                </li>
                                                <li>
                                                    <p class="description">PABRIK KARTON</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">Dr. VIVI GUIZOT</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. GARUDA ADHIMANTRA</p>
                                                </li>
                                                <li>
                                                    <p class="description">LA ARCHITECT</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. JASPER MANIFOLD</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. BALI PERKASA SUKSES</p>
                                                </li>
                                                <li>
                                                    <p class="description">MAYA UBUD RESORT</p>
                                                </li>
                                                <li>
                                                    <p class="description">BALI BIRD PARK</p>
                                                </li>
                                                <li>
                                                    <p class="description">DONA LIZARA</p>
                                                </li>
                                                <li>
                                                    <p class="description">MITRA ADI PERKASA GROUP</p>
                                                </li>
                                                <li>
                                                    <p class="description">BAPAK HANDY</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup7()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup8()">2016</button>
                            <div class="popup" id="popup8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">BEACH RESTO INDIGO</p>
                                                </li>
                                                <li>
                                                    <p class="description">PU CEILING SUMBAWA</p>
                                                </li>
                                                <li>
                                                    <p class="description">HVAC KELIKI</p>
                                                </li>
                                                <li>
                                                    <p class="description">OFFICE & FACTORY SUMBAWA</p>
                                                </li>
                                                <li>
                                                    <p class="description">BELINDA</p>
                                                </li>
                                                <li>
                                                    <p class="description">VILLA AMARIN</p>
                                                </li>
                                                <li>
                                                    <p class="description">BIKINI</p>
                                                </li>
                                                <li>
                                                    <p class="description">PU CEILING SUMBAWA</p>
                                                </li>
                                                <li>
                                                    <p class="description">MACHINE SUMBAWA</p>
                                                </li>
                                                <li>
                                                    <p class="description">INSTALASI HYDRANT PLN BALI SELATAN</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">PT. BALI PERKASA SUKSES</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. DWIPA TUNAS BUMI ABHUYUDAYA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. AWAHITA INDONESIA</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. JERRY KNECHT</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. BELINDA JAYA</p>
                                                </li>
                                                <li>
                                                    <p class="description">CV. ADI JAYA UTAMA</p>
                                                </li>
                                                <li>
                                                    <p class="description">SISTERFIELD KITCHEN</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. JERRY KNECHT</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. JERRY KNECHT</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. INDOLOK BAKTI UTAMA</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup8()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup9()">2017</button>
                            <div class="popup" id="popup9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="boxProject">
                                            <ul>
                                                <p class="titleDescription">Project Name</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">SEKOLAH PERANCIS, UMALAS</p>
                                                </li>
                                                <li>
                                                    <p class="description">HOTEL ADI DARMA</p>
                                                </li>
                                                <li>
                                                    <p class="description">NIVATA RESIDENCE</p>
                                                </li>
                                                <li>
                                                    <p class="description">MEDIUM VOLTAGE & PLN WORK, OFFICE & FACTORY SUMBAWA</p>
                                                </li>
                                                <li>
                                                    <p class="description">RUMAH TINGGAL ISKANDAR</p>
                                                </li>
                                                <li>
                                                    <p class="description">HOTEL BINTANG FLORES</p>
                                                </li>
                                                <li>
                                                    <p class="description">NUSA PENIDA BEACH RESORT</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="boxOrder">
                                            <ul>
                                                <p class="titleDescription">Ordered By</p>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p class="description">MR. FREDRIC CABOT</p>
                                                </li>
                                                <li>
                                                    <p class="description">HOTEL ADI DARMA</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. DWIPA TUNAS BUMI ABHUYUDAYA</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. JERRY KNECHT </p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. ISKANDAR GIUSTI</p>
                                                </li>
                                                <li>
                                                    <p class="description">MR. ALE SUGIARTO</p>
                                                </li>
                                                <li>
                                                    <p class="description">PT. CAVENDISH PROPERTY</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="closePopup9()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup10()">2018</button>
                            <div class="popup" id="popup10">
                                <h1>test 18</h1>
                                <button type="button" onclick="closePopup10()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup11()">2019</button>
                            <div class="popup" id="popup11">
                                <h1>test19</h1>
                                <button type="button" onclick="closePopup11()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup12()">2020</button>
                            <div class="popup" id="popup12">
                                <h1>test20</h1>
                                <button type="button" onclick="closePopup12()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup13()">2021</button>
                            <div class="popup" id="popup13">
                                <h1>test21</h1>
                                <button type="button" onclick="closePopup13()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup14()">2022</button>
                            <div class="popup" id="popup14">
                                <h1>test22</h1>
                                <button type="button" onclick="closePopup14()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="containerpopup">
                            <button type="submit" class="btn" onclick="openPopup15()">2023</button>
                            <div class="popup" id="popup15">
                                <h1>test23</h1>
                                <button type="button" onclick="closePopup15()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #clients -->
</main>
@endsection
@push('myscript')
<script>
    // var modal = document.querySelector(".modal");
    // var trigger = document.querySelector(".trigger");
    // var closeButton = document.querySelector(".close-button");

    // function toggleModal() {
    //     modal.classList.toggle("show-modal");
    // }

    // function windowOnClick(event) {
    //     if (event.target === modal) {
    //         toggleModal();
    //     }
    // }
    // trigger.addEventListener("click", toggleModal);
    // closeButton.addEventListener("click", toggleModal);
    // window.addEventListener("click", windowOnClick);
    let popup = document.getElementById('popup')
    let popup2 = document.getElementById('popup2')
    let popup3 = document.getElementById('popup3')
    let popup4 = document.getElementById('popup4')
    let popup5 = document.getElementById('popup5')
    let popup6 = document.getElementById('popup6')
    let popup7 = document.getElementById('popup7')
    let popup8 = document.getElementById('popup8')
    let popup9 = document.getElementById('popup9')
    let popup10 = document.getElementById('popup10')
    let popup11 = document.getElementById('popup11')
    let popup12 = document.getElementById('popup12')
    let popup13 = document.getElementById('popup13')
    let popup14 = document.getElementById('popup14')
    let popup15 = document.getElementById('popup15')

    //Open popup
    function openPopup() {
        popup.classList.add('open-popup')
    }

    function openPopup2() {
        popup2.classList.add('open-popup')
    }

    function openPopup3() {
        popup3.classList.add('open-popup')
    }

    function openPopup4() {
        popup4.classList.add('open-popup')
    }

    function openPopup5() {
        popup5.classList.add('open-popup')
    }

    function openPopup6() {
        popup6.classList.add('open-popup')
    }

    function openPopup7() {
        popup7.classList.add('open-popup')
    }

    function openPopup8() {
        popup8.classList.add('open-popup')
    }

    function openPopup9() {
        popup9.classList.add('open-popup')
    }

    function openPopup10() {
        popup10.classList.add('open-popup')
    }

    function openPopup11() {
        popup11.classList.add('open-popup')
    }

    function openPopup12() {
        popup12.classList.add('open-popup')
    }

    function openPopup13() {
        popup13.classList.add('open-popup')
    }

    function openPopup14() {
        popup14.classList.add('open-popup')
    }

    function openPopup15() {
        popup15.classList.add('open-popup')
    }

    //Close popup
    function closePopup() {
        popup.classList.remove('open-popup')
    }

    function closePopup2() {
        popup2.classList.remove('open-popup')
    }

    function closePopup3() {
        popup3.classList.remove('open-popup')
    }

    function closePopup4() {
        popup4.classList.remove('open-popup')
    }

    function closePopup5() {
        popup5.classList.remove('open-popup')
    }

    function closePopup6() {
        popup6.classList.remove('open-popup')
    }

    function closePopup7() {
        popup7.classList.remove('open-popup')
    }

    function closePopup8() {
        popup8.classList.remove('open-popup')
    }

    function closePopup9() {
        popup9.classList.remove('open-popup')
    }

    function closePopup10() {
        popup10.classList.remove('open-popup')
    }

    function closePopup11() {
        popup11.classList.remove('open-popup')
    }

    function closePopup12() {
        popup12.classList.remove('open-popup')
    }

    function closePopup13() {
        popup13.classList.remove('open-popup')
    }

    function closePopup14() {
        popup14.classList.remove('open-popup')
    }

    function closePopup15() {
        popup15.classList.remove('open-popup')
    }
</script>
@endpush