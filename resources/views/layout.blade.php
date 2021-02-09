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
            background-color: rgb(255, 255, 255, 0.1);
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
        }

        .ny{
            padding-top: 30px;
            padding-bottom: 160px
        }

        .texte{
        padding-top: 20px;
        padding-bottom: 20px;
        font-size:14px;
        font-family: 'Barlow Light';
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
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav justify-content-center" style="font-size: 16px;width: 100%; padding-left: 30%;">
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('home') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'home' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">HO</span>ME</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('about') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'about' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">AB</span>OUT</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('services') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'services' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'services' ? 'active' : '' }}">SE</span>RVICES</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('studios') }}" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'studios' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'studios' ? 'active' : '' }}">ST</span>UDIOS</a></li>
                        <li class="nav-item" style="width: 25%;"><a href="#" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'salon_virtuel' ? 'active' : '' }}">SA</span>LON VIRTUEL</a></li>
                        <li class="nav-item" style="width: 15%;"><a href="{{ route('contact') }}" style="text-align: right;" class="nav-link text-uppercase __nexaBold {{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><span class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">CO</span>NTACT</a></li>
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
                            <div style="width: 25px"><i class="fab fa-facebook"></i></div>Dynam</li>
                        <li style="display: flex">
                            <div style="width: 25px"><i class="fab fa-twitter"></i></div>Dynam</li>
                        <li style="display: flex">
                            <div style="width: 25px"><i class="fab fa-linkedin-in"></i></div>Dynam</li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="__nexaBold" style="font-size: 20px">Contact</div>
                    <div class="list-unstyled __barlowRegular" style="margin-bottom: 4%;margin-top: 4%;font-size: 14px;line-height: 24px;">
                        <li style="display: flex">
                            <div style="width: 25px"><i class="far fa-envelope"></i></div>administration@dynam.eu</li>
                        <li style="display: flex">
                            <div style="width: 25px"><i class="fas fa-phone"></i></div>+33 (0) 5 44 87 1564</li>
                        <li style="display: flex">
                            <div style="width: 25px"><i class="fas fa-map-marker-alt"></i></div>
                            <div> 56 rue du bois, Paris, France <br>Explorer Business Park,<br>Ankorondrano, Antananarivo,<br>Madagascar
                            </div>
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