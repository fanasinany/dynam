<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo/favIconDynam.png" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    -->
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <script src="js/jquery.js"></script>
    <script src="js/swiper-bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

            <!-- POFO CSS -->
    <link rel="stylesheet" href="pofo/css/animate.css" />
    
    <!-- et line icon -->
    <link rel="stylesheet" href="pofo/css/et-line-icons.css" />
    <!-- themify icon -->
    <link rel="stylesheet" href="pofo/css/themify-icons.css">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="pofo/css/swiper.min.css">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="pofo/css/justified-gallery.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="pofo/css/magnific-popup.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="pofo/revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="pofo/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="pofo/revolution/css/navigation.css">
    <link rel="stylesheet" href="pofo/css/responsive.css" />



    <style>
        /*
        *
        * ==========================================
        * CUSTOM UTIL CLASSES
        * ==========================================
        *
        */
        
        .navbar {
            transition: all 0.4s;
            background-color: rgb(255, 255, 255, 0.1);
        }

        nav.black{
            background: rgb(0, 0, 0, 0.8);
        }
        
        .navbar .nav-link {
            color: #E3E4F1;
        }
        
        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: #fff;
            text-decoration: none;
        }
        /* Change navbar styling on scroll */
        
        
        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: #ffffff;
            text-decoration: none;
        }
        
        .nav-link span.active {
            color: #ffffff;
            border-bottom: 2px solid #ffffff;
            
        }

        .nav-item a.nav-link.active{
            color: #ffffff;
        }
        
        .navbar.active .navbar-brand {
            color: #555;
        }
        
        .padx-8 {
            padding-left: 8%;
            padding-right: 8%;
        }

        .bc{
            background-size:cover;
        }

        .bar_separator{
            border-left: 2px solid #ffffff;
            height: 30px;
        }

        .titleonstudio{
            padding-top: 60px;
            padding-bottom:40px;
            font-family:'Nexa Bold';
            color: @yield('color');
            text-align:center;
            font-size:28px;
        }

        .category{
            display: flex;
            list-style:none;
            font-size:16px;
            color: #A7A6A7;
            font-family: 'Nexa Bold';
            justify-content: center;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            border: 0;
            color: @yield('color');
        }

        .portfolio-filter-tab-1 li a:hover,
        .portfolio-filter-tab-1 li a:focus {
            background: transparent;
            color: @yield('color');
        }

        .portfolio-filter-tab-1 li.active a {
            background: transparent !important;
            color: @yield('color');
        }

        .categorytitle{
            font-size: 20px;
            font-family: 'Nexa Bold';
            color: #12131D;
        }

        .categorytexte{
            font-family: 'Barlow Light';
            color: #A7A6A7;
            padding-top:20px;
        }

        .mini-contact{
            width: 100%;
            height: 90px;
            border-radius: 0;
            border: 0;
            border-top: 1px solid #000000;
            color: #707070;
            font-family: 'Barlow Regular';
        }

        .arrowdown{
            position: absolute;
            background: transparent;
            border: 0px;
            color: #ffffff;
            margin-top: -20px;
            margin-left:  {{ Request::route()->getName() == 'dynamstudio' ? '2.45%;' : '2.05%;' }}
        }

        .arrowdown:focus{
            background: transparent;
            border: none;
            color: #ffffff;
            outline: none;
        }

        ul.category li:hover{
            cursor: pointer;
        }

        .text-grayp{
            color: #A7A6A7;
        }

        .big-texte{
            text-transform: uppercase;
            font-size: 80px;
            color: #ffffff;
            line-height: 100%;
            font-family: "Nexa Black";
        }

        .textedetails{
            font-size: 16px;
            color: #ffffff;
            line-height: 100%;
            width: 25%;
            padding-top: 1.5%;
            font-family: 'Barlow Light';
        }

        .base{
            display: flex;
            flex-direction: row;
        }

        .sary-team{
            background-size: cover;
            height: 500px;
            width: 60%;
        }

        .soratra-team{
            width: 40%;
        }

        .global{
            padding-top: 190px;
            padding-left: 15%;
        }

        .st-title{
            font-family: "Nexa Bold";
            color: #12131D;
            font-size: 20px;
        }

        .st-details{
            padding-top: 10px;
            font-family: "Barlow Light";
            color: #A7A6A7;
        }

        #bg-1{
            background-image: url('images/studios/dynamfactory/team/team1.jpg');
        }
    
        #bg-2{
            background-image: url('images/studios/dynamfactory/team/team2.jpg');      
        }

        #bg-3{
            background-image: url('images/studios/dynamfactory/team/team3.jpg');      
        }

        #bg-4{
            background-image: url('images/studios/dynamstudio/team/team4.jpg');
        }
    
        #bg-5{
            background-image: url('images/studios/dynamstudio/team/team5.jpg');      
        }

        #bg-6{
            background-image: url('images/studios/dynamstudio/team/team6.jpg');      
        }

        #bg-7{
            background-image: url('images/studios/dynamstudio/team/team7.jpg');      
        }

        .borderNav{
            width: 20px;
            border-bottom: 2px solid #ffffff;
            display: flex;
            color: #ffffff;
        }

        @media only screen and (max-width: 600px) {

            .big-texte{
                font-size: 32px;
                text-align: center;
            } 

            .textedetails{
                width: 100%;
                text-align: center;
            }

            .teamdetails{
                padding-top: 5%;
            }

            .categorytitle{
                text-align: center;
                font-size: 14px;
            }

            .titleonstudio{
                padding-top: 20px;
                padding-bottom:20px;
                font-size:20px;
            }

            .categorytexte{
                padding-top:5px;
            }

            .base{
                display: flex;
                flex-direction: column-reverse;
            }

            .global{
                padding-top: 0;
                padding-left: 0;
                padding-bottom: 10px
            }

            .soratra-team{
                width: 100%;
            }

            .sary-team{
                height: 200px;
                width: 100%;
            }

            .st-title{
                text-align: center;
                font-size: 16px;
            }

            .st-details{
                padding-top: 0px;
            }
        
        }

    </style>
    <link rel="stylesheet" href="pofo/css/style.css" />
</head>

<body>
    <!-- Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container-fluid padx-8">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="images/studios/dynamD.png" alt="LogoDynam" width="40">
                </a>
                <div class="bar_separator"></div>
                <a class="navbar-brand" href="{{ Request::url() }}">
                    <img src="@yield('logonavbar')" style="margin-left: 1rem;" alt="LogoDynam" width="@yield('widthlogo')">
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 16px;width: 100%; padding-left:35%;">
                        <li class="nav-item" style="width: 15%;"><a href="#" id="about-click" class="nav-link text-uppercase __nexaBold"><span id="spanabout" class="borderNav">ABOUT</span></a></li>
                        <li class="nav-item" style="width: 14%;"><a href="#" id="team-click" class="nav-link text-uppercase __nexaBold"><span id="spanteam" class="">TEAM</span></a></li>
                        <li class="nav-item" style="width: 56%;"><a href="#" id="portfolio-click" class="nav-link text-uppercase __nexaBold"><span id="spanportfolio" class="">PORTFOLIO</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('contact') }}" style="text-align: right;" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CO</span>NTACT</a>
                            <button class="dropdown-toggle arrowdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          
                            </button>
                            <div class="dropdown-menu mini-contact padx-8" aria-labelledby="dropdownMenuButton">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? 'images/contact/minibar/phoneb.png' : 'images/contact/minibar/phone.png' }}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                administration@dynam.eu
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? 'images/contact/minibar/phoneb.png' : 'images/contact/minibar/phone.png' }}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                +33 (0) 5 44 87 1564
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-0" style="{{ Request::route()->getName() == 'dynamstudio' ? 'margin-left:12px;' : 'margin-left:165px;' }}">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? 'images/contact/minibar/localisationb.png' : 'images/contact/minibar/localisation.png' }}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                56 rue du bois, Paris, France
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? 'images/contact/minibar/localisationb.png' : 'images/contact/minibar/localisation.png' }}" style="opacity: 0;" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;line-height:100%">
                                                Explorer Business Park,<br>Ankorondrano, Antananarivo,<br>Madagascar 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
    
    <footer>
        <div class="container-fluid py-4 padx-8">
            <p class="__barlowRegular" style="color: #A7A6A7; text-align: right;">
                designed by logia studios.
            </p>
        </div>    
    </footer>

    <script type="text/javascript">    
        const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        autoplay: {
            delay: 2750,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        });

        $("#team-click").click(function() {
            $('html,body').animate({
                scrollTop: $("#sectionTeam").offset().top},
            'slow');
            activeNav("team");
        });

        $("#portfolio-click").click(function() {
            $('html,body').animate({
                scrollTop: $("#sectionPortfolio").offset().top},
            'slow');
            activeNav("portfolio");
        });

        $("#about-click").click(function() {
            $('html,body').animate({
                scrollTop: $("#sectionAbout").offset().top},
            'slow');
            activeNav("about");
        });

        $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })

      //DynamStudios
    var categorydynamstudios = [
        "all","realestate","industry","entertainment","animation","vfx","gaming","cinema"
    ];
    
    function filterSelection(c) {
        categorydynamstudios.forEach(verifClass, c);
    }

    function verifClass(item){
        if(item == this){
            $("#"+this).addClass("active_category");
        }
        else{
            $("#"+item).removeClass("active_category");
        }
    }

    function activeNav(d){
        var navContent = ["about","team","portfolio"]
        for (let i = 0; i < navContent.length; i++) {
            if( d == navContent[i]){
                $("#span"+d).addClass("borderNav")
            }
            else{
                $("#span"+navContent[i]).removeClass("borderNav")     
            }   
        }
    }
    

    </script>

                    <!-- POFO JS -->
    <script type="text/javascript" src="pofo/js/jquery.js"></script>
    <script type="text/javascript" src="pofo/js/modernizr.js"></script>
    <script type="text/javascript" src="pofo/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="pofo/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="pofo/js/skrollr.min.js"></script>
    <script type="text/javascript" src="pofo/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="pofo/js/jquery.appear.js"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="pofo/js/bootsnav.js"></script>
    <script type="text/javascript" src="pofo/js/jquery.nav.js"></script>
    <!-- animation -->
    <script type="text/javascript" src="pofo/js/wow.min.js"></script>
    <!-- page scroll -->
    
    <!-- swiper carousel -->
    <script type="text/javascript" src="pofo/js/swiper.min.js"></script>
    <!-- counter -->
    <script type="text/javascript" src="pofo/js/jquery.count-to.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="pofo/js/jquery.stellar.js"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="pofo/js/jquery.magnific-popup.min.js"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="pofo/js/isotope.pkgd.min.js"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="pofo/js/imagesloaded.pkgd.min.js"></script>
    <!-- pull menu -->
    <!-- counter  -->
    <script type="text/javascript" src="pofo/js/counter.js"></script>
    <!-- fit video  -->
    <script type="text/javascript" src="pofo/js/jquery.fitvids.js"></script>
    <!-- equalize -->
    <script type="text/javascript" src="pofo/js/equalize.min.js"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="pofo/js/skill.bars.jquery.js"></script>
    <!-- justified gallery  -->
    <script type="text/javascript" src="pofo/js/justified-gallery.min.js"></script>
    <!-- retina -->
    <script type="text/javascript" src="pofo/js/retina.min.js"></script>
    <!-- revolution -->
    <script type="text/javascript" src="pofo/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="pofo/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
    <!--<script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="pofo/revolution/js/extensions/revolution.extension.video.min.js"></script>-->
    <!-- setting -->
    <script type="text/javascript" src="pofo/js/main.js"></script>
</body>

</html>