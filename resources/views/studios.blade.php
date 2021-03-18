@extends('layout')

@section('content')

<style>
    .bg1{
        height: 350px;
        background-size:cover;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/studios/bg-dynamstudio.jpg')}});
    }

    .bg2{
        height: 350px;
        background-size:cover;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/animation.jpg')}});
    }

    .bg3{
        height: 300px;
        background-size:cover;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/studios/bg-dynamfactory.png')}});
    }

    .bg4{
        height: 400px;
        background-size:cover;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/entertainment.jpg')}});
    }

    .bg5{
        height: 350px;
        background-size:cover;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/ia.jpg')}});
    }

    .bg6{
        height: 350px;
        background-size:cover;
        background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{asset('images/services/industry.jpg')}});
    }

    .placebtn{
        text-align: right;
        position: absolute;
        width: 100%;
        bottom: 0;
        padding-bottom: 30px;
        padding-right: 20px;
    }

    .rect {
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        position: relative;
        cursor: pointer;
    }
    
    .rect:hover p {
        opacity: 1;
        margin-bottom: 20px;
    }
    

    
    .rect p {
        text-align: center;
        margin-top: 10px;
        margin-bottom: -60px;
        opacity: 0;
        transition: all .15s ease-in;
        font-size:14px;
        font-family: 'Barlow Light';
    }

</style>

<div class="container-fluid padx-8 bc" style="background-image: linear-gradient( rgb(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url({{asset('images/studios/bg.jpg')}});color:#ffffff;" >
    <div class="studiotitle" style="padding-bottom: 40px;padding-top: 140px;">@lang('studios.ourstudios')</div>
    <div class="row" style="padding-bottom: 4%">
        <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
            <div class="col bg1 rect">
                <div class="image">
                    <img src="{{asset('images/studios/dynamstudio.png')}}" alt="" width="80">
                </div>
                <p>
                    @lang('studios.txt_dynamstudio')
                </p>
                <div class="placebtn">
                    <a href="/DynamStudio/{{app()->getLocale()}}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
            <div style="height: 10px">

            </div>
            <div class="col bg2 rect">
                <div class="image">
                    <img src="{{asset('images/studios/wave.png')}}" alt="" width="130">
                </div>
                <p>
                    @lang('studios.txt_vfair')
                </p>
                <div class="placebtn">
                    <a href="{{ route('salonvirtuel') }}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
            <div class="col bg3 rect">
                <div class="image">
                    <img src="{{asset('images/studios/dynamfactory.png')}}" alt="" width="160">
                </div>
                <p>
                    @lang('studios.txt_dynamfactory')
                </p>
                <div class="placebtn">
                    <a href="/DynamFactory/{{app()->getLocale()}}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
            <div style="height: 10px">

            </div>
            <div class="col bg4 rect">
                <div class="image">
                    <img src="{{asset('images/studios/lomay.png')}}" alt="" width="130">
                </div>
                <p>
                    @lang('studios.txt_lomay')
                </p>
                <div class="placebtn">
                    <a href="{{ route('salonvirtuel') }}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="padding-left: 5px;padding-right:5px;">
            <div class="col bg5 rect">
                <div class="image">
                    <img src="{{asset('images/studios/dtech.png')}}" alt="" width="200">
                </div>
                <p>
                    @lang('studios.txt_dtech')
                </p>
                <div class="placebtn">
                    <a href="/D-Tech/{{app()->getLocale()}}" target="_blank" class="btn btn-sreadmore">@lang('studios.readmore')</a>
                </div>
            </div>
            <div style="height: 10px">

            </div>
            <div class="col bg6 rect">
                <div class="image">
                    <img src="{{asset('images/studios/W3D.png')}}" alt="" width="90">
                </div>
                <p>
                    @lang('studios.txt_w3d')
                </p>
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