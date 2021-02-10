<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo/favIconDynam.png" type="image/x-icon">
    <title>Dynam</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    -->
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
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
            color: #000000;
            border-bottom: 2px solid #000000;
            width: 50%;
        }
        
        .navbar.active .navbar-brand {
            color: #555;
        }
        /* Change navbar styling on small viewports */
        
        .padx-8 {
            padding-left: 8%;
            padding-right: 8%;
        }

        .bg1{
            height: 350px;
            background-image:url(images/services/realestate.jpg);
            background-size:cover;
            position: relative;
        }

        .bg2{
            height: 350px;
            background-image:url(images/services/animation.jpg);
            background-size:cover;
            position: relative;
        }

        .bg3{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url(images/services/cinema.jpg);
            background-size:cover;
            position: relative;
        }

        .bg4{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url(images/services/architecture.jpg);
            background-size:cover;
            position: relative;
        }

        .bg5{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url(images/services/dev.jpg);
            background-size:cover;
            position: relative;
        }

        .bg6{
            height: 300px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url(images/services/industry.jpg);
            background-size:cover;
            position: relative;
        }

        .bg7{
            height: 350px;
            background-image:url(images/services/vfx.jpg);
            background-size:cover;
            position: relative;
        }

        .bg8{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url(images/services/scantobim.jpg);
            background-size:cover;
            position: relative;
        }

        .bg9{
            height: 350px;
            background-image:url(images/services/vr.jpg);
            background-size:cover;
            position: relative;
        }

        .bg10{
            height: 400px;
            background-image:url(images/services/salonvirtuel.jpg);
            background-size:cover;
            position: relative;
        }

        .bg11{
            height: 350px;
            background-image:url(images/services/entertainment.jpg);
            background-size:cover;
            position: relative;
        }

        .bg12{
            height: 350px;
            background-image:url(images/services/gaming.jpg);
            background-size:cover;
            position: relative;
        }

        .bg13{
            height: 350px;
            background-image:url(images/services/cadbim.jpg);
            background-size:cover;
            position: relative;
        }

        .bg14{
            height: 350px;
            background-image:linear-gradient( rgba(241, 241, 241, 0.3), rgba(0, 0, 0, 0.3)),url(images/services/ia.jpg);
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
            font-size:14px;"
        }

        .btn_readmore:hover,
        .btn_readmore:focus{
            background-color: #0BD4D1
        }

        .readmore{
            text-align: right;
            position: absolute;
            width: 100%;
            bottom: 0;
            padding-bottom: 30px;
            padding-right: 20px;
        }
        
    </style>
</head>

<body>
    <!-- Navbar-->
    <header>
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container-fluid padx-8">
                <a class="navbar-brand" href="/">
                    <img src="images/logo/DynamDark.png" alt="LogoDynam" width="80" height="40">
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 16px;width: 100%; padding-left: 30%;">
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('home') }}" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">HOME</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('about') }}" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">ABOUT</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('services') }}" class="nav-link text-uppercase __nexaBold" style="color: #000000"><span class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">SE</span>RVICES</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('studios') }}" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'studios' ? 'active' : '' }}">STUDIOS</span></a></li>
                        <li class="nav-item" style="width: 25%;"><a href="#" class="nav-link text-uppercase __nexaBold"><span class="{{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}">SALON VIRTUEL</span></a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('contact') }}" style="text-align: right;" class="nav-link text-uppercase __nexaBold" class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid padx-8">
        <div class="__nexaBold" style="text-align:center; font-size:28px; padding-top:3%; padding-bottom:3%;">Discover our services</div>
        <div class="row" style="padding-bottom: 4%">
            <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
                    <div class="col bg1">
                        <div class="service-title">
                            Real Estate
                        </div>
                        <div class="readmore">
                            <button class="__barlowRegular btn_readmore">Read more</button>
                        </div>
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg2">
                        <div class="service-title">
                            Animation
                        </div>
                        <div class="readmore">
                            <button class="__barlowRegular btn_readmore">Read more</button>
                        </div>
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg3">
                        <div class="service-title">
                            Cinema
                        </div>
                        <div class="readmore">
                            <button class="__barlowRegular btn_readmore">Read more</button>
                        </div> 
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg4">
                        <div class="service-title">
                            Architecture
                        </div> 
                        <div class="readmore">
                            <button class="__barlowRegular btn_readmore">Read more</button>
                        </div>    
                    </div>
                    <div style="height: 10px">

                    </div>
                    <div class="col bg5">
                        <div class="service-title">
                            Dev
                        </div>
                        <div class="readmore">
                            <button class="__barlowRegular btn_readmore">Read more</button>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
                <div class="col bg6">
                    <div class="service-title">
                        Industry
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>  
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg7">
                    <div class="service-title">
                        VFX
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div> 
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg8">
                    <div class="service-title">
                        SCAN to BIM
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg9">
                    <div class="service-title">
                        VR
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>   
                </div>
                <div style="height: 10px">
                    
                </div>
                <div class="col bg10">
                    <div class="service-title">
                        Salon Virtuel
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
                <div class="col bg11">
                    <div class="service-title">
                        Entertainment
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg12">
                    <div class="service-title">
                        Gaming
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg13">
                    <div class="service-title">
                        CAD/BIM
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>
                </div>
                <div style="height: 10px">

                </div>
                <div class="col bg14">
                    <div class="service-title">
                        IA
                    </div>
                    <div class="readmore">
                        <button class="__barlowRegular btn_readmore">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color: #023762; color: #ffffff;">
        <div class="container-fluid py-4 padx-8">
            <div class="row">
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">About</div>
                    <div class="list-unstyled __barlowRegular" style="margin-bottom: 4%;margin-top: 4%;font-size: 14px;line-height: 18px;">
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
                    <div class="list-unstyled __barlowRegular" style="margin-bottom: 4%;margin-top: 4%;font-size: 14px;line-height: 18px;">
                        <li>Dynam Studio</li>
                        <li>Dynam Factory</li>
                        <li>D-Tech</li>
                        <li>Salon Virtuel</li>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">Social Media</div>
                    <div class="list-unstyled __barlowRegular" style="margin-bottom: 4%;margin-top: 4%;font-size: 14px;line-height: 24px;">
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/facebook.png" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>
                                Dynam
                            </div>
                        </li>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/twitter.png" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>
                                Dynam
                            </div>
                        <li style="display: flex">
                            <div style="height: 25px;width: 25px;">
                                <img src="images/footer/linkedin.png" alt="" width="16" style="padding-top: 2px">
                            </div>
                            <div>
                                Dynam
                            </div>
                        </li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">Contact</div>
                    <div class="list-unstyled __barlowRegular" style="margin-bottom: 4%;margin-top: 4%;font-size: 14px;line-height: 24px;">
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
                        <p style="text-align: right;"> copyright © 2021 by dynam, designed by logia studios</p>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    
    <script>
    </script>
</body>

</html>