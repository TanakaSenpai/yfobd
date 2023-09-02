<div class="mainNav d-flex justify-content-between mx-lg-5">
    <div class="">
        <a href="{{ route('index') }}">
        <img class="m-2 mx-5" src="{{ asset('images/logo/footer logo.png') }}" alt="logo" width="110"></a>
    </div>
    <div class="d-none d-lg-block mx-5">
        <ul class="nav justify-content-end me-5">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('management') }}">Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects') }}">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bhrau') }}">BHRAU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('joinNow') }}">Join Now</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('donateNow') }}">Donate Now</a>
            </li>
        </ul>
    </div>
    <div class="d-flex d-lg-none align-items-center fs-3 me-5">
        <i id="hamIcon" class="fa-solid fa-bars"></i>
    </div>
</div>

<div class="mobileNav d-none vh-100">
    <ul class="nav d-flex flex-column">
        <li class="nav-item">
            <a class="nav-link active text-white p-3 m-2  border border-white" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white p-3 m-2  border border-white" href="{{ route('management') }}">Management</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white p-3 m-2  border border-white" href="{{ route('projects') }}">Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white p-3 m-2  border border-white" href="{{ route('bhrau') }}">BHRAU</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white p-3 m-2  border border-white" href="{{ route('joinNow') }}">Join Now</a>
        </li>
        <li class="nav-item">
</div>
