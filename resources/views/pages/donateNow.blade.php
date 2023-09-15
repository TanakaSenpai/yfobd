@extends('layouts.master')
@section('body-content')

{{-- @foreach ($donate_now_page as $donate_now)
    {!! html_entity_decode($donate_now->content_one) !!}
    {!! html_entity_decode($donate_now->content_two) !!}
    {!! html_entity_decode($donate_now->content_three) !!}
@endforeach --}}

{{-- <section class="text-white d-flex flex-column justify-content-center align-items-center" style="background-image: url(./images/donate.avif); height: 50rem; background-size: cover; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-12">
          <h1 class="display-4"><strong>Donate now and help the humanity<br></strong> </h1>
      </div>
    </div>
  </div>
</section> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-9 p-5">
            <h4 class=""><b>We are proudly a non-profit organization</b></h4>
            <p class="fs-5">As a nonprofit, we rely on donations to provide the kind of rights everyone deserves. We are trying to give the high quality professional service that everyone needs.</p>
            <p class="fw-bold fs-6">❤️ 100% of your donations will be spent on the improvement of the humanity.</p>

            <p class="pt-4 fw-bold">List of our donors: </p>
            <div class="mb-5" style="max-height:300px;overflow-y:scroll;">
                <table class="table bg-secondary border border-4 border-gray-800" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody style="height: 100px !important;overflow-y:auto !important;">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Otto</td>
                            <td>$25</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob Silver</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>$1000</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Alex Groot</td>
                            <td>$40</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Pinky Promi</td>
                            <td>$10</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Heild Bomb</td>
                            <td>$70</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Growth Young</td>
                            <td>$80</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Mr. Pennt</td>
                            <td>$200</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Keith Broom</td>
                            <td>$550</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h5 class="fw-bold">Donate now:</h5>
            <form action="" method="post">
                @csrf
                <div class="input-group mb-3 w-50">
                    <button class="btn border p-4">$</button>
                    <input type="text" class="form-control p-3" name="donate" placeholder="Enter the amount" required>
                    <button class="btn btn-primary p-4 ms-2">Donate</button>
                </div>
            </form>


        </div>



        <div class="col-3 p-0">
            <img src="/images/child.png" class="w-100">
        </div>
    </div>
    </div>
</div>



@endsection
