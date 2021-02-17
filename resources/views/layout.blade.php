<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo/favIconDynam.png" type="image/x-icon">
    <title>Dynam</title>

    <style>
         @font-face {
            font-family: 'Nexa Heavy';
            src: url("/fonts/nexa/Nexa-Heavy.otf");
        }

        @font-face {
            font-family: 'Nexa Bold';
            src: url("/fonts/nexa/Nexa-Bold.otf");
        }

        @font-face {
            font-family: 'Nexa Black';
            src: url("/fonts/nexa/Nexa-Black.otf");
        }

        @font-face {
            font-family: 'Nexa Regular';
            src: url("/fonts/nexa/Nexa\ Regular.otf");
        }

        @font-face {
            font-family: 'Barlow Bold';
            src: url("/fonts/barlow/Barlow-Bold.ttf");
        }

        @font-face {
            font-family: 'Barlow Black';
            src: url("/fonts/barlow/Barlow-Black.ttf");
        }

        @font-face {
            font-family: 'Barlow Regular';
            src: url("/fonts/barlow/Barlow-Regular.ttf");
        }

        @font-face {
            font-family: 'Barlow Light';
            src: url("/fonts/barlow/Barlow-Light.ttf");
        }
    </style>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    -->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

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
            margin-left: 2.1%;
        }

        .arrowdown:focus{
            background: transparent;
            border: none;
            color: #ffffff;
            outline: none;
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
            background-image: url(images/about/about4.jpg);
            background-size:cover;
            height: 300px;
        }

        .image-two{
            width: 39%;
            background-image: url(images/about/about2.jpg); 
            background-size:cover;
            height: 300px;
        }

        .image-three{
            width: 39%;
            background-image: url(images/about/about1.jpg); 
            background-size:cover;
            height: 300px;
        }

        .image-four{
            width: 60%;
            background-image: url(images/about/about3.jpg); 
            background-size:cover;
            height: 300px;
        }

        .au_textecorps{
            padding-top: 200px;
            padding-left: 100px;
            padding-right: 50px;
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
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container-fluid padx-8">
                <a class="navbar-brand" href="/">
                    <img src="images/logo/DynamLight.png" alt="LogoDynam" width="80" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 16px;width: 100%; padding-left: 30%;">
                        <li class="nav-item" style="width: 11%;"><a href="{{ route('home') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'home' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">HO</span>ME</a></li>
                        <li class="nav-item" style="width: 12%;"><a href="{{ route('about') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'about' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">AB</span>OUT</a></li>
                        <li class="nav-item" style="width: 16%;"><a href="{{ route('services') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'services' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">SE</span>RVICES</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('studios') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'studios' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'studios' ? 'active' : '' }}">ST</span>UDIOS</a></li>
                        <li class="nav-item" style="width: 33%;"><a href="#" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}">SA</span>LON VIRTUEL</a></li>
                        <li class="nav-item" style="width: 13%;"><a href="{{ route('contact') }}" style="text-align: right;" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CO</span>NTACT</a>
                            @if ( Request::route()->getName() != "contact")
                            <button class="dropdown-toggle arrowdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          
                            </button>
                            <div class="dropdown-menu mini-contact padx-8" aria-labelledby="dropdownMenuButton">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div style="display: flex">
                                            <div>
                                                <img src="images/contact/minibar/phone.png" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                administration@dynam.eu
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="images/contact/minibar/phone.png" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                +33 (0) 5 44 87 1564
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-0" style="margin-left:28px;">
                                        <div style="display: flex">
                                            <div>
                                                <img src="images/contact/minibar/localisation.png" alt="" width="16">
                                            </div>
                                            <div style="padding-left: 5px;">
                                                56 rue du bois, Paris, France
                                            </div>
                                        </div>
                                        <div style="display: flex">
                                            <div>
                                                <img src="images/contact/minibar/localisation.png" style="opacity: 0;" alt="" width="16">
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
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer style="background-color: #023762; color: #ffffff;">
        <div class="container-fluid py-4 padx-8">
            <div class="row">
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">About</div>
                    <div class="list-unstyled footertextedetails">
                        <li>Story</li>
                        <li>Core Team</li>
                        <li>Office</li>
                        <li>Technology</li>
                        <li>Vision</li>
                        <li>Mission</li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">Studios</div>
                    <div class="list-unstyled footertextedetails">
                        <li>Dynam Studio</li>
                        <li>Dynam Factory</li>
                        <li>D-Tech</li>
                        <li>Salon Virtuel</li>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">Social Media</div>
                    <div class="list-unstyled footertextedetails" style="line-height: 24px;">
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/facebook.png" alt="" width="16" style="padding-bottom: 4px">
                            </div>
                            <div>
                                Dynam
                            </div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/twitter.png" alt="" width="16" style="padding-bottom: 4px">
                            </div>
                            <div>
                                Dynam
                            </div>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/linkedin.png" alt="" width="16" style="padding-bottom: 4px">
                            </div>
                            <div>
                                Dynam
                            </div>
                        </li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">Contact</div>
                    <div class="list-unstyled footertextedetails" style="line-height: 24px;">
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/phone.png" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>administration@dynam.eu</div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/phone.png" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>+33 (0) 5 44 87 1564</div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/localisation.png" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>56 rue du bois, Paris</div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/localisation.png" alt="" width="16" style="padding-top: 2px;opacity: 0;">
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
                        <div class="copyright"> copyright © 2021 by dynam, designed by logia studios</div>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </div>
    </footer>
    
</body>

</html>