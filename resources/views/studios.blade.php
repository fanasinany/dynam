@extends('layout')

@section('content')
<div class="container-fluid padx-8 bc" style="background-image: url(images/studios/bg.jpg);color:#ffffff;" >
    <div class="studiotitle">Our Studios</div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 text-center animate__animated animate__fadeInDown">
            <div class="ny">
                <div style="height: 100px">
                    <img src="images/studios/dynamstudio.png" alt="" width="100">
                </div>
                <div class="texte">
                    The world of 3D : Real Estate,<br>Industry & Entertainment
                </div>
                <div>
                    <a href="{{ route('dynamstudio') }}" target="_blank" class="btn_rm">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 text-center animate__animated animate__fadeInUp">
            <div class="ny">
                <div style="height: 100px">
                    <img src="images/studios/dynamfactory.png" alt="" width="200">
                </div>
                <div class="texte">
                    Ingénierie CAD/BIM :<br>
                    plans 2D et 3D, modélisation
                </div>
                <div>
                    <a href="{{ route('dynamfactory') }}" target="_blank" class="btn_rm">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 text-center animate__animated animate__fadeInUp">
            <div class="ny">
                <div style="height: 100px">
                    <img src="images/studios/dtech.png" alt="" width="240">
                </div>
                <div class="texte">
                    Spécialiste design et animation<br>3D pour l'industrie PropTech
                </div>
                <div>
                    <a href="{{ route('dtech') }}" target="_blank" class="btn_rm">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 text-center animate__animated animate__fadeInDown">
            <div class="ny">
                <div style="height: 100px">
                    <img src="images/studios/dynamfactory.png" alt="" width="200">
                </div>
                <div class="texte">
                    Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit
                </div>
                <div>
                    <a href="{{ route('salonvirtuel') }}" target="_blank" class="btn_rm">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection