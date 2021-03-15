@php
    
    function takeCategory($path) {
        $cat = explode("/", $path);
        return $cat[2];
    }

    function randomColor(){
        $color = ["#8076a3","478559","#161748","#9bc400","#ffde22","#ff414e","#F3F3F3","#283747"," #3C1874","#932432","#B73225",
        "#004E7C","#591COB","#5C5F58","#DCE1E3","#DDAF94","#E8CEBF","#266150","#4F4846","#FDF8F5","#12232E","#007CC7","#4DA8DA",
        "#203647","#EEFBFB","#202020","#3F3F3F","#707070","#FFD6C","#F1B24A","#9DC88D","#4D774E","#164A41","#A3BCB6"];
        $k = array_rand($color);
        return $color[$k];
    }
    
@endphp

@extends('layoutstudios')

@section('title')
Dynam Factory    
@endsection

@section('logonavbar')
{{asset('images/studios/dynamfactory/dynamfactorywhite.png')}}
@endsection

@section('widthlogo')
110   
@endsection

@section('color')
#00A7FE  
@endsection

@section('content')
<style>
    .video-container {
        height: auto;
        width: 100%;
        position: relative;
    }
    
    .video-container video {
      width: 100%;
      height: 100%;
      position: absolute;
      object-fit: cover;
      z-index: 0;
    }
    
    /* Just styling the content of the div, the *magic* in the previous rules */
    .video-container .caption {
      z-index: 1;
      position: relative;
      text-align: center;
      color: #dc0000;
      padding: 10px;
    }

    .ptop10{
        padding-top: 10px;
    }

    .px5{
        padding-left: 5px;
        padding-right: 5px;
    }
</style>
<div class="video-container">
    <video autoplay muted loop>
        <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
    </video>
    <div class="container-fluid padx-8 bc" id="sectionAbout" style="background-image: url({{asset('images/studios/dynamfactory/thumbnailvideo.png')}});color:#ffffff;" >
        <div style="padding-top: 38.5%; padding-bottom:5%;">
            <div class="big-texte animate__animated animate__fadeInDown" style="animation-duration: 3s;">
                @lang('dynamfactory.big-title')
            </div>
            <div class="textedetails animate__animated animate__fadeInUp" style="animation-duration: 3s;">
                @lang('dynamfactory.texte')
            </div>
        </div> 
    </div>
</div>

<div class="container-fluid padx-8">
    
    <div class="titleonstudio" id="sectionTeam"></div>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-1" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        SCAN TO BIM
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamfactory.scantobim')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-2" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        CAD/BIM
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamfactory.cadbim')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-3" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        ARCHITECTURE
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamfactory.architecture')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div>                   
        </div>
        <div style="left: 0" class="swiper-button-prev"></div>
        <div style="right: 0" class="swiper-button-next"></div>
    </div>
    <div class="titleonstudio" id="sectionPortfolio">@lang('dynamfactory.achievements')</div>
        <div class="layout">
            <div class="row">
                <div class="col-12">
                    <!-- start filter navigation -->
                    <ul class="category portfolio-filter nav nav-tabs portfolio-filter-tab-1 border-0 text-uppercase">
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav active" id="allc"><a style="text-decoration: none" id="__all" href="javascript:void(0);" data-filter="*" class="text-grayp">All</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="plansc"><a style="text-decoration: none" id="__plans" href="javascript:void(0);" data-filter=".plans" class="text-grayp">plans</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="pointcloudc"><a style="text-decoration: none" id="__pointcloud" href="javascript:void(0);" data-filter=".pointcloud" class="text-grayp">point cloud</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="perspectivesc"><a style="text-decoration: none" id="__perspectives" href="javascript:void(0);" data-filter=".externalperspectives" class="text-grayp">external perspectives</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="2dplanc"><a style="text-decoration: none" id="__2dplan" href="javascript:void(0);" data-filter=".2dplan" class="text-grayp">mesh from 2d plan</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="modelrevitc"><a style="text-decoration: none" id="__modelrevit" href="javascript:void(0);" data-filter=".digitalmodelrevit" class="text-grayp">mesh from digital model revit</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="2d3dc"><a style="text-decoration: none" id="__2d3d" href="javascript:void(0);" data-filter=".2d3d" class="text-grayp">2d & 3d</a></li>
                    </ul>                                                                           
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="layout">
            <div class="row">
                @foreach ($paths as $path)
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 px5 ptop10 {{ takeCategory($path) }}">
                    <div style="background-color: {{ randomColor() }};height:250px;background-image:url({{ asset('images/studios/'.$path) }});background-size:cover;border-radius:4px;">
                        <a class="example-image-link" style="height: 250px" href="{{ asset('images/studios/'.$path) }}" data-lightbox="example-set">
                            <div style="height: 250px"></div>
                        </a>   
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        if(window.location.href == "{{url('/')}}/DynamFactory/{{app()->getLocale()}}?category=scantobim"){
            $("#__pointcloud").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{url('/')}}/DynamFactory/{{app()->getLocale()}}?category=cadbim"){
            $("#__plans").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{url('/')}}/DynamFactory/{{app()->getLocale()}}?category=architecture"){
            $("#__perspectives").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
    });

    function filterImage($ixd){
        var categs = ["all","plans","pointcloud","perspectives","2dplan","modelrevit","2d3d"]
        if($ixd == "all"){
            $("#allc").addClass("active")
            for (let i = 0; i < categs.length; i++) {
                $("."+categs[i]).show()
                $("#"+categs[i]+"c").removeClass("active")
            }
        }
        else{
            for (let i = 0; i < categs.length; i++) {
                if($ixd == categs[i]){
                    $("."+categs[i]).show()
                    $("#"+categs[i]+"c").addClass("active")
                }
                else{
                    $("."+categs[i]).hide()
                    $("#"+categs[i]+"c").removeClass("active")
                }
            }
        } 
    }

    $("#__all").on("click", function(){
        filterImage("all")
    })

    $("#__plans").on("click", function(){
        filterImage("plans")
    })

    $("#__pointcloud").on("click", function(){
        filterImage("pointcloud")
    })

    $("#__perspectives").on("click", function(){
        filterImage("perspectives")
    })

    $("#__2dplan").on("click", function(){
        filterImage("2dplan")
    })

    $("#__modelrevit").on("click", function(){
        filterImage("modelrevit")
    })

    $("#__2d3d").on("click", function(){
        filterImage("2d3d")
    })
</script>


@endsection