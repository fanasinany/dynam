@extends('layout')

@section('content')

<style>

    .bgc0{
        background-color: #ffffff;
    }

    .missiontitle{
        font-family: 'Nexa Bold'; 
        color:#12131D; 
        font-size: 24px;
    }

    .textedetailsqq{
        color: #707070; 
        font-family: 'Barlow Light';
        padding-top: 10px;
    }

    @media (prefers-color-scheme: dark) {
        .bgc0{
            background-color: #000000;
        }

        .missiontitle{
            color: #ffffff;
        }

        .textedetailsqq{
            color: #ffffff;
        }
    }
</style>

<div class="container-fluid padx-8 bc" style="padding-bottom: 5%;background-image: url({{asset('images/about/bg.jpg')}});">
    <div class="bigtexte wow fadeInDown" data-wow-duration="3s">
        @lang('about.bigtexte')
    </div>
    <div class="textedetails wow fadeInUp" data-wow-duration="3s">
        @lang('about.texteone')
    </div>
</div>

<div class="container-fluid padx-8 bgc0">
    <div class="py-5">
        <div class="au_section2 wow bounceInUp">
            <div class="firstabout">
                <div class="divi">
                    <div class="image-one">

                    </div>
                    <div style="width: 8px;">

                    </div>
                    <div class="image-two">

                    </div>
                </div>
                <div style="display: flex;height: 8px;">
                    
                </div>
                <div class="divi">
                    <div class="image-three">

                    </div>
                    <div style="width: 8px;">

                    </div>
                    <div class="image-four">

                    </div>
                </div>
            </div>
            <div class="secondabout">
                <div class="au_textecorps">
                    <div class="missiontitle">
                        Mission
                    </div>
                    <div class="textedetailsqq">
                        @lang('about.textetwo')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
@endsection