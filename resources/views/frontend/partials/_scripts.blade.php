   <!-- Jquery File -->
   <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
   <!-- Bootstrap Js Flies -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
       integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
       crossorigin="anonymous"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
       crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
       integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
       crossorigin="anonymous"></script>
   <!-- Owl Carousel Js Files -->
   <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>

   @yield('scripts')
@stack('js')