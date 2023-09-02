@extends('layouts.master')
@section('body-content')

@foreach ($more_topics_page as $more_topics)
    {!! html_entity_decode($more_topics->content_one) !!}
    {!! html_entity_decode($more_topics->content_two) !!}
    {!! html_entity_decode($more_topics->content_three) !!}
@endforeach

{{-- <section class="more-topics-content-one">
<div class="topics-body">
    <div class="topics-header mb-5">
        <div class="topics-header-content">
            <p class="text-white py-2">Explore Topics</p>
        </div>
    </div>
</section>


<section class="more-topics-content-two">
    <div class="topics mb-3">
        <p class="mb-4">Explore UN Environment Topics</p>
</section>


    <section class="more-topics-content-three>
        <div class="cards">
            <div class="container text-center">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/1.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Air</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/2.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Biosafety</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/3.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Chemicals & pollution action</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/4.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Climate Action</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/5.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Disasters & conflicts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/6.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Energy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/7.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Environment under review</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/8.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Environmental rights and governance</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/9.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Extractives</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/10.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Forests</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/11.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Gender</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/12.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Green economy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/13.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Nature Action</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/14.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Oceans & seas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/15.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Resource efficiency</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/16.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Technology</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/7.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Transport</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/18.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Water</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/topics/19.jpg">
                            <div class="topics-heading text-start">
                                <a href="#" class="text-dark fw-bold mx-3">Youth, education & environment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}

@endsection

