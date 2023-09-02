@extends('layouts.master')
@section('body-content')

@foreach ($home_page as $home)
    {!! html_entity_decode($home->content_one) !!}
    {!! html_entity_decode($home->content_two) !!}
    {!! html_entity_decode($home->content_three) !!}
@endforeach

{{-- <section class="home-page-content-one">
<div class="body d-flex flex-column justify-content-center mx-5">
    <div class="container-fluid imgContainer">
        <div class="row h-100">
            <div class="col-md-7 col-lg-7 col-12 mb-4 p-0" style="height:750px;">
                <div class="img1 d-flex align-items-end">
                        <a href="/about-us">
                        <div class="imgTxt w-100">
                            <h1 class="mainTxt">About Us</h1>
                        </div>
                        </a>
                </div>
                <div class="img1Txt"><div class="fs-5 p-4 text-white imgTxtHeading">ECOSOC brings people & issues together to promote collective action for a sustainable world</div></p></div>
            </div>

            <div class="col-lg-5 col-md-5 col-12 p-0" style="height:750px">
                <div class="row mb-4 mb-md-0 h-50" >
                    <div class="img2 d-flex align-items-end h-100 p-0">
                        <a href="/news-updates">
                        <div class="imgTxt w-100">
                            <h1 class="mainTxt">News & Updates</h1>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row h-50 p-0">
                    <div class="img3 d-flex align-items-end h-100 p-0">
                        <a href="presidents-message">
                        <div class="imgTxt w-100">
                            <h1 class="mainTxt">President's Message</h1>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-page-content-two">
    <div class="container-fluid cardContainer my-5">
        <div class="row mb-5">
            <div class="col-12 col-md-6 col-lg-4">
                <img class="w-100" src="/images/card/card1.jpg">
                <div class="card-body">
                    <div class="cardSubTxt">REPORT</div>
                    <h3 class="cardHeading">Renewables 2023 Global Status Report</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img class="w-100" src="images/card/card2.jpg">
                <div class="card-body">
                    <div class="cardSubTxt">CONFERENCE</div>
                    <h3 class="cardHeading">Elections at the IPCC 59th Session, 25-28 July</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img class="w-100" src="images/card/card3.jpg">
                <div class="card-body">
                    <div class="cardSubTxt">PRESS RELEASE</div>
                    <h3 class="cardHeading">GEF Council approves plans for 'game-changing' Global Biodiversity Framework Fund</h3>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <img class="w-100" src="images/card/card4.jpg">
                <div class="card-body">
                    <div class="cardSubTxt">STORY</div>
                    <h3 class="cardHeading">New app helps young people turn tide on plastic pollution</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img class="w-100" src="images/card/card5.jpg">
                <div class="card-body">
                    <div class="cardSubTxt">PRESS RELEASE</div>
                    <h3 class="cardHeading">INC Chair to prepare zero draft of international agreement on plastic pollution as Paris negotiations end</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img class="w-100" src="images/card/card6.jpg">
                <div class="card-body">
                    <div class="cardSubTxt">E-LEARNING</div>
                    <h3 class="cardHeading">Green Marketing Challenge</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="home-page-content-three">

</section> --}}

    @endsection





