<div class="footer">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <img src="{{ asset('images/logo/footer logo.png') }}" width="200">
                        <p class="text-white" style="font-size: .7em;">H-1012, 2nd Floor, Mirpur DOHS</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="nav d-flex flex-column mb-4">
                        <h2>Updates & Histories</h2>
                        <ul class="mt-1 p-0">
                            <li><a href="{{ route('news-updates') }}">News & updates</a>
                            <li><a href="{{ route('management') }}">Board of directors</a>
                            <li><a href="#">National Co-ordinator</a>
                            <li><a href="#">Global Co-ordinator</a>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="nav d-flex flex-column mb-4">
                        <h2>Social Links</h2>
                        <ul class="mt-1 p-0">
                            <li>
                                <div class="socialIcons">
                                    <a href="#" class="fa-brands fa-facebook"></a>
                                    <a href="#" class="fa-brands fa-twitter"></a>
                                    <a href="#" class="fa-brands fa-instagram"></a>
                                    <a href="#" class="fa-brands fa-youtube"></a>
                                </div>
                            </li>
                            <div class="d-flex">
                                <li><a href="{{ route('joinNow') }}" class="border border-white p-2 m-2 fs-6">JOIN NOW</a>
                                <li><a href="{{ route('donateNow') }}" class="border border-white p-2 m-2 fs-6">DONATE US</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
