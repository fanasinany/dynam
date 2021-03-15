@extends('layout')

@section('content')

<style>
    .contentimg {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .bg1{
        height: 350px;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/studios/bg-dynamstudio.jpg')}});
        background-size:cover;
        position: relative;
    }

    .bg2{
        height: 350px;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/animation.jpg')}});
        background-size:cover;
        position: relative;
    }

    .bg3{
        height: 300px;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/studios/bg-dynamfactory.png')}});
        background-size:cover;
        position: relative;
    }

    .bg4{
        height: 400px;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/entertainment.jpg')}});
        background-size:cover;
        position: relative;
    }

    .bg5{
        height: 350px;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/ia.jpg')}});
        background-size:cover;
        position: relative;
    }

    .bg6{
        height: 350px;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/industry.jpg')}});
        background-size:cover;
        position: relative;
    }

    .placebtn{
        text-align: right;
        position: absolute;
        width: 100%;
        bottom: 0;
        padding-bottom: 30px;
        padding-right: 20px;
    }

    .texte-bas{
        font-size:14px;
        font-family: 'Barlow Light';
        position: absolute;
        left: 50%;
        bottom: 5%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        transition: bottom 3s ease;
        visibility: hidden;
        text-align: center;
    }

    #d_studio:hover .texte-bas
    {
        bottom: 20%;
        display: block;
        opacity: 1;
        visibility: visible;      
    }

    #d_factory:hover .texte-bas
    {
        bottom: 15%;
        display: block;
        opacity: 1;
        visibility: visible;      
    }

    #d_tech:hover .texte-bas
    {
        bottom: 20%;
        display: block;
        opacity: 1;
        visibility: visible;      
    }

    #d_salonvirtuel:hover .texte-bas
    {
        bottom: 20%;
        display: block;
        opacity: 1;
        visibility: visible;      
    }

    #d_lomay:hover .texte-bas
    {
        bottom: 20%;
        display: block;
        opacity: 1;
        visibility: visible;      
    }

    #d_w3d:hover .texte-bas
    {
        bottom: 20%;
        display: block;
        opacity: 1;
        visibility: visible;      
    }

    #d_studio,
    #d_factory,
    #d_tech,
    #d_salonviruel,
    #d_lomay,
    #d_w3d{
        position: relative;
        cursor: pointer;
    }

</style>

<div class="container-fluid padx-8 bc" style="background-image: linear-gradient( rgb(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url({{asset('images/studios/bg.jpg')}});color:#ffffff;" >
    <div class="studiotitle" style="padding-bottom: 40px;padding-top: 140px;">@lang('studios.ourstudios')</div>
    <div class="row" style="padding-bottom: 4%">
        <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
            <div class="col bg1" id="d_studio">
                <div class="contentimg">
                    <img src="{{asset('images/studios/dynamstudio.png')}}" alt="" width="80">
                </div>
                <div class="texte-bas">
                    @lang('studios.txt_dynamstudio')
                </div>
                <div class="placebtn">
                    <a href="/DynamStudio/{{app()->getLocale()}}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
            <div style="height: 10px">

            </div>
            <div class="col bg2" id="d_salonvirtuel">
                <div class="contentimg">
                    <img src="{{asset('images/studios/wave.png')}}" alt="" width="130">
                </div>
                <div class="texte-bas">
                    @lang('studios.txt_vfair')
                </div>
                <div class="placebtn">
                    <a href="{{ route('salonvirtuel') }}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
            <div class="col bg3" id="d_factory">
                <div class="contentimg">
                    <img src="{{asset('images/studios/dynamfactory.png')}}" alt="" width="160">
                </div>
                <div class="texte-bas">
                    @lang('studios.txt_dynamfactory')
                </div>
                <div class="placebtn">
                    <a href="/DynamFactory/{{app()->getLocale()}}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
            <div style="height: 10px">

            </div>
            <div class="col bg4" id="d_lomay">
                <div class="contentimg">
                    <img src="{{asset('images/studios/lomay.png')}}" alt="" width="130">
                </div>
                <div class="texte-bas">
                    @lang('studios.txt_lomay')
                </div>
                <div class="placebtn">
                    <a href="{{ route('salonvirtuel') }}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
            <div class="col bg5" id="d_tech">
                <div class="contentimg">
                    <img src="{{asset('images/studios/dtech.png')}}" alt="" width="200">
                </div>
                <div class="texte-bas">
                    @lang('studios.txt_dtech')
                </div>
                <div class="placebtn">
                    <a href="/D-Tech/{{app()->getLocale()}}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
            <div style="height: 10px">

            </div>
            <div class="col bg6" id="d_w3d">
                <div class="contentimg">
                    <img src="{{asset('images/studios/W3D.png')}}" alt="" width="90">
                </div>
                <div class="texte-bas">
                    @lang('studios.txt_w3d')
                </div>
                <div class="placebtn">
                    <a href="https://w-3d.eu" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script>

</script>
@endsection