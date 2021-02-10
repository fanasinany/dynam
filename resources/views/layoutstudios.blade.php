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

        .active_category{
            color: @yield('color');
        }

        .categorytitle{
            font-size: 20px;
            font-family: 'Nexa Bold';
        }

        .categorytexte{
            font-family: 'Barlow Light';
            color: #A7A6A7;
            padding-top:20px;
        }

        .swiper-container {

            height: 600px;
        }

        

    </style>
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
                        <li class="nav-item" style="width: 15%;"><a href="#" id="about-click" class="nav-link text-uppercase __nexaBold">ABOUT</a></li>
                        <li class="nav-item" style="width: 14%;"><a href="#" id="team-click" class="nav-link text-uppercase __nexaBold">TEAM</a></li>
                        <li class="nav-item" style="width: 56%;"><a href="#" id="portfolio-click" class="nav-link text-uppercase __nexaBold">PORTFOLIO</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('contact') }}" style="text-align: right;" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CO</span>NTACT</a></li>
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
            delay: 2000,
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
        });

        $("#portfolio-click").click(function() {
            $('html,body').animate({
            scrollTop: $("#sectionPortfolio").offset().top},
        'slow');
        });

        $("#about-click").click(function() {
            $('html,body').animate({
            scrollTop: $("#sectionAbout").offset().top},
        'slow');
        });

        $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
    </script>
</body>

</html>