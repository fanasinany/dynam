@extends('layoutstudios')

@section('title')
Dynam Factory    
@endsection

@section('logonavbar')
images/studios/dynamfactory/dynamfactorywhite.png
@endsection

@section('widthlogo')
110   
@endsection

@section('color')
#00A7FE  
@endsection

@section('content')
<div class="container-fluid padx-8 bc" id="sectionAbout" style="background-image: url(images/studios/dynamfactory/bg.png);color:#ffffff;" >
    <div style="padding-top: 35%; padding-bottom:5%;">
        <div class="__nexaBlack" style="text-transform: uppercase;font-size: 80px;color: #ffffff;line-height: 100%;">
            all about<br>cad/bim
        </div>
        <div class="__barlowLight" style="font-size: 16px;color: #ffffff;line-height: 100%;width: 350px;padding-top: 1.5%;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eius dicta error recusandae consectetur deserunt nam cum, quos esse blanditiis?
        </div>
    </div> 
</div>
<div class="container-fluid padx-8">
    <div class="titleonstudio" id="sectionTeam">TEAM</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide" style="background-image: url(images/studios/dynamfactory/team/team1.jpg); background-size:cover;"></div>
                  <div class="swiper-slide" style="background-image: url(images/studios/dynamfactory/team/team2.jpg); background-size:cover;"></div>
                  <div class="swiper-slide" style="background-image: url(images/studios/dynamfactory/team/team3.jpg); background-size:cover;"></div>
                  
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
        <div class="col-lg-1">

        </div>
        <div class="col-lg-3">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <div style="padding-top: 230px;">
                        <div class="categorytitle">
                            SCAN TO BIM
                        </div>
                        <div class="categorytexte">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur vero quod nulla saepe nam dignissimos ad. Rem in quam assumenda?
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div style="padding-top: 230px;">
                        <div class="categorytitle">
                            CAD/BIM
                        </div>
                        <div class="categorytexte">
                            Lorem 2, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur vero quod nulla saepe nam dignissimos ad. Rem in quam assumenda?
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div style="padding-top: 230px;">
                        <div class="categorytitle">
                            ARCHITECTURE
                        </div>
                        <div class="categorytexte">
                            Lorem 3, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur vero quod nulla saepe nam dignissimos ad. Rem in quam assumenda?
                        </div>
                    </div>
                  </div>
                  
                </div>

            </div>

        </div>
    </div>
    <div class="titleonstudio" id="sectionPortfolio">PORTFOLIO & SERVICES</div>
    <div class="portfolio">
        <ul class="category">
            <li class="active_category" style="width: 80px;">ALL</li>
            <li style="width: 150px;">SCAN TO BIM</li>
            <li style="width: 110px;">CAD/BIM</li>
            <li style="width: 150px;">ARCHITECTURE</li>
        </ul>
    </div>
</div>
@endsection