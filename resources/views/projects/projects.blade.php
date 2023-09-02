@extends('layouts.master')
@section('body-content')


<section class="more-topics-content-one">
<div class="topics-body">
    <div class="topics-header mb-5">
        <div class="topics-header-content">
            <p class="text-white py-2">Our Projects</p>
            <h5 class="text-white">The projects that we are working on right now.</h5>
        </div>
    </div>
</section>


<section class="more-topics-content-two">
    <div class="topics mb-3">
        <p class="mb-4">Explore Our Projects</p>
</section>


    <section class="more-topics-content-three projects">
        <div class="cards">
            <div class="container text-center">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/agriculture.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'agriculture') }}" class="text-dark fw-bold mx-3">Agriculture</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/climate-change.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'climate change') }}" class="text-dark fw-bold mx-3">Climate Change</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/children.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'children') }}" class="text-dark fw-bold mx-3">Children</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/culture-sports.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'culture & sports') }}" class="text-dark fw-bold mx-3">Culture & Sports</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/democracy.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'democracy') }}" class="text-dark fw-bold mx-3">Democracy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/education.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'education') }}" class="text-dark fw-bold mx-3">Education</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/environment.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'environment') }}" class="text-dark fw-bold mx-3">Environment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/health.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'health') }}" class="text-dark fw-bold mx-3">Health</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/poverty.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'poverty') }}" class="text-dark fw-bold mx-3">Poverty</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/peace.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'peace') }}" class="text-dark fw-bold mx-3">Peace</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/water.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'water') }}" class="text-dark fw-bold mx-3">Water</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/women.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'women') }}" class="text-dark fw-bold mx-3">Women</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mb-3">
                        <div class="card-body">
                        <img class="w-100" src="images/projects/youth.jpg">
                            <div class="topics-heading text-center pt-2">
                                <a href="{{ route('see-project', 'youth') }}" class="text-dark fw-bold mx-3">Youth</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



@endsection
