

    @extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')
       <!-- Product Detail Section -->
       <section id="cart_item_list_section" class="custom-bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-12-12">
                            <div class="">
                                <div class="non_gradient_div ">
                                    <p>01</p>
                                    <a href="cart_list.html">Nákupný košík</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12-12">
                            <div class="">
                                <div class="non_gradient_div">
                                    <p>02</p>
                                    <a href="cart_step_2.html">Doprava a platba</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12-12">
                            <div class="">
                                <div class="non_gradient_div">
                                    <p>03</p>
                                    <a href="cart_step_3.html">Kontaktné údaje</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12-12">
                            <div class="">
                                <div class="gradient_div">
                                    <p>04</p>
                                    <a href="cart_step_4.html">Dokončenie objednávky</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="step_4_confirmation_outer_div text-center my-0 mx-auto">
                        <div class="confirmtion_tick">
                            <i class="fas fa-check"></i>
                        </div>
                        <h2 class="bold text-dark mb-4">
                            Ďakujeme za <br> objednávku!
                        </h2>
                        <a class="btn btn-green-main" href="moj_profile.html">Prejsť na domovskú stránku<i class="far fa-angle-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('scripts')
@endsection

@push('js')
<script>
    $('input:radio').change(function () {
        if ($('#flexRadioDefault1').is(':checked')) {
            $('#cart_list_step_2_active_radio').addClass("cart_list_step_2_radio_on_active")
        }
        else {
            $('#cart_list_step_2_active_radio').removeClass("cart_list_step_2_radio_on_active")
        }
    });

</script>
<script>
    $('#product_item_carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        dots: false,
        center: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 6,
            }
        }
    });

</script>
@endpush
