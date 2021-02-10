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
        <div class="__nexaBlack" style="text-transform: uppercase;font-size: 80px;color: #ffffff;line-height: 100%;">
            welcome<br>to the future
        </div>
        <div class="__barlowLight" style="font-size: 16px;color: #ffffff;line-height: 100%;width: 350px;padding-top: 1.5%;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eius dicta error recusandae consectetur deserunt nam cum, quos esse blanditiis?
        </div>
    </div>   
</div>
<div class="container-fluid padx-8">
    <div class="titleonstudio" id="sectionTeam">TEAM</div>
    <div class="titleonstudio" id="sectionPortfolio">PORTFOLIO & SERVICES</div>
    <div class="portfolio">
        <ul class="category">
            <li class="active_category" style="width: 80px;">ALL</li>
            <li style="width: 80px;">VR</li>
            <li style="width: 80px;">IA</li>
            <li style="width: 80px;">DEV</li>
        </ul>
    </div>
</div>
@endsection