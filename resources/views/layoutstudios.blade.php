<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logo/favIconDynam.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Nexa Heavy';
            src: url("{{asset('/fonts/nexa/Nexa-Heavy.otf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Nexa Bold';
            src: url("{{asset('/fonts/nexa/Nexa-Bold.otf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Nexa Black';
            src: url("{{asset('/fonts/nexa/Nexa-Black.otf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Nexa Regular';
            src: url("{{asset('/fonts/nexa/Nexa-Regular.otf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Barlow Bold';
            src: url("{{asset('/fonts/barlow/Barlow-Bold.ttf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Barlow Black';
            src: url("{{asset('/fonts/barlow/Barlow-Black.ttf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Barlow Regular';
            src: url("{{asset('/fonts/barlow/Barlow-Regular.ttf')}}");
            font-display: swap;
        }

        @font-face {
            font-family: 'Barlow Light';
            src: url("{{asset('/fonts/barlow/Barlow-Light.ttf')}}");
            font-display: swap;
        }

        #detach-button-host{
            opacity: 0;
        }

    </style>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    -->
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>




    <style>
        /*
        *
        * ==========================================
        * CUSTOM UTIL CLASSES
        * ==========================================
        *
        */

        .plr40{
            padding-left: 40px;
            padding-right: 40px;
        }
        
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
            text-transform: uppercase;
        }

        .category{
            display: flex;
            list-style:none;
            font-size:14px;
            color: #A7A6A7;
            font-family: 'Nexa Bold';
            justify-content: center;
            padding-bottom: 20px;
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
            margin-left: 45px;
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
        }

        .soratra-team{
            width: 100%;
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
            font-size: 16px;
        }

        #bg-1{
            background-color: #71aec7;
            background-image: url({{asset('images/studios/dynamfactory/team/team1.jpg')}});
        }
    
        #bg-2{
            background-color: #71aec7;
            background-image: url('{{asset('images/studios/dynamfactory/team/team2.jpg')}}');      
        }

        #bg-3{
            background-color: #71aec7;
            background-image: url('{{asset('images/studios/dynamfactory/team/team3.jpg')}}');      
        }

        #bg-4{
            background-color: #71aec7;
            background-image: url('{{asset('images/studios/dynamstudio/team/team4.jpg')}}');
        }
    
        #bg-5{
            background-color: #71aec7;
            background-image: url('{{asset('images/studios/dynamstudio/team/team5.jpg')}}');      
        }

        #bg-6{
            background-color: #71aec7;
            background-image: url('{{asset('images/studios/dynamstudio/team/team6.jpg')}}');      
        }

        #bg-7{
            background-color: #71aec7;
            background-image: url('{{asset('images/studios/dynamstudio/team/team7.jpg')}}');      
        }

        .borderNav{
            width: 20px;
            border-bottom: 2px solid #ffffff;
            display: flex;
            color: #ffffff;
        }

        .langactive{
            color: #ffffff!important;
            text-decoration: none;
            font-family: "Nexa Regular";
        }

        .langactive:hover{
            color: #ffffff!important;
        }

        .dropdown-item{
            margin-top: 0px!important;
            padding-top: 0px!important;
        }

        .dropdown-item:hover{
            color: #ffffff!important;
            background-color: transparent!important;
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

            .mobilerow{
                flex-direction: column-reverse;
            }
        
        }

    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.7);
        width: 40px;
        height: 40px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 12px;
        top: 8px;
        font-size: 19px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }
    #return-to-top:hover i {
        color: #fff;
        top: 5px;
    }


    </style>
    
</head>

<body>
    <!-- Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top py-0" style="background-color: rgb(0, 0, 0, 0.4)">
            <div class="container-fluid padx-8">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{asset('images/studios/dynamD.png')}}" alt="LogoDynam" width="35">
                </a>
                <div class="bar_separator"></div>
                <a class="navbar-brand" href="{{ Request::url() }}">
                    <div style="width: 110px">
                        <img src="@yield('logonavbar')" style="margin-left: 1rem;" alt="LogoDynam" width="@yield('widthlogo')">
                    </div>
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 16px;width: 100%; padding-left:35%;">
                        <li class="nav-item" style="width: 15%;font-size: 14px;"><a href="/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold"><span>@lang('layoutstudio.home')</span></a></li>
                        <li class="nav-item" style="width: 15%;font-size: 14px;"><a href="#" id="about-click" class="nav-link text-uppercase __nexaBold"><span id="spanabout" class="borderNav">@lang('layoutstudio.about')</span></a></li>
                        <li class="nav-item" style="width: 56%;font-size: 14px;"><a href="#" id="portfolio-click" class="nav-link text-uppercase __nexaBold"><span id="spanportfolio" class="">@lang('layoutstudio.achievements')</span></a></li>
                        <li class="nav-item" style="width: 15%;font-size: 14px;"><a href="/contact/{{app()->getLocale()}}" style="text-align: right;" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CO</span>NTACT</a>
                            <button class="dropdown-toggle arrowdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          
                            </button>
                            <div class="dropdown-menu mini-contact padx-8" aria-labelledby="dropdownMenuButton">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? asset('images/contact/minibar/phoneb.png') : asset('images/contact/minibar/phone.png') }}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                administration@dynam.eu
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? asset('images/contact/minibar/phoneb.png') : asset('images/contact/minibar/phone.png') }}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                +33 (0) 5 44 87 1564
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-0" style="margin-left:270px;">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? asset('images/contact/minibar/localisationb.png') : asset('images/contact/minibar/localisation.png') }}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                56 rue du bois, Paris, France
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{ Request::route()->getName() == 'dynamfactory' ? asset('images/contact/minibar/localisationb.png') : asset('images/contact/minibar/localisation.png') }}" style="opacity: 0;" alt="" width="16">
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
                <div class="dropdown show" style="margin-top: -3px;border-left: #c8d6e4 2px solid;font-size: 14px;">
                    <a class="langactive dropdown-toggle" style="padding-left: 15px;text-transform:uppercase;font-size: 14px;" href="#" role="button" id="dropdownlang" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ app()->getLocale() }}
                    </a>
                  
                    <div class="dropdown-menu" style="background-color: transparent;border:none;padding-top: 0px;font-size: 14px;" aria-labelledby="dropdownlang">
                        @if (app()->getLocale() != "en")
                        <a class="dropdown-item" style="color:#e3e4f1;" href="en">EN</a>
                        @endif
                        @if (app()->getLocale() != "fr")
                        <a class="dropdown-item" style="color:#e3e4f1;" href="fr">FR</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    @yield('content')
    <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
    <footer>
        <div class="container-fluid py-4 padx-8">
            <p class="__barlowRegular" style="color: #A7A6A7; text-align: right;">
                @lang('layoutstudio.designed_by')
            </p>
        </div>    
    </footer>

    <script type="text/javascript">

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            effect: 'fade',
            fadeEffect: { crossFade: true },
            
            loop: true,

            autoplay: {
                delay: 2750,
            },

            // If we need pagination

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
    
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

            var height = $(window).scrollTop();
            if(height > 100 && height <= 1150){
                //$('nav').addClass('black');
                activeNav("about");
            }

            else if(height > 1150){
                activeNav("portfolio");
            }

            else {
                //$('nav').removeClass('black');
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
        var navContent = ["about","portfolio"]
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

                   
</body>

</html>