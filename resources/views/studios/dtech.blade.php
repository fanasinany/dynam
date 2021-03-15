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
D-Tech
@endsection

@section('logonavbar')
{{asset('images/studios/dtech/dynamtechwhite.png')}}
@endsection

@section('widthlogo')
110   
@endsection

@section('color')
#0BD4D1 
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
        <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
    </video>
    <div class="container-fluid padx-8 bc" id="sectionAbout" style="color:#ffffff;background-image:url({{ asset('images/studios/dtech/videothumbnail.jpg') }})" >
        <div style="padding-top: 38.5%; padding-bottom:5%;">
            <div class="big-texte animate__animated animate__fadeInDown" style="animation-duration: 3s;">
                @lang('dtech.big-title')
            </div>
            <div class="textedetails animate__animated animate__fadeInUp" style="animation-duration: 3s;">
                @lang('dtech.texte')
            </div>
        </div>   
    </div>
</div>

<div class="container-fluid padx-8" id="contentbe">
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
                                        <div class="st-title">VR</div>
                                        <div class="st-details">
                                            @lang('dtech.vr')
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
                                        <div class="st-title">IA</div>
                                        <div class="st-details">
                                            @lang('dtech.ia')
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
                                        <div class="st-title">DEV</div>
                                        <div class="st-details">
                                            @lang('dtech.dev')
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

        <div id="__portfolio">
        <div class="titleonstudio" id="sectionPortfolio">@lang('dtech.achievements')</div>
        <div class="layout">
            <div class="row">
                <div class="col-12">
                    <!-- start filter navigation -->
                    <ul class="category portfolio-filter nav nav-tabs portfolio-filter-tab-1 border-0 text-uppercase">
                        <li style="width:auto;padding-left:3%;padding-right:3%;" id="allc" class="nav active"><a style="text-decoration: none" id="__all" href="javascript:void(0);" data-filter="*" class="text-grayp">All</a></li>
                        <li style="width:auto;padding-left:3%;padding-right:3%;" id="vrc" class="nav"><a style="text-decoration: none" id="__vr" href="javascript:void(0);" data-filter=".vr" class="text-grayp">vr</a></li>
                        <li style="width:auto;padding-left:3%;padding-right:3%;" id="iac" class="nav"><a style="text-decoration: none" id="__ia" href="javascript:void(0);" data-filter=".ia" class="text-grayp">ia</a></li>
                        <li style="width:auto;padding-left:3%;padding-right:3%;" id="devc" class="nav"><a style="text-decoration: none" id="__dev" href="javascript:void(0);" data-filter=".dev" class="text-grayp">dev</a></li>
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
                        <a class="example-image-link" style="height: 250px" href="{{ asset('images/studios/'.$path) }}" data-lightbox="{{ takeCategory($path) }}">
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
        if(window.location.href == "{{url('/')}}/D-Tech/{{app()->getLocale()}}?category=vr"){
            $("#__vr").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{url('/')}}/D-Tech/{{app()->getLocale()}}?category=ia"){
            $("#__ia").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }
        else if(window.location.href == "{{url('/')}}/D-Tech/{{app()->getLocale()}}?category=dev"){
            $("#__dev").click()
            $('html, body').animate({
                scrollTop: $('#sectionPortfolio').offset().top
            }, 'slow');
            activeNav("portfolio");
        }

    });

    lightbox.option({
      'resizeDuration': 1,
      'showImageNumberLabel': false,
      'imageFadeDuration': 0,
      'alwaysShowNavOnTouchDevices': true,
      'wrapAround': true
    })


    function filterImage($ixd){
        var categs = ["all","dev","ia","vr"]
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

    $("#__dev").on("click", function(){
        filterImage("dev")
    })

    $("#__ia").on("click", function(){
        filterImage("ia")
    })

    $("#__vr").on("click", function(){
        filterImage("vr")
    })
</script>

@endsection