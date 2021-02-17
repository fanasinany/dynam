@php
    
    function takeCategory($path) {
        $cat = explode("/", $path);
        return $cat[1];
    }
    
@endphp

@extends('layoutstudios')

@section('title')
Dynam Studio    
@endsection

@section('logonavbar')
images/studios/dynamstudio/dynamstudiowhite.png
@endsection

@section('widthlogo')
50   
@endsection

@section('color')
#0BD4D1    
@endsection

@section('content')
<div class="container-fluid padx-8 bc" id="sectionAbout" style="background-image: url(images/studios/dynamstudio/bg.jpg);color:#ffffff;" >
    <div style="padding-top: 35%; padding-bottom:5%;">
        <div class="big-texte">
            anything<br>can be created
        </div>
        <div class="textedetails">
            No limit to creation at DYNAM STUDIO! Your animation studio specializes in big projects such as movies and video games.        </div>
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
                                REAL ESTATE
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
                            </div>
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
                                INDUSTRY
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
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
                                ENTERTAINMENT
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="base">
                    <div class="sary-team" id="bg-4">
                    </div>
                    <div class="soratra-team">
                        <div class="global">
                            <div class="st-title">
                                ANIMATION
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="base">
                    <div class="sary-team" id="bg-5">
                    </div>
                    <div class="soratra-team">
                        <div class="global">
                            <div class="st-title">
                                VFX
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="base">
                    <div class="sary-team" id="bg-6">
                    </div>
                    <div class="soratra-team">
                        <div class="global">
                            <div class="st-title">
                                GAMING
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="base">
                    <div class="sary-team" id="bg-7">
                    </div>
                    <div class="soratra-team">
                        <div class="global">
                            <div class="st-title">
                                CINEMA
                            </div>
                            <div class="st-details">
                                A passionate team is a team that wins! The Dynam Studio team is composed of talented people who put all their knowledge to realize your most ambitious projects in animation.
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
                        <li class="nav"><a id="__realestate" href="javascript:void(0);" data-filter=".realestate" class="text-grayp">Real estate</a></li>
                        <li class="nav"><a id="__industry" href="javascript:void(0);" data-filter=".industry" class="text-grayp">Industry</a></li>
                        <li class="nav"><a id="__entertainment" href="javascript:void(0);" data-filter=".entertainment" class="text-grayp">Entertainment</a></li>
                        <li class="nav"><a id="__animation" href="javascript:void(0);" data-filter=".animation" class="text-grayp">Animation</a></li>
                        <li class="nav"><a id="__vfx" href="javascript:void(0);" data-filter=".vfx" class="text-grayp">vfx</a></li>
                        <li class="nav"><a id="__gaming" href="javascript:void(0);" data-filter=".gaming" class="text-grayp">gaming</a></li>
                        <li class="nav"><a id="__cinema" href="javascript:void(0);" data-filter=".cinema" class="text-grayp">cinema</a></li>
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
    if(window.location.href == "{{ route('dynamstudio').'?category=realestate' }}"){
        $("#__realestate").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{ route('dynamstudio').'?category=industry' }}"){
        $("#__industry").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{ route('dynamstudio').'?category=entertainment' }}"){
        $("#__entertainment").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{ route('dynamstudio').'?category=animation' }}"){
        $("#__animation").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{ route('dynamstudio').'?category=vfx' }}"){
        $("#__vfx").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{ route('dynamstudio').'?category=gaming' }}"){
        $("#__gaming").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{ route('dynamstudio').'?category=cinema' }}"){
        $("#__cinema").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
    }
    else {
        $("#__all").click()
    }
});
</script>

@endsection