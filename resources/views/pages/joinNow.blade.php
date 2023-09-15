@extends('layouts.master')
@section('body-content')

@foreach ($join_now_page as $join_now)
    {!! html_entity_decode($join_now->content_one) !!}
    {!! html_entity_decode($join_now->content_two) !!}
    {!! html_entity_decode($join_now->content_three) !!}
@endforeach

{{-- <div class="join-now-section-one">
<div class="d-flex justify-content-center my-3">
<div class="hold-transition register-page w-50 my-3">
    <h1 class="text-center fw-bolder pb-2">YFOBD</h1>
    <h5 class="fw-bold text-center">Join with us and contribute</h5>

    <h6 class="fw-bold text-center">Help the humanity</h6>
<div class="register-box w-100">

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg mb-3">Register a new membership</p>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</div>

  <div class="join-now-section-two">
      <form action="/member-register" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Your Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fathers_name" placeholder="Father's Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="mothers_name" placeholder="Mother's Name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="address" placeholder="Address" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="qualification" placeholder="Your Academic Qualification" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="phone_number" placeholder="Your Phone Number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
</div>

<div class="join-now-section-three">
        <div class="input-group mb-3">
          <textarea type="password" class="form-control" name="msg" placeholder="Your Message (Optional)" rows="5" required></textarea>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div> --}}
@endsection

