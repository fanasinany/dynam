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

        .langactive{
            color: #ffffff;
            text-decoration: none;
            font-family: "Nexa Regular";
        }

        .langactive:hover{
            color: #ffffff;
        }

        .dropdown-item{
            margin-top: 0px!important;
            padding-top: 0px!important;
        }

        .dropdown-item:hover{
            color: #ffffff!important;
            background-color: transparent!important;
        }
    </style>
    
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <link href="{{asset('css/bootstrap-dropdownhover.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-dropdownhover.min.js')}}"></script>

    <style type="text/css">
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

        a.btn_rm:hover{
            color: #ffffff;
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
            width: 20px;
            display: flex;
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

        .texte-adresse{
        padding-top: 40px;
        font-size:14px;
        font-family: 'Barlow Light';
        text-align: left;
        padding-left: 20%;
        }

        .btn_rm{
            font-family: "Nexa Bold";
            background-color: #4607B3;
            color: #ffffff;
            border: 0;
            padding: 10px 28px;
            text-decoration: none;
        }

        .btn-sreadmore{
            font-family: "Barlow Regular";
            background-color: transparent;
            color: #ffffff;
            border: 2px solid #0BD4D1;
            width: 33%;
            border-radius: 0;
            padding: 2px;
        }

        .btn-sreadmore:hover,
        .btn-sreadmore:focus{
            background-color: #0BD4D1;
            color: #ffffff;
            outline: none;
        }

        .ny{
            padding-top: 30px;
            padding-bottom: 160px
        }

        .la{
            padding-top: 30px;
            padding-bottom: 160px  
        }

        .texte{
        padding-top: 20px;
        padding-bottom: 20px;
        font-size:14px;
        font-family: 'Barlow Light';
        }

        .bigtexte{
            padding-top: 35%;
            text-transform: uppercase;
            font-size: 80px;
            color: #ffffff;
            font-family: 'Nexa Black';
            line-height: 100%;
        }

        .textedetails{
            font-size: 16px;
            color: #ffffff;
            line-height: 100%;
            width: 25%;
            padding-top: 1.5%;
            font-family: 'Barlow Light'
        }

        .div_btnrm{
            font-size: 16px;
            margin-top: 1.5%;
        }

        .footertextedetails{
            margin-bottom: 3%;
            margin-top: 3%;
            font-size: 14px;
            line-height: 18px;
            font-family: 'Barlow Regular';
        }

        .copyright{
            text-align: right;
        }

        .studiotitle{
            text-align:center;
            font-size:28px;
            padding-top:150px;
            padding-bottom:90px;
            font-family: 'Nexa Bold';
        }
        

        .contacttitle{
            text-align:center;
            font-size:28px;
            padding-top:150px;
            padding-bottom:90px;
            font-family: 'Nexa Bold';
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
            left: 84.1%;
            
        }

        .arrowdown:focus{
            background: transparent;
            border: none;
            color: #ffffff;
            outline: none;
        }

        .socialmediaicon{
            width: 28px;
        }

        @media only screen and (max-width: 600px) {
            .bigtexte {
                font-size: 32px;
                text-align: center;
                padding-top: 60%;
            }

            .textedetails{
                width: 100%;
                text-align: center;
            }

            .div_btnrm{
                text-align: center;
                padding-bottom: 20%;
            }

            .footertextedetails{
                margin-top: 0;
            }

            .copyright{
                text-align: left;
            }
        }


        /*about us*/

        .au_section2{
            display: flex;
        }

        .firstabout{
            width: 70%;
        }

        .divi{
            display: flex;
        }

        .secondabout{
            width: 30%;
        }

        .image-one{
            width: 60%;
            background-image: url({{asset('images/about/about4.jpg')}});
            background-size:cover;
            height: 300px;
        }

        .image-two{
            width: 39%;
            background-image: url({{asset('images/about/about2.jpg')}}); 
            background-size:cover;
            height: 300px;
        }

        .image-three{
            width: 39%;
            background-image: url({{asset('images/about/about1.jpg')}}); 
            background-size:cover;
            height: 300px;
        }

        .image-four{
            width: 60%;
            background-image: url({{asset('images/about/about3.jpg')}}); 
            background-size:cover;
            height: 300px;
        }

        .au_textecorps{
            padding-top: 200px;
            padding-left: 100px;
            padding-right: 50px;
        }

        #studioslink:hover #drpStudios{
            display: block;
        }

        #serviceslink:hover #drpServices{
            display: block;
        }
        


        @media only screen and (max-width: 1199px) {
            .ny{
                padding-bottom: 50px;
            }

            .studiotitle{
                padding-top:100px;
                padding-bottom:15px;
            }

            .firstabout{
                width: 100%;
            }

            .secondabout{
                width: 100%;
            }

            .image-one{
                width: 100%;
            }

            .image-two{
                width: 100%;
            }

            .image-three{
                width: 100%;
            }

            .image-four{
                width: 100%;
            }

            .au_section2{
                flex-direction: column;
            }

            .au_textecorps{
                padding: 20px 0px 0px 0px;
            }

            .divi{
                display: block;
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
                    <img src="{{asset('images/logo/DynamLight.png')}}" alt="LogoDynam" width="80" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 14px;width: 100%; padding-left: 25%;">
                        <li class="nav-item" style="width: 15%;"><a href="/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'home' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">@lang('layout.home')</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="/about/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'about' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">@lang('layout.about')</span></a></li>
                        <li class="nav-item dropdown" style="width: 15%;" id="serviceslink">
                            <a href="/services/{{app()->getLocale()}}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'services' ? 'active' : '' }}">
                                <span class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">@lang('layout.services')</span>
                            </a>
                            <ul class="dropdown-menu" id="drpServices" style="font-family:'Nexa Bold';font-size:12px;background-color: rgb(255, 255, 255, 0.8);border-radius: 0px;border: 0px;">
                                <li><a href="/DynamStudio/{{app()->getLocale()}}?category=realestate" target="_blank" class="dropdown-item">Real Estate</a></li>
                                <li><a href="/DynamStudio/{{app()->getLocale()}}?category=industry" target="_blank" class="dropdown-item">Industry</a></li>
                                <li><a href="/DynamStudio/{{app()->getLocale()}}?category=entertainment" target="_blank" class="dropdown-item">Entertainment</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}?category=animation" target="_blank" >Animation</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}?category=vfx" target="_blank">VFX</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}?category=gaming" target="_blank">Gaming</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}?category=cinema" target="_blank">Cinema</a></li>
                                <li><a class="dropdown-item" href="/DynamFactory/{{app()->getLocale()}}?category=scantobim" target="_blank">SCAN to BIM</a></li>
                                <li><a class="dropdown-item" href="/DynamFactory/{{app()->getLocale()}}?category=cadbim" target="_blank">CAD/BIM</a></li>
                                <li><a class="dropdown-item" href="/DynamFactory/{{app()->getLocale()}}?category=architecture" target="_blank">Architecture</a></li>
                                <li><a class="dropdown-item" href="/D-Tech/{{app()->getLocale()}}?category=vr" target="_blank">VR</a></li>
                                <li><a class="dropdown-item" href="/D-Tech/{{app()->getLocale()}}?category=ia" target="_blank">IA</a></li>
                                <li><a class="dropdown-item" href="/D-Tech/{{app()->getLocale()}}?category=dev" target="_blank">Dev</a></li>
                                <li><a class="dropdown-item" href="/DynamStudio/{{app()->getLocale()}}" target="_blank">WAVE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"  id="studioslink" style="width: 15%;">
                            <a class="nav-link text-uppercase __nexaBold" href="/studios/{{app()->getLocale()}}">
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
                        <li class="nav-item" style="width: 25%;"><a href="#" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}">@lang('layout.salonvirtuel')</span></a></li>
                        <li class="nav-item" style="width: 13%;"><a href="/contact/{{app()->getLocale()}}" style="text-align: right;" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">@lang('layout.contact')</span></a>
                            @if ( Request::route()->getName() != "contact")
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
                                                +33 (0) 5 44 87 1564
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
                                                <img src="{{asset('images/contact/minibar/localisation.png')}}" style="opacity: 0;" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;line-height:100%">
                                                Explorer Business Park,<br>Ankorondrano, Antananarivo,<br>Madagascar 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                        </li>
                    </ul>
                    <div class="dropdown show" style="margin-top: -3px;border-left: #c8d6e4 2px solid;font-size: 14px;">
                        <a class="langactive dropdown-toggle" style="padding-left: 15px;text-transform:uppercase;" href="#" role="button" id="dropdownlang" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ app()->getLocale() }}
                        </a>
                      
                        <div class="dropdown-menu" style="background-color: transparent;border:none;padding-top: 0px;" aria-labelledby="dropdownlang">
                            @if (app()->getLocale() != "en")
                            <a class="dropdown-item" style="color:#e3e4f1;font-size: 14px;" href="en">EN</a>
                            @endif
                            @if (app()->getLocale() != "fr")
                            <a class="dropdown-item" style="color:#e3e4f1;font-size: 14px;" href="fr">FR</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

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

    <script>

        new WOW().init();
        
        /*
        $("#studioslink").on("mouseover", function(){
            $("#drpStudios").css("display", "block")
        })

        $("#studioslink").on("mouseleave", function(){
            $("#drpStudios").css("display", "none")
        })
        */
        

    </script>
</body>

</html>