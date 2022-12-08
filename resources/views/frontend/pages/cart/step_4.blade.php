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
                    <div class="">
                        <h3 class="bold mb-4">
                            Dokončenie objednávky
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="mt-5">
                        <div class="mb-5">
                            <div class="d-flex justify-content-between">
                                <h5 class="bold mb-0">Doručovacie údaje</h5>
                                <a href=""><u>upraviť</u></a>
                            </div>
                            <hr>
                            <div class="">
                                <h6 class="bold">Brenda Obrien</h6>
                                <p class="small text-muted">Wilcza 46,<br/>
                                    92201, Piešťany</p>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="d-flex justify-content-between">
                                <h5 class="bold mb-0">Faktúračné údaje</h5>
                                <a href=""><u>upraviť</u></a>
                            </div>
                            <hr>
                            <div class="">
                                <h6 class="bold">Brenda Obrien</h6>
                                <p class="small text-muted">Wilcza 46,<br/>
                                    92201, Piešťany</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-between">
                                <h5 class="bold mb-0">Doprava a platba</h5>
                                <a href=""><u>upraviť</u></a>
                            </div>
                            <hr>
                            <div class="">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0">Vyzdvihnutie na predajni</p>
                                    <p class="mb-0">0.00€</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Na dobierku</p>
                                    <p class="mb-0">1.00€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="d-lg-block w-100 d-none">
                        <div class="">
                            <div class="cart_step_2_right_side w-100">
                                <h4 class="bold mb-5">Zhrnutie objednávky</h4>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <img src="assets/images/products/cart_img.png" alt="">
                                        </div>
                                        <div class="me-3">
                                            <p>
                                                HP Spectre x360 2-in-1 15.6" 4K Ultra HD Touch ...
                                            </p>
                                            <p class="btn btn-green btn-sm">Na sklade</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="bold mb-0">€159.90</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <img src="assets/images/products/cart_img.png" alt="">
                                        </div>
                                        <div class="me-3">
                                            <p>
                                                HP Spectre x360 2-in-1 15.6" 4K Ultra HD Touch ...
                                            </p>
                                            <p class="btn btn-green btn-sm">Na sklade</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="bold mb-0">€159.90</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">
                                        Celkom bez DPH
                                    </p>
                                    <p class="mb-0">
                                        140,83 €
                                    </p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">
                                        DPH
                                    </p>
                                    <p class="mb-0">
                                        1300,05 €
                                    </p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <p class="bold mb-0">
                                        Celkom s DPH
                                    </p>
                                    <h4 class="mb-0 bold">
                                        1500,66 €
                                    </h4>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <a class="btn btn-green-main" href="cart_step_4_confirm.html">Objednať s povinnosťou platby <i
                                        class="far fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">   
                <div class="col-12">
                    <div class="text-start mt-5">
                        <a class="text-muted" href="cart_step_3.html"><i class="far fa-arrow-left me-3"></i>Predchádzajúce</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Item Carousel Section -->
    <section class="custom-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <h3 class="bold">
                            Odporúčané <span class="text-pink">produkty</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="product_item_carousel">
                        <div class="item">
                            <div class="product-box d-flex d-lg-block bg-white mt-3 mt-lg-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center pt-lg-5 mt-lg-4 mb-lg-5 me-3 me-lg-0">
                                        <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop.png"
                                            alt="">
                                        <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-items-center h-100">
                                    <div class="">
                                        <div class="d-flex">
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                        </div>
                                        <p class="product-box-heading">HP Spectre x360 2-in-1 15.6" 4K Ultra HD
                                            Touch ...</p>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H,
                                            15.6" IPS antireflexný 1920 × 1080</p>
                                        <p class="bold d-none d-lg-block">$ 999.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box d-flex d-lg-block bg-white mt-3 mt-lg-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center pt-lg-5 mt-lg-4 mb-lg-5 me-3 me-lg-0">
                                        <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop.png"
                                            alt="">
                                        <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-items-center h-100">
                                    <div class="">
                                        <div class="d-flex">
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                        </div>
                                        <p class="product-box-heading">HP Spectre x360 2-in-1 15.6" 4K Ultra HD
                                            Touch ...</p>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H,
                                            15.6" IPS antireflexný 1920 × 1080</p>
                                        <p class="bold d-none d-lg-block">$ 999.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box d-flex d-lg-block bg-white mt-3 mt-lg-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center pt-lg-5 mt-lg-4 mb-lg-5 me-3 me-lg-0">
                                        <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop.png"
                                            alt="">
                                        <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-items-center h-100">
                                    <div class="">
                                        <div class="d-flex">
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                        </div>
                                        <p class="product-box-heading">HP Spectre x360 2-in-1 15.6" 4K Ultra HD
                                            Touch ...</p>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H,
                                            15.6" IPS antireflexný 1920 × 1080</p>
                                        <p class="bold d-none d-lg-block">$ 999.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-box d-flex d-lg-block bg-white mt-3 mt-lg-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center pt-lg-5 mt-lg-4 mb-lg-5 me-3 me-lg-0">
                                        <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop.png"
                                            alt="">
                                        <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                                    </div>
                                </div>
                                <div class="d-lg-flex align-items-center h-100">
                                    <div class="">
                                        <div class="d-flex">
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <i class="fas fa-star star-color"></i>
                                            <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                        </div>
                                        <p class="product-box-heading">HP Spectre x360 2-in-1 15.6" 4K Ultra HD
                                            Touch ...</p>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H,
                                            15.6" IPS antireflexný 1920 × 1080</p>
                                        <p class="bold d-none d-lg-block">$ 999.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
