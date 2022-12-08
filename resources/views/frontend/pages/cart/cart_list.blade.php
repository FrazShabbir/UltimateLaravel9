    <!-- Product Detail Section -->
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
                                <div class="gradient_div">
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
                                <div class="non_gradient_div">
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
                    <div class="row border-top py-5">
                        <div class="col-lg-4 col-10 order-1 mb-5 mb-lg-0">
                            <div class="">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <img class="img-fluid" src="assets/images/products/detail_product_3.png" alt="">
                                    </div>
                                    <div class="">
                                        <p class="mb-0">Hot Mens Parka Coats Men Winter Warm Hooded</p>
                                        <p class="bold mb-1">€159.90</p>
                                        <a href="" class="btn btn-green btn-sm">€159.90</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-8 order-3 order-lg-2">
                            <div class="">
                                <div class="counter">
                                    <span class="down" onClick="decreaseCount(event, this)">-</span>
                                    <input type="text" value="1 ks" />
                                    <span class="up" onClick="increaseCount(event, this)">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block order-0 order-lg-3">
                            <p class="mb-0 mt-3">€159.90/kus</p>
                        </div>
                        <div class="col-lg-2 col-4 order-4 order-lg-4">
                            <p class="bold mb-0 mt-3">€318.00</p>
                        </div>
                        <div class="col-lg-1 col-2 order-2 order-lg-5">
                            <div class="mt-3">
                                <a href=""><i class="fal fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row border-top py-5">
                        <div class="col-lg-4 col-10 order-1 mb-5 mb-lg-0">
                            <div class="">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <img class="img-fluid" src="assets/images/products/detail_product_3.png" alt="">
                                    </div>
                                    <div class="">
                                        <p class="mb-0">Hot Mens Parka Coats Men Winter Warm Hooded</p>
                                        <p class="bold mb-1">€159.90</p>
                                        <a href="" class="btn btn-green btn-sm">€159.90</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-8 order-3 order-lg-2">
                            <div class="">
                                <div class="counter">
                                    <span class="down" onClick="decreaseCount(event, this)">-</span>
                                    <input type="text" value="1 ks" />
                                    <span class="up" onClick="increaseCount(event, this)">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-none d-lg-block order-0 order-lg-3">
                            <p class="mb-0 mt-3">€159.90/kus</p>
                        </div>
                        <div class="col-lg-2 col-4 order-4 order-lg-4">
                            <p class="bold mb-0 mt-3">€318.00</p>
                        </div>
                        <div class="col-lg-1 col-2 order-2 order-lg-5">
                            <div class="mt-3">
                                <a href=""><i class="fal fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top pt-5">
                <div class="col-lg-6 ">
                    <div id="newsletter_section" class="bg-transparent">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Váš zľavový kód">
                            <span class="input-group-text">
                                <button type="button" class="btn border-0 text-white">Použiť zľavový kód</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pt-5 pt-lg-0">
                        <div class="d-block d-lg-flex justify-content-end">
                            <div class="d-flex d-lg-block me-lg-5 justify-content-between">
                                <p class="small mb-0">Celkom bez DPH</p>
                                <h3 class="bold">Celkom</h3>
                            </div>
                            <div class="d-flex d-lg-block justify-content-between">
                                <p class="small mb-0 text-end">1300,05 €</p>
                                <h3 class="bold text-end">1500,66 €</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-end mt-5">
                        <a class="btn btn-green-main" href="cart_step_2.html">Pokračovať <i class="far fa-angle-right ms-2"></i></a>
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
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value + " ks";
        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value + " ks";
            }
        }
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

    
 