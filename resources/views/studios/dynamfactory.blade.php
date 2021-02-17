@php
    
    function takeCategory($path) {
        $cat = explode("/", $path);
        return $cat[1];
    }
    
@endphp

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
<div class="container-fluid padx-8 bc" id="sectionAbout" style="background-image: url(images/studios/dynamfactory/bg.jpg);color:#ffffff;" >
    <div style="padding-top: 35%; padding-bottom:5%;">
        <div class="big-texte">
            all about<br>cad/bim
        </div>
        <div class="textedetails">
            Dynam Factory is the best all of building professionals. Our objective is to accompany you for all your projects by providing you with quality work in respect of your customers' deadlines.
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
                                SCAN TO BIM
                            </div>
                            <div class="st-details">
                                Our team of talented draftsmen will elaborate 2D plans for you. We specialize in modeling and master the entire BIM process for all your projects.
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
                                CAD/BIM
                            </div>
                            <div class="st-details">
                                Our team of talented draftsmen will elaborate 2D plans for you. We specialize in modeling and master the entire BIM process for all your projects.
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
                                ARCHITECTURE
                            </div>
                            <div class="st-details">
                                Our team of talented draftsmen will elaborate 2D plans for you. We specialize in modeling and master the entire BIM process for all your projects.
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
                        <li class="nav"><a id="__scantobim" href="javascript:void(0);" data-filter=".scantobim" class="text-grayp">Scan to bim</a></li>
                        <li class="nav"><a id="__cadbim" href="javascript:void(0);" data-filter=".cadbim" class="text-grayp">Cad/bim</a></li>
                        <li class="nav"><a id="__architecture" href="javascript:void(0);" data-filter=".architecture" class="text-grayp">Architecture</a></li>
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
        if(window.location.href == "{{ route('dynamfactory').'?category=scantobim' }}"){
            $("#__scantobim").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{ route('dynamfactory').'?category=cadbim' }}"){
            $("#__cadbim").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{ route('dynamfactory').'?category=architecture' }}"){
            $("#__architecture").click()
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