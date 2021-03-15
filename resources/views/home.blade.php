@extends('layout')

@section('content')
<div class="container-fluid padx-8 bc" style="padding-bottom: 5%;background-image: url({{asset('images/home/banner.jpg')}});" >
    <div class="bigtexte wow fadeInDown" data-wow-duration="3s">
        @lang('home.gtone')<br>@lang('home.gttwo')
    </div>
    <div class="textedetails wow fadeIn">
        @lang('home.petittexte')
    </div>
    <div class="div_btnrm wow fadeInUp" data-wow-duration="3s">
        <a href="{{ route('about') }}" class="btn btn-lg __nexaBold" style="background-color: #4607B3;color: #ffffff;border-radius: 0px; padding-left: 3%;padding-right: 3%;">@lang('home.readmore')</a>
    </div>
</div>
@endsection