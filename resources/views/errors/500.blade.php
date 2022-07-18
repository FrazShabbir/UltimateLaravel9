<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>"Laravel 9 BoilerPlate with preinstalled essential Kit" | {{fromSettings('site_title')}}</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('backend/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-sm-12 text-center">
                        <div class="iq-error position-relative mt-5">
                            <img src="images/error/500.png" class="img-fluid iq-error-img" alt="">
                            <h1 class="text-in-box">500</h1>
                            <h2 class="mb-0">Oops! This Page is Not Working.</h2>
                            <p>The requested is Internal Server Error.</p>
                            <a class="btn btn-primary mt-3" href="{{route('dashboard')}}"><i class="ri-home-4-line"></i>Back to Home</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper END -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('backend/js/jquery.min.js')}}"></script>
      <script src="{{asset('backend/js/popper.min.js')}}"></script>
      <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('backend/js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('backend/js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('backend/js/waypoints.min.js')}}"></script>
      <script src="{{asset('backend/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('backend/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('backend/js/apexcharts.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('backend/js/lottie.js')}}"></script>
      <!-- Slick JavaScript --> 
      <script src="{{asset('backend/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('backend/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('backend/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('backend/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('backend/js/smooth-scrollbar.js')}}"></script>
      <!-- Style Customizer -->
      <script src="{{asset('backend/js/style-customizer.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('backend/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('backend/js/custom.js')}}"></script>
   </body>

</html>
