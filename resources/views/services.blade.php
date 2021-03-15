<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logo/favIconDynam.png')}}" type="image/x-icon">
    <title>Dynam</title>
    <style>
        @font-face {
            font-family: 'Nexa Heavy';
            src: url(" {{asset('fonts/nexa/Nexa-Heavy.otf')}} ");
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

        .socialmediaicon{
            width: 28px;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
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
            background-color: #ffffff;
        }
        
        .navbar .nav-link {
            color: #707070;
        }

        .footertextedetails{
            margin-bottom: 3%;
            margin-top: 3%;
            font-size: 14px;
            line-height: 18px;
            font-family: 'Barlow Regular';
        }
        
        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: #000000;
            text-decoration: none;
        }
        /* Change navbar styling on scroll */
        
        .navbar.active {
            background: #000000;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar.active .nav-link {
            color: #555;
        }
        
        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: #000000;
            text-decoration: none;
        }
        
        .nav-link span.active {
            width: 20px;
            display: flex;
            color: #000000;
            border-bottom: 2px solid #000000;
        }
        
        .navbar.active .navbar-brand {
            color: #555;
        }

        #studioslink:hover #drpStudios{
            display: block;
        }
        /* Change navbar styling on small viewports */
        
        .padx-8 {
            padding-left: 8%;
            padding-right: 8%;
        }

        .bg1{
            height: 350px;
            background-image:url({{asset('images/services/realestate.jpg')}} );
            background-size:cover;
            position: relative;
        }

        .bg2{
            height: 350px;
            background-image:url({{asset('images/services/animation.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg3{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/cinema.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg4{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/architecture.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg5{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/dev.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg6{
            height: 300px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/industry.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg7{
            height: 350px;
            background-image:url({{asset('images/services/vfx.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg8{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/scantobim.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg9{
            height: 350px;
            background-image:url({{asset('images/services/vr.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg10{
            height: 400px;
            background-image:url({{asset('images/services/salonvirtuel.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg11{
            height: 350px;
            background-image:url({{asset('images/services/entertainment.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg12{
            height: 350px;
            background-image:linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/gaming.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg13{
            height: 350px;
            background-image:url({{asset('images/services/cadbim.jpg')}});
            background-size:cover;
            position: relative;
        }

        .bg14{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url({{asset('images/services/ia.jpg')}});
            background-size:cover;
            position: relative;
        }

        .service-title{
            font-family: 'Nexa Bold';
            font-size: 28px;
            color: #ffffff;
            padding-top:20px;
            padding-left:20px;
        }

        .btn_readmore{
            background-color:rgba(0, 0, 0, 0);
            border-radius:0;
            border: 2px solid #0BD4D1;
            width:33%;
            color:#ffffff;
            padding: 2px;
            font-size:14px;
        }

        .btn_readmore:hover,
        .btn_readmore:focus{
            background-color: #0BD4D1;
            color: #ffffff;
            outline: none;
        }

        .readmore{
            text-align: right;
            position: absolute;
            width: 100%;
            bottom: 0;
            padding-bottom: 30px;
            padding-right: 20px;
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
            color: #000000;
            margin-top: -20px;
            left: 84.1%;
        }

        .arrowdown:focus{
            background: transparent;
            border: none;
            color: #000000;
            outline: none;
        }

        .discoverS{
            text-align:center;
            font-size:24px;
            padding-top:130px;
            padding-bottom:3%; 
            color: #12131D;
        }

        .ggNight{
            color: #000000;
        }

        .nav-item a.nav-link.active{
            color: #000000;
        }

        .langactive{
            color: #000000;
            text-decoration: none;
            font-family: "Nexa Regular";
        }

        .langactive:hover{
            color: #000000;
        }

        .dropdown-item{
            margin-top: 0px!important;
            padding-top: 0px!important;
        }

        .dropdown-item:hover{
            color: #000000!important;
            background-color: transparent!important;
        }

        .copyright{
            text-align: right;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: black;
            }

            .discoverS{
                text-align:center;
                font-size:24px;
                padding-top:130px;
                padding-bottom:3%; 
                color: #ffffff;
            }

            .navbar{
                background-color: #000000;
            }

            .navbar .nav-link {
                color: #ffffff;
            }

            .navbar .nav-link:hover {
                color: #bdbcbc;
            }

            .navbar .nav-link .active{
                color: #ffffff;
            }

            .ggNight{
                color: #ffffff;
            }

            .nav-link span.active {
                color: #ffffff;
                border-bottom: 2px solid #ffffff;
                width: 50%;
            }
            
        }
        
    </style>
</head>

<body>
    <!-- Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top py-0">
            <div class="container-fluid padx-8">
                <a class="navbar-brand" href="/">
                    <img id="imageid" class="imgLogo" alt="LogoDynam" width="80" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 14px;width: 100%; padding-left: 25%;">
                        <li class="nav-item" style="width: 15%;"><a href="/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">@lang('layout.home')</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="/about/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">@lang('layout.about')</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="/services/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold ggNight"><span class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">@lang('layout.services')</span></a></li>
                        <li class="nav-item dropdown" style="width: 15%;" id="studioslink">
                            <a href="/studios/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold">
                                <span class="{{ Request::route()->getName() == 'studios' ? 'active' : '' }}">STUDIOS</span>
                            </a>
                            <ul class="dropdown-menu" id="drpStudios" style="font-family:'Nexa Bold';font-size:12px;background-color: rgb(255, 255, 255, 0.8);border-radius: 0px;border: 0px;">
                                <li><a href="/DynamStudio/{{app()->getLocale()}}" target="_blank" class="dropdown-item">Dynam Studio</a></li>
                                <li><a href="/DynamFactory/{{app()->getLocale()}}" target="_blank" class="dropdown-item">Dynam Factory</a></li>
                                <li><a href="/D-Tech/{{app()->getLocale()}}" target="_blank" class="dropdown-item">D-Tech</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}" target="_blank" >Wave</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}">Lomay</a></li>
                            </ul>
                        </li>
                        <li class="nav-item" style="width: 25%;"><a href="#" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}">@lang('layout.salonvirtuel')</span></a></li>
                        <li class="nav-item" style="width: 13%;"><a href="/contact/{{app()->getLocale()}}" style="text-align: right;" class="nav-link text-uppercase __nexaBold" class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CONTACT</a>
                            <button class="dropdown-toggle arrowdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          
                            </button>
                            <div class="dropdown-menu mini-contact padx-8" aria-labelledby="dropdownMenuButton">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{asset('images/contact/minibar/phone.png')}}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                bdelamarre@dynam.eu
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{asset('images/contact/minibar/phone.png')}}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                +261 (0) 32 48 315 79
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{asset('images/contact/minibar/phone.png')}}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                +33 (0) 6 11 94 5624
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-0" style="margin-left:94px;">
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{asset('images/contact/minibar/localisation.png')}}" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                56 rue du bois, Paris, France
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="{{asset('images/contact/minibar/localisation.png')}}" alt="" width="16">
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
                    <div class="dropdown show" style="margin-top: -3px;border-left: #c8d6e4 2px solid;font-size: 14px;">
                        <a class="langactive dropdown-toggle" style="padding-left: 15px;text-transform:uppercase;" href="#" role="button" id="dropdownlang" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ app()->getLocale() }}
                        </a>
                      
                        <div class="dropdown-menu" style="background-color: transparent;border:none;padding-top: 0px;font-size: 14px" aria-labelledby="dropdownlang">
                            @if (app()->getLocale() != "en")
                            <a class="dropdown-item" style="color:#2c2c2c;" href="en">EN</a>
                            @endif
                            @if (app()->getLocale() != "fr")
                            <a class="dropdown-item" style="color:#2c2c2c;" href="fr">FR</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid padx-8">
        <div class="__nexaBold discoverS">@lang('services.title')</div>
        <div class="row" style="padding-bottom: 4%">
            <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
                    <div class="col bg1">
                        <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                            Real Estate
                        </div>
                        <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                            <a href="/DynamStudio/{{app()->getLocale()}}?category=realestate" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                        </div>
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg2">
                        <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                            Animation
                        </div>
                        <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                            <a href="/DynamStudio/{{app()->getLocale()}}?category=animation" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                        </div>
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg3">
                        <div class="service-title">
                            Cinema
                        </div>
                        <div class="readmore">
                            <a href="/DynamStudio/{{app()->getLocale()}}?category=cinema" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                        </div> 
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg4">
                        <div class="service-title">
                            Architecture
                        </div> 
                        <div class="readmore">
                            <a href="/DynamFactory/{{app()->getLocale()}}?category=architecture" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                        </div>    
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg5">
                        <div class="service-title">
                            Dev
                        </div>
                        <div class="readmore">
                            <a href="/D-Tech/{{app()->getLocale()}}?category=dev" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
                <div class="col bg6">
                    <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                        Industry
                    </div>
                    <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                        <a href="/DynamStudio/{{app()->getLocale()}}?category=industry" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>  
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg7">
                    <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                        VFX
                    </div>
                    <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                        <a href="/DynamStudio/{{app()->getLocale()}}?category=vfx" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div> 
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg8">
                    <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                        SCAN to BIM
                    </div>
                    <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                        <a href="/DynamFactory/{{app()->getLocale()}}?category=scantobim" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg9">
                    <div class="service-title">
                        VR
                    </div>
                    <div class="readmore">
                        <a href="/D-Tech/{{app()->getLocale()}}?category=vr" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>   
                </div>
                <div style="height: 10px">
                    
                </div>
                <div class="col bg10">
                    <div class="service-title">
                        WAVE
                    </div>
                    <div class="readmore">
                        <a href="" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
                <div class="col bg11">
                    <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                        Entertainment
                    </div>
                    <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                        <a href="/DynamStudio/{{app()->getLocale()}}?category=entertainment" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg12">
                    <div class="service-title animate__animated animate__flash" style="animation-duration: 1s">
                        Gaming
                    </div>
                    <div class="readmore animate__animated animate__flash" style="animation-duration: 1s">
                        <a href="/DynamStudio/{{app()->getLocale()}}?category=gaming" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg13">
                    <div class="service-title">
                        CAD/BIM
                    </div>
                    <div class="readmore">
                        <a href="/DynamFactory/{{app()->getLocale()}}?category=cadbim" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg14">
                    <div class="service-title">
                        IA
                    </div>
                    <div class="readmore">
                        <a href="/D-Tech/{{app()->getLocale()}}?category=ia" target="_black" class="btn __barlowRegular btn_readmore">@lang('services.readmore')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color: #023762; color: #ffffff;">
        <div class="container-fluid py-4 padx-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="__nexaBold" style="font-size: 20px">Studios</div>
                    <div class="list-unstyled footertextedetails">
                        <li><a href="/DynamStudio/{{app()->getLocale()}}" target="_blank" style="color: #ffffff;text-decoration:none;">Dynam Studio</a></li>
                        <li><a href="/DynamFactory/{{app()->getLocale()}}" target="_blank" style="color: #ffffff;text-decoration:none;">Dynam Factory</a></li>
                        <li><a href="/D-Tech/{{app()->getLocale()}}" target="_blank" style="color: #ffffff;text-decoration:none;">D-Tech</a></li>
                        <li><a href="" target="_blank" style="color: #ffffff;text-decoration:none;">@lang('layout.salonvirtuel')</a></li>
                        <li><a href="" target="_blank" style="color: #ffffff;text-decoration:none;">Lomay</a></li>

                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-4">
                    <div class="__nexaBold" style="font-size: 20px">@lang('layout.socialmedia')</div>
                    <div class="footertextedetails" style="line-height: 24px; display:flex">
                        <div class="socialmediaicon">
                            <a href="https://www.instagram.com" target="_blank" style="color: #ffffff;text-decoration:none;"><img src="{{asset('images/footer/instagram.png')}}" alt="" width="16" style="padding-bottom: 4px"></a>
                        </div>
                        <div class="socialmediaicon">
                            <a href="https://www.linkedin.com" target="_blank" style="color: #ffffff;text-decoration:none;"><img src="{{asset('images/footer/linkedin.png')}}" alt="" width="16" style="padding-bottom: 4px"></a>
                        </div class="socialmediaicon">
                        <div>
                            <a href="https://www.youtube.com" target="_blank" style="color: #ffffff;text-decoration:none;"><img src="{{asset('images/footer/youtube.png')}}" alt="" width="16" style="padding-bottom: 4px"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-2">
                    <div class="__nexaBold" style="font-size: 20px">Contact</div>
                    <div class="list-unstyled footertextedetails" style="line-height: 24px;">
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="{{asset('images/footer/email.png')}}" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div><a href="mailto:bdelamarre@dynam.eu" target="_blank" style="color: #ffffff;text-decoration:none;">bdelamarre@dynam.eu</a></div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="{{asset('images/footer/phone.png')}}" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>+261 (0) 32 48 315 79</div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="{{asset('images/footer/phone.png')}}" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>+33 (0) 6 11 94 5624</div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="{{asset('images/footer/localisation.png')}}" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>25 rue de Ponthieu 75008 Paris</div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="{{asset('images/footer/localisation.png')}}" alt="" width="16" style="padding-top: 2px;">
                            </div>
                            <div style="line-height: 100%">Explorer Business Park,<br>Ankorondrano,<br>
                                Antananarivo, Madagascar </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid padx-8">
            <div class="border-color-medium-dark-gray border-top " style="border-color: #E3E4F1">
                <div class="row">
                    <!-- start copyright -->
                    <div class="col-md-12 col-xs-12 __barlowRegular py-3" style="font-size: 14px;">
                        <div class="copyright"> @lang('layout.copyright')</div>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript">

    testMode();

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            testMode();
    });

    function testMode(){
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.getElementById("imageid").src="{{asset('images/logo/DynamLight.png')}}";
        }
        else {
            document.getElementById("imageid").src="{{asset('images/logo/DynamDark.png')}}";
        }
    }
    </script>
</body>

</html>