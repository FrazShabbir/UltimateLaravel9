<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ fromSettings('short_title') }} | {{ fromSettings('site_title') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center bg-primary rounded">
                    <div class="row m-0">
                        <div class="col-md-5 bg-white sign-in-page-data">
                            <div class="sign-in-from">
                                <h1 class="mb-0 text-center">Verify Email</h1>
                                <p class="text-center text-dark">Enter your email address for verification.</p>
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                @if (session('status') == 'verification-link-sent')
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Verification link has been sent to your email.
                                    </div>
                                @endif

                                <form class="mt-4" method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <div class="sign-info text-center">
                                        <button type="submit" class="btn btn-primary d-block w-100 mb-2">Send
                                            Verification Email</button>
                                    </div>
                                </form>

                                <form class="mt-4" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="sign-info text-center">
                                        <button type="submit"
                                            class="btn btn-primary d-block w-100 mb-2">Logout</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-md-7 text-center sign-in-page-image">
                            <div class="sign-in-detail text-white">
                              <a class="sign-in-logo mb-5" href="{{route('login')}}"><img src="{{asset(fromSettings('logo')??'backend/images/logo-full.png')}}" class="img-fluid" alt="logo"></a>

                                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                    data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                    data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                    @foreach (getSlider() as $i)
                                        <div class="item ">
                                            <img src="{{ asset($i->image) }}" class="img-fluid mb-4 text-center"
                                                alt="logo" style="max-height:400px;">
                                            <h4 class="mb-1 text-white">{{ ucfirst($i->title) }}</h4>
                                            <p>{{ ucfirst($i->description) }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- color-customizer -->

    <!-- color-customizer END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('backend/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('backend/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('backend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('backend/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('backend/js/apexcharts.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('backend/js/lottie.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('backend/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('backend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('backend/js/smooth-scrollbar.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('backend/js/style-customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('backend/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('backend/js/custom.js') }}"></script>
</body>

</html>
