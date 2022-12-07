<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand ms-lg-4 ms-md-0 ms-sm-0" href="#">
            <img width="160px" src="{{asset('frontend/images/logo-2.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="ms-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('public.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('public.about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('public.contact')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
