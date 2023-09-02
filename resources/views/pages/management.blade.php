@extends('layouts.master')
@section('body-content')



<div class="topics-body">
    <div class="topics-header mb-5">
        <div class="topics-header-content">
            <p class="text-white py-2">Our Team</p>
        </div>
    </div>

    <div class="topics mb-3">
        <p class="mb-5">Board of Directors</p>

        <div class="cards mt-5 mb-5">
            <div class="container  mt-3 text-center">
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card-body">
                        <img class="mng-pic" src="images/management/image1.png">
                            <div class="topics-heading text-start mt-3">
                                <div class="p-3">
                                    <p class="text-dark fs-5 fw-bold text-center">Mohammad Safi Ul Alam</p>
                                    <p class="text-dark text-center fs-6">Founder President</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card-body">
                        <img class="mng-pic" src="images/management/image2.png">
                            <div class="topics-heading text-start mt-3">
                                <div class="p-3">
                                    <p class="text-dark fs-5 fw-bold text-center">Tanvir Rajib</p>
                                    <p class="text-dark text-center fs-6">Vice President</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card-body">
                        <img class="mng-pic" src="images/management/image3.png">
                            <div class="topics-heading text-start mt-3">
                                <div class="p-3">
                                    <p class="text-dark fs-5 fw-bold text-center">Afroza Sultana Reshma</p>
                                    <p class="text-dark text-center fs-6">Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="mb-5">Ambassadors</p>

        <div class="cards mt-5">
            <div class="container  mt-3 text-center">
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card-body">
                        <img class="mng-pic rounded-circle" src="images/demo.png">
                            <div class="topics-heading text-start mt-3">
                                <div class="p-3">
                                    <p class="text-dark fs-5 fw-bold text-center">Mohammad Safi Ul Alam</p>
                                    <p class="text-dark text-center fs-6">Founder President</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card-body">
                        <img class="mng-pic rounded-circle" src="images/demo.png">
                            <div class="topics-heading text-start mt-3">
                                <div class="p-3">
                                    <p class="text-dark fs-5 fw-bold text-center">Tanvir Rajib</p>
                                    <p class="text-dark text-center fs-6">Vice President</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mb-3">
                        <div class="card-body">
                        <img class="mng-pic rounded-circle" src="images/demo.png">
                            <div class="topics-heading text-start mt-3">
                                <div class="p-3">
                                    <p class="text-dark fs-5 fw-bold text-center">Afroza Sultana Reshma</p>
                                    <p class="text-dark text-center fs-6">Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>





{{-- <section class="text-white d-flex flex-column justify-content-center align-items-center" style="background-image: url(./images/management-banner.jpeg); height: 50rem; background-size: cover; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <h1 class="display-4"><strong>ABOUT OUR<br> MANAGEMENT</strong> </h1>
      </div>
    </div>
  </div>
</section>

<section class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-8 col-md-12 col-12 fs-5">
      <p>The United Nations Environment Programme (UNEP) is the leading global authority on the environment.</p>
      <p>UNEP’s mission is to inspire, inform, and enable nations and peoples to improve their quality of life without
        compromising that of future generations.</p>
      <p>For over 50 years, UNEP has worked with governments, civil society, the private sector and UN entities to
        address humanity’s most pressing environmental challenges - from restoring the ozone layer to protecting the
        world's seas and promoting a green, inclusive economy.</p>
      <p>UNEP is driving transformational change by drilling down on the root causes of the triple planetary crisis of
        climate change, nature and biodiversity loss and pollution.</p>
      <p>UNEP’s work is focused on helping countries transition to low-carbon and resource-efficient economies,
        strengthening environmental governance and law, safeguarding ecosystems, and providing evidence-based
        data to inform policy decisions.</p>
      <p>Through cutting-edge science, coordination and advocacy, UNEP supports its 193 Member States to achieve
        the Sustainable Development Goals and live in harmony with nature.</p>
      <p>And this work has never been more critical.</p>
      <p>For a look back at UNEP’s history and five decades of environmental milestones, watch the video and see
        the UNEP timeline of milestones over the past 50 years.</p>
    </div>
    <div class="col-lg-4 col-md-12 col-12 fs-5">
      <ul class="list-group list-group-flush text-secondary">
        <li class="list-group-item text-primary"><a href="#">About Us</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Frequently Asked Questions</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Structure and Leadership</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Funding and Partnerships</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Policies and Strategies</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Civil Society Engagement</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Private Sector Engagement</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Evaluation Office</a></li>
        <li class="list-group-item text-primary"><a class="text-reset" href="#">Contact Us</a></li>
      </ul>

    </div>
  </div>
</section>

<section class="backgrund py-5" style="background-color: #efefef;">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col--12">
        <div class="Governance">
          <h1>Governance</h1>
          <p class="fs-5">UNEP works closely with its 193
            Member States and representatives
            from civil society, businesses,
            and other major groups and stakeholders to
            address environmental challenges
            through the UN Environment Assembly,
            the world’s highest-level decision-
            making body on the environment.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col--12 mb-5">
        <div class="card h-100">
          <img src="{{ asset('images/image/1.jpeg') }}" class="card-img-top ">
          <div class="card-body">
            <h5 class="card-text"><a class="text-reset" href="#">Committee of Permanent Representatives</a></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col--12 mb-5">
        <div class="card h-100">
          <img src="{{ asset('images/image/2.jpeg') }}" class="card-img-top" >
          <div class="card-body">
            <h5 class="card-text"><a class="text-reset" href="#">The United Nations Environment Assembly</a></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col--12 mb-5">
        <div class="card h-100">
          <img src="{{ asset('images/image/3.jpeg') }}" class="card-img-top" >
          <div class="card-body bg-0">
            <h5 class="card-text"><a class="text-reset" href="#"> Secretariats and Conventions </a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <div class="heading">
        <h1 class="mb-4"><strong> UNEP’s contribution to the Sustainable Development Goals (SDGs)</strong></h1>
        <p class="mb-4 fs-5">UNEP’s core mission is to find solutions to the triple planetary crisis.
          As the leading global authority on the environment, the institution
          helps its Member States to foster climate stability, live in harmony
          with nature and forge a pollution-free future, supporting
          the achievement of all 17 SDGs.</p>
          <p class="fs-4 ">UNEP has spent more than 50 years supporting sustainable
            development through its work on the environment.</p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <div class="logo">
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-01.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-02.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-03.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-04.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-05.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-06.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-07.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-08.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-09.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-10.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-01.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-11.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-12.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-13.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-14.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-15.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-16.png') }}"></a>
        <a href="#"><img class="mb-1 img-fluid" src="{{ asset('images/image/E-WEB-Goal-17.png') }}"></a>

      </div>
    </div>
  </div>
</section>


<section class="container-fluid mb-5" style="background-color: #efefef;">
  <div class="row align-items-center">
    <dov class="col-lg-6 col-md-12 col-12 px-lg-5">
      <div class="unep mx-lg-5 px-lg-5 p-md-5 py-5">
        <h1 class="mx-lg-5 px-lg-5 mb-4">UNEP – your partner for people and planet</h1>
          <p class="mx-lg-5 px-lg-5 fs-5">This booklet presents an overview of UNEP – its mission, vision,
            strategy and action for tackling the triple planetary crisis. It chronicles
            environmental highlights from the past five decades, shows how UNEP
            works in partnerships, and explains why it is crucial that funding
            provided to UNEP keeps pace with the growing expectations placed on
            the organization to deliver results in support of people and planet.</p>
      </div>
    </dov>
    <dov class="col-lg-6 col-md-12 col-12">
      <img class="w-100" src="{{ asset('/image/unep.png') }}">
    </dov>
  </div>
</section>


<section class="container">
  <div class="row mb-4">
    <div class="col-12">
      <div class="featured">
        <h1>Featured news and stories</h1>
      </div>
    </div>
  </div>
  <div class="row bg-primary text-light">
    <div class="col-lg-7 col-md-7 col-12 p-0">
      <img src="{{ asset('images/image/featured.jpeg') }}">
    </div>
    <div class="col-lg-5 col-md-5 col-12 ">
      <div class="featured py-4">
        <p>Video</p>
        <h5>Look back at UNEP’s history and how it has helped shape five decades of environmental milestones</h5>
      </div>
    </div>
  </div>
</section>

<section class="container mt-4 mb-5">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mb-5">
      <div class="card">
        <img src="{{ asset("images/image/SDg_banner_image.jpg") }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>STORY</p>
          <h5 class="card-text">Everything you need to know about plastic pollution</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mb-5">
      <div class="card">
        <img src="{{ asset('images/image/GettyImages-466756626.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>STORY</p>
          <h5 class="card-text">Unsung heroes of conservation: Indigenous people fight for forests</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mb-5">
      <div class="card">
        <img src="{{ asset('images/image/GettyImages-673234176.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <p>STORY</p>
          <h5 class="card-text">UN resolution billed as a turning point in climate justice</h5>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container mt-5">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mb-5 text-center p-4 border-end">
      <div class="svg mb-5 position-relative">
        <img src="{{ asset('images/image/icon_learn.svg') }}">
      </div>
      <div class=" position-absolute top-0 start-0 translate-middle">
        <h5><a href="#">Learn about our work </a></h5>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mb-5 text-center p-4 border-end">
      <div class="svg mb-5">
        <img src="{{ asset('images/image/icon_signup.svg') }}">
      </div>
      <h5 class="card-text"><a href="#">Sign up for updates </a></h5>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mb-5 text-center p-4 border-end">
      <div class="svg mb-5">
        <img src="{{ asset('images/image/icon_getinvolved.svg') }}">
      </div>
      <h5 class="card-text"><a href="#">Get involved </a></h5>
    </div>
  </div>
</section> --}}




@endsection
