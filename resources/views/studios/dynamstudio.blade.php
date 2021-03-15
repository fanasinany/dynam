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
Dynam Studio    
@endsection

@section('logonavbar')
{{asset('images/studios/dynamstudio/dynamstudiowhite.png')}}
@endsection

@section('widthlogo')
50   
@endsection

@section('color')
#0BD4D1    
@endsection

@section('content')
<style>
.ptop10{
    padding-top: 10px;
}

.px5{
    padding-left: 5px;
    padding-right: 5px;
}
</style>
<div class="container-fluid padx-8 bc" id="sectionAbout" style="background-image: url({{asset('images/studios/dynamstudio/bg.jpg')}});color:#ffffff;" >
    <div style="padding-top: 35%; padding-bottom:5%;">
        <div class="big-texte animate__animated animate__fadeInDown" style="animation-duration: 3s;">
            @lang('dynamstudio.big-title')
        </div>
        <div class="textedetails animate__animated animate__fadeInUp" style="animation-duration: 3s;">
            @lang('dynamstudio.texte')</div>
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
                                        REAL ESTATE
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.realestate')
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
                                        INDUSTRY
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.industry')
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
                                        ENTERTAINMENT
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.entertainment')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-4" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        ANIMATION
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.animation')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div> 
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-5" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        VFX
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.vfx')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div> 
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-6" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        GAMING
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.gaming')
                                    </div>
                                </div>             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row mobilerow plr40">
                    <div class="col-lg-7">
                        <div id="bg-7" class="sary-team">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="soratra-team">           
                                <div class="global">
                                    <div class="st-title">
                                        CINEMA
                                    </div>
                                    <div class="st-details">
                                        @lang('dynamstudio.cinema')
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
        <div class="titleonstudio" id="sectionPortfolio">@lang('dynamstudio.achievements')</div>
        <div class="layout">
            <div class="row">
                <div class="col-12">
                    <!-- start filter navigation -->
                    <ul class="category portfolio-filter nav nav-tabs portfolio-filter-tab-1 border-0 text-uppercase">
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav active" id="allc"><a style="text-decoration: none" id="__all" href="javascript:void(0);" data-filter="*" class="text-grayp">All</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="mediacontentc"><a style="text-decoration: none" id="__mediacontent" href="javascript:void(0);" data-filter=".MediaContent" class="text-grayp">Media Content</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="perspectivec"><a style="text-decoration: none" id="__perspective" href="javascript:void(0);" data-filter=".Perspective" class="text-grayp">Perspective</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="axonometryc"><a style="text-decoration: none" id="__axonometry" href="javascript:void(0);" data-filter=".VisiteVirtuelleAxonométrie" class="text-grayp">Virtual tour and axonometry</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="plandemassec"><a style="text-decoration: none" id="__plandemasse" href="javascript:void(0);" data-filter=".VueAeriennePlandemasse" class="text-grayp">AERIAL VIEW AND FLOOR PLAN</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="commercialc"><a style="text-decoration: none" id="__commercial" href="javascript:void(0);" data-filter=".Commercial" class="text-grayp">commercial</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="cinemac"><a style="text-decoration: none" id="__cinema" href="javascript:void(0);" data-filter=".Cinema" class="text-grayp">cinema</a></li>
                        <li style="width:auto;padding-left:1%;padding-right:1%;" class="nav" id="gamingc"><a style="text-decoration: none" id="__gaming" href="javascript:void(0);" data-filter=".Gaming" class="text-grayp">gaming</a></li>
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

<script>
$(document).ready(function () {
  
    if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=realestate"){
        $("#__mediacontent").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=industry"){
        $("#__axonometry").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=entertainment"){
        $("#__perspective").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=animation"){
        $("#__plandemasse").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=vfx"){
        $("#__commercial").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=gaming"){
        $("#__gaming").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
        activeNav("portfolio");
    }
    else if(window.location.href == "{{url('/')}}/DynamStudio/{{app()->getLocale()}}?category=cinema"){
        $("#__cinema").click()
        $('html, body').animate({
            scrollTop: $('#sectionPortfolio').offset().top
        }, 'slow');
    }
    else {
        
    }
});

    function filterImage($ixd){
        var categs = ["all","mediacontent","perspective","axonometry","plandemasse","commercial","cinema","gaming"]
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

    $("#__mediacontent").on("click", function(){
        filterImage("mediacontent")
    })

    $("#__perspective").on("click", function(){
        filterImage("perspective")
    })

    $("#__axonometry").on("click", function(){
        filterImage("axonometry")
    })

    $("#__plandemasse").on("click", function(){
        filterImage("plandemasse")
    })

    $("#__commercial").on("click", function(){
        filterImage("commercial")
    })

    $("#__cinema").on("click", function(){
        filterImage("cinema")
    })

    $("#__gaming").on("click", function(){
        filterImage("gaming")
    })
</script>

@endsection