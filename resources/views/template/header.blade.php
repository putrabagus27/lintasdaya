<header id="header">
    <div class="container">
        <!-- Logo -->
        <div id="logo" class="pull-left">
            <!-- <h1><a href="index.html" class="scrollto"><img src="img/Logo/LogoLD.png" alt=""></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="/"><img src="{{ asset('assets/img/logo/logohd.png') }}" alt="" title="" /></a> -->
            <!-- <a href="/"><img src="{{ asset('assets/img/logo/logohdcrop.png') }}" alt="" title="" /></a> -->
            <!-- <a href="/"><img src="{{ asset('assets/img/logo/logonav2.png') }}" alt="" title="" /></a> -->
            <a href="/"><img src="{{ asset('assets/img/logo/Logoldcrop.jpg') }}" alt="" title="" /></a>
        </div>
        <!-- Navigation -->
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <!-- <li class="menu-active"><a href="#body">Home</a></li> -->
                <li class="menu-has-children"><a href="#" data-1="navAbout"></a>
                    <ul>
                        <!-- <li><a href="/history">History</a></li> -->
                        <li><a href="/visi" data-1="navVisi"></a></li>
                        <li><a href="/organization" data-1="navChart"></a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="#" data-1="navServices"></a>
                    <ul>
                        <li><a href="/plumping" data-1="navPlumbing"></a></li>
                        <!-- <li><a href="/electrical">Electrical and Electronics</a></li> -->
                        <li><a href="/mechanical" data-1="navMechanical"></a></li>
                        <li><a href="/electronic" data-1="navElectronic"></a></li>
                        <li><a href="/firegas" data-1="navFiregas"></a></li>
                    </ul>
                </li>
                <li><a href="/project" data-1="navProject"></a></li>
                <li><a href="/download" data-1="navDownload"></a></li>
                <li><a href="/testimonial" data-1="navTestimonial"></a></li>
                <li><a href="/contactus" data-1="navContact"></a></li>
                <li class="menu-has-children"><a href="#" data-1="navLanguage"></a>
                    <ul>
                        <li><a href="/" onclick="changeLanguage('en')">English</a></li>
                        <li><a href="/" onclick="changeLanguage('id')">Indonesian</a></li>
                        <li><a href="/" onclick="changeLanguage('fr')">France</a></li>
                        <li><a href="/" onclick="changeLanguage('ru')">Russia</a></li>
                        <li><a href="/" onclick="changeLanguage('jpn')">Japan</a></li>
                        <!-- <li><a href="/projecttestpopup">test popup</a></li> -->
                    </ul>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->