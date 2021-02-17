@php
    
    function takeCategory($path) {
        $cat = explode("/", $path);
        return $cat[1];
    }
    
@endphp

@extends('layoutstudios')

@section('title')
D-Tech
@endsection

@section('logonavbar')
images/studios/dtech/dynamtechwhite.png
@endsection

@section('widthlogo')
110   
@endsection

@section('color')
#0BD4D1 
@endsection

@section('content')
<div class="container-fluid padx-8 bc" id="sectionAbout" style="background-image: url(images/studios/dtech/bg.jpg);color:#ffffff;" >
    <div style="padding-top: 35%; padding-bottom:5%;">
        <div class="big-texte">
            welcome<br>to the future
        </div>
        <div class="textedetails">
            New technologies at your service! D-Tech specializes in virtual reality, artificial intelligence and dev. Our mastery of modern technologies allows us to offer you renderings that satisfy all your requirements.
        </div>
    </div>   
</div>
<div class="container-fluid padx-8">
    
        <div class="titleonstudio" id="sectionTeam">TEAM</div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="base">
                        <div class="sary-team" id="bg-1">
                        </div>
                        <div class="soratra-team">
                            <div class="global">
                                <div class="st-title">
                                    VR
                                </div>
                                <div class="st-details">
                                    We master the technology of virtual reality to make you live unique experiences and discover the world from new angles.                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="base">
                        <div class="sary-team" id="bg-2">
                        </div>
                        <div class="soratra-team">
                            <div class="global">
                                <div class="st-title">
                                    IA
                                </div>
                                <div class="st-details">
                                    Our creative team masters the process of artificial intelligence to achieve any goal that tends towards automation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="base">
                        <div class="sary-team" id="bg-3">
                        </div>
                        <div class="soratra-team">
                            <div class="global">
                                <div class="st-title">
                                    DEV
                                </div>
                                <div class="st-details">
                                    Our technology enthusiasts concentrate all their know-how in the creation of applications and the development of web platforms.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('loader')
        <div id="__portfolio" class="display-none">
        <div class="titleonstudio" id="sectionPortfolio">PORTFOLIO & SERVICES</div>
        <div class="layout">
            <div class="row">
                <div class="col-12">
                    <!-- start filter navigation -->
                    <ul class="category portfolio-filter nav nav-tabs border-none portfolio-filter-tab-1 text-uppercase margin-30px-bottom sm-margin-10px-bottom xs-margin-10px-bottom">
                        <li class="nav active"><a id="__all" href="javascript:void(0);" data-filter="*" class="text-grayp">All</a></li>
                        <li class="nav"><a id="__vr" href="javascript:void(0);" data-filter=".vr" class="text-grayp">vr</a></li>
                        <li class="nav"><a id="__ia" href="javascript:void(0);" data-filter=".ia" class="text-grayp">ia</a></li>
                        <li class="nav"><a id="__dev" href="javascript:void(0);" data-filter=".dev" class="text-grayp">dev</a></li>
                    </ul>                                                                           
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="layout">
            <!-- start filter content -->
                <div class="row">
                    <div class="col-md-12 no-padding xs-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid portfolio-metro-grid work-4col hover-option5 gutter-medium lightbox-portfolio" style="position: relative;">
                                <li class="grid-sizer" style="position: absolute; left: 0%; top: 0px;"></li>
                                @foreach ($paths as $path)
                                <li class="grid-item {{ takeCategory($path) }} zoomIn" style="position: absolute; left: 0%; top: 0px; visibility: visible; animation-name: zoomIn;">                           
                                    <a class="gallery-link"  href="{{ asset('images/studios/'.$path) }}">
                                        <figure>
                                            <div class="portfolio-img">
                                                <img src="{{ asset('images/studios/'.$path) }}" alt="" data-no-retina="">
                                            </div>   
                                        </figure>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div> 
            <!-- end filter content -->
        </div>
    </div>
</div>

<script>
    $(window).load(function () {
    
        $("#__loader").addClass('display-none');
        $("#__portfolio").removeClass("display-none");
        if(window.location.href == "{{ route('dtech').'?category=vr' }}"){
            $("#__vr").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{ route('dtech').'?category=ia' }}"){
            $("#__ia").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{ route('dtech').'?category=dev' }}"){
            $("#__dev").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else {
            $("#__all").click()
        }
    });
</script>

@endsection