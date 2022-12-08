@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/img_gallery/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/img_gallery/easyzoom.css')}}">

    
@endpush



@section('content')

        <!-- breadcrumbs -->
        <div class="custom-bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <p class="mb-0 ms-2 breadcrumbs_outer_div w-100">
                                <a class="text-muted" href="index.html"><i class="fal fa-home-lg-alt "></i></a>
                                <i class="far fa-angle-right ms-2 me-2"></i>
                                <a class="text-muted" href="#">Electronics</a>
                                <i class="far fa-angle-right ms-2 me-2"></i>
                                <a class="text-muted" href="#">Laptops</a>
                                <i class="far fa-angle-right ms-2 me-2"></i>
                                <span class="text-pink bold overflow-x-hidden">HP Spectre x360 2-in-1 15.6" 4K Ultra HD
                                    Touch-Screen Laptop, Intel i7 8th Gen</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Product Detail Section -->
        <section class="custom-bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="">
                            <div class="gallery-parent">
                                <!-- SwiperJs and EasyZoom plugins start -->
                                <div class="swiper-container gallery-top mb-5">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gallery_favrt_btn float-end mt-3 me-3">
                                                <a href="" class=""><i class="fal fa-heart"></i></a>
                                            </div>
                                            <a href="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}">
                                                <img class="w-100 single_gallery_img"
                                                    src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_favrt_btn float-end mt-3 me-3">
                                                <a href="" class=""><i class="fal fa-heart"></i></a>
                                            </div>
                                            <a href="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}">
                                                <img class="w-100 single_gallery_img"
                                                    src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_favrt_btn float-end mt-3 me-3">
                                                <a href="" class=""><i class="fal fa-heart"></i></a>
                                            </div>
                                            <a href="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}">
                                                <img class="w-100 single_gallery_img"
                                                    src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_favrt_btn float-end mt-3 me-3">
                                                <a href="" class=""><i class="fal fa-heart"></i></a>
                                            </div>
                                            <a href="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}">
                                                <img class="w-100 single_gallery_img"
                                                    src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_favrt_btn float-end mt-3 me-3">
                                                <a href="" class=""><i class="fal fa-heart"></i></a>
                                            </div>
                                            <a href="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}">
                                                <img class="w-100 single_gallery_img"
                                                    src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <!-- <div class="swiper-button-next swiper-button"></div>
                                  <div class="swiper-button-prev swiper-button"></div> -->
                                </div>
                                <div class="swiper-container gallery-thumbs small_images_width">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="w-100 gallery_bottom_small_img"
                                                src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="w-100 gallery_bottom_small_img"
                                                src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="w-100 gallery_bottom_small_img"
                                                src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="w-100 gallery_bottom_small_img"
                                                src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="w-100 gallery_bottom_small_img"
                                                src="{{asset('frontend/assets/images/products/img_gallery/img_1.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <!-- SwiperJs and EasyZoom plugins end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="mt-5 mt-lg-0">
                            <div class="mb-4">
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="d-flex d-lg-block">
                                    <div class="">
                                        <h3 class="bold mb-3">HP Spectre x360 2-in-1 15.6" 4K Ultra HD Touch-Screen
                                            Laptop,
                                            Intel i7 8th Gen</h3>
                                        <div class="mb-4">
                                            <a href="" class="btn btn-sm btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-sm btn-outline-success mb-3">Doručenie do 2-4
                                                dní</a>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="mb-5 text-muted d-none d-lg-block">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                            Integer mauris sapien. Integer sapien mauris sapien,
                                            faucibus in egestas id, blandit pretium purus. Etiam sed metus
                                            scelerisque...</p>
                                        <p class="mb-0 small text-muted d-none d-lg-block"><del>€550.00</del></p>
                                        <h3 class="bold ms-4 ms-lg-0">€159.90</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="d-flex">
                                    <div class="me-4">
                                        <div class="counter">
                                            <span class="down" onClick="decreaseCount(event, this)">-</span>
                                            <input type="text" value="1 ks" />
                                            <span class="up" onClick="increaseCount(event, this)">+</span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a class="btn btn-green-main adj-padding-on-mobile" href="cart_list.html"><i
                                                class="fal fa-shopping-cart me-2"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <hr class="d-none d-lg-block">
                            <div class="pt-3 d-none d-lg-block">
                                <div class="row">
                                    <div class="col-3">
                                        <p>Code:</p>
                                    </div>
                                    <div class="col-9">
                                        <a href="">RASK3ZKJ</a>
                                    </div>
                                    <div class="col-3">
                                        <p>Category:</p>
                                    </div>
                                    <div class="col-9">
                                        <a href="">Electronics</a>
                                    </div>
                                    <div class="col-3">
                                        <p>Tags:</p>
                                    </div>
                                    <div class="col-9">
                                        <a href="">Laptop, New Arrivals, Ultraslim, Notebook</a>
                                    </div>

                                </div>
                                <!-- <div class="d-flex">
                                    <p >Code:</p>
                                    <a href="">RASK3ZKJ</a>
                                </div>
                                <div class="d-flex">
                                    <p>Category:</p>
                                    <a href="">Electronics</a>
                                </div>
                                <div class="d-flex">
                                    <p>Tags:</p>
                                    <a href="">Laptop, New Arrivals, Ultraslim, Notebook</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Carousel Section on detail page -->
        <section class="custom-bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-5">
                            <h3 class="bold">
                                Zákazníci tiež <span class="text-pink">zakúpili</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme" id="product_item_carousel_on_drtail_page">
                            <div class="item">
                                <div class="product-box d-flex bg-white mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-center me-3">
                                            <img class="img-fluid mb-5 mb-lg-0"
                                                src="{{asset('frontend/assets/images/products/detail_product_2.png')}}" alt="">
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
                                <div class="product-box d-flex bg-white mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-center me-3">
                                            <img class="img-fluid mb-5 mb-lg-0"
                                                src="{{asset('frontend/assets/images/products/detail_product_2.png')}}" alt="">
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
                                <div class="product-box d-flex bg-white mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-center me-3">
                                            <img class="img-fluid mb-5 mb-lg-0"
                                                src="{{asset('frontend/assets/images/products/detail_product_2.png')}}" alt="">
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
                                <div class="product-box d-flex bg-white mt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-center me-3">
                                            <img class="img-fluid mb-5 mb-lg-0"
                                                src="{{asset('frontend/assets/images/products/detail_product_2.png')}}" alt="">
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

        <!-- Product Description Tabpan -->
        <section class="d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <nav id="product_page_tab">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Popis produktu</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Špecifikácie</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Recenzie</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <div class="mt-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="">
                                                        <div class="">
                                                            <h5 class="bold mb-5">
                                                                LATEST 8TH GENERATION CPU: Intel Core i7-8500
                                                            </h5>
                                                            <p class="text-muted">

                                                                UNMATCHED PERFORMANCE:16 GB DDR4-2133 SDRAM (2 x 8 GB)
                                                                of
                                                                system memory for intense multitasking and gaming,
                                                                smoothly
                                                                run your graphics-heavy PC games and video-editing
                                                                <br /><br />
                                                                SUPERIOR SPEED and Advanced Wireless connectivity: Fast
                                                                Data
                                                                Access with 512GB solid state drive PCIe NVMe 4x3 Lane,
                                                                a
                                                                flash-based SSD with no moving parts, resulting in
                                                                faster
                                                                start-up times data access. Advanced Wireless
                                                                Connectivity:
                                                                Intel 802.11ac (2x2) Wi-Fi and Bluetooth 4.2 Combo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="">
                                                        <div class="table-responsive border">
                                                            <table class="table table-striped mb-0">
                                                                <thead class="custom-bg-light py-2">
                                                                    <tr>
                                                                        <th class="bold" colspan="2" scope="col">
                                                                            Specifikácie</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Screen Size</td>
                                                                        <td class="bold">15.6 inches</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Screen Resolution</td>
                                                                        <td class="bold">3840 x 2160 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Max Screen Resolution</td>
                                                                        <td class="bold">3840 x 2160 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Processor</td>
                                                                        <td class="bold">1.8 GHz Intel Core i7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>RAM</td>
                                                                        <td class="bold">16 GB DDR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Memory Speed</td>
                                                                        <td class="bold">2400 MHz</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hard Drive</td>
                                                                        <td class="bold">512 GB SSD</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Graphics Coprocessor</td>
                                                                        <td class="bold">NVIDIA GeForce</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Chipset Brand</td>
                                                                        <td class="bold">MX150</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Card Description</td>
                                                                        <td class="bold">NVIDIA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Graphics Card Ram Size</td>
                                                                        <td class="bold">Dedicated</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Wireless Type</td>
                                                                        <td class="bold">802.11ac</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Average Battery Life (in hours) </td>
                                                                        <td class="bold">13 hours</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab" tabindex="0">
                                    <div class="mt-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="">
                                                        <div class="">
                                                            <h5 class="bold mb-5">
                                                                LATEST 8TH GENERATION CPU: Intel Core i7-8500
                                                            </h5>
                                                            <p class="text-muted">

                                                                UNMATCHED PERFORMANCE:16 GB DDR4-2133 SDRAM (2 x 8 GB)
                                                                of
                                                                system memory for intense multitasking and gaming,
                                                                smoothly
                                                                run your graphics-heavy PC games and video-editing
                                                                <br /><br />
                                                                SUPERIOR SPEED and Advanced Wireless connectivity: Fast
                                                                Data
                                                                Access with 512GB solid state drive PCIe NVMe 4x3 Lane,
                                                                a
                                                                flash-based SSD with no moving parts, resulting in
                                                                faster
                                                                start-up times data access. Advanced Wireless
                                                                Connectivity:
                                                                Intel 802.11ac (2x2) Wi-Fi and Bluetooth 4.2 Combo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="">
                                                        <div class="table-responsive border">
                                                            <table class="table table-striped mb-0">
                                                                <thead class="custom-bg-light py-2">
                                                                    <tr>
                                                                        <th class="bold" colspan="2" scope="col">
                                                                            Specifikácie</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Screen Size</td>
                                                                        <td class="bold">15.6 inches</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Screen Resolution</td>
                                                                        <td class="bold">3840 x 2160 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Max Screen Resolution</td>
                                                                        <td class="bold">3840 x 2160 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Processor</td>
                                                                        <td class="bold">1.8 GHz Intel Core i7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>RAM</td>
                                                                        <td class="bold">16 GB DDR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Memory Speed</td>
                                                                        <td class="bold">2400 MHz</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hard Drive</td>
                                                                        <td class="bold">512 GB SSD</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Graphics Coprocessor</td>
                                                                        <td class="bold">NVIDIA GeForce</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Chipset Brand</td>
                                                                        <td class="bold">MX150</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Card Description</td>
                                                                        <td class="bold">NVIDIA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Graphics Card Ram Size</td>
                                                                        <td class="bold">Dedicated</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Wireless Type</td>
                                                                        <td class="bold">802.11ac</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Average Battery Life (in hours) </td>
                                                                        <td class="bold">13 hours</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab" tabindex="0">
                                    <div class="mt-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="">
                                                        <div class="">
                                                            <h5 class="bold mb-5">
                                                                LATEST 8TH GENERATION CPU: Intel Core i7-8500
                                                            </h5>
                                                            <p class="text-muted">

                                                                UNMATCHED PERFORMANCE:16 GB DDR4-2133 SDRAM (2 x 8 GB)
                                                                of
                                                                system memory for intense multitasking and gaming,
                                                                smoothly
                                                                run your graphics-heavy PC games and video-editing
                                                                <br /><br />
                                                                SUPERIOR SPEED and Advanced Wireless connectivity: Fast
                                                                Data
                                                                Access with 512GB solid state drive PCIe NVMe 4x3 Lane,
                                                                a
                                                                flash-based SSD with no moving parts, resulting in
                                                                faster
                                                                start-up times data access. Advanced Wireless
                                                                Connectivity:
                                                                Intel 802.11ac (2x2) Wi-Fi and Bluetooth 4.2 Combo.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <div class="">
                                                        <div class="table-responsive border">
                                                            <table class="table table-striped mb-0">
                                                                <thead class="custom-bg-light py-2">
                                                                    <tr>
                                                                        <th class="bold" colspan="2" scope="col">
                                                                            Specifikácie</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Screen Size</td>
                                                                        <td class="bold">15.6 inches</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Screen Resolution</td>
                                                                        <td class="bold">3840 x 2160 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Max Screen Resolution</td>
                                                                        <td class="bold">3840 x 2160 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Processor</td>
                                                                        <td class="bold">1.8 GHz Intel Core i7</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>RAM</td>
                                                                        <td class="bold">16 GB DDR</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Memory Speed</td>
                                                                        <td class="bold">2400 MHz</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hard Drive</td>
                                                                        <td class="bold">512 GB SSD</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Graphics Coprocessor</td>
                                                                        <td class="bold">NVIDIA GeForce</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Chipset Brand</td>
                                                                        <td class="bold">MX150</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Card Description</td>
                                                                        <td class="bold">NVIDIA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Graphics Card Ram Size</td>
                                                                        <td class="bold">Dedicated</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Wireless Type</td>
                                                                        <td class="bold">802.11ac</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Average Battery Life (in hours) </td>
                                                                        <td class="bold">13 hours</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Description Collapse For Mobile Screen -->
        <section class="d-lg-none custom-bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_detail_collapse_outer_card">
                            <div>
                                <a class="d-flex justify-content-between" data-bs-toggle="collapse" href="#popis_collapse"
                                    role="button" aria-expanded="false" aria-controls="popis_collapse">
                                    <span>
                                        Popis produktu
                                    </span>
                                    <span class="product_detail_collapse_icon">
                                        <i class="far fa-angle-down"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="collapse product_detail_collapse_content" id="popis_collapse">
                                <div class="pt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_detail_collapse_outer_card">
                            <div>
                                <a class="d-flex justify-content-between" data-bs-toggle="collapse" href="#specifikacie"
                                    role="button" aria-expanded="false" aria-controls="specifikacie">
                                    <span>
                                        Špecifikácie
                                    </span>
                                    <span class="product_detail_collapse_icon">
                                        <i class="far fa-angle-down"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="collapse product_detail_collapse_content" id="specifikacie">
                                <div class="pt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_detail_collapse_outer_card">
                            <div>
                                <a class="d-flex justify-content-between" data-bs-toggle="collapse" href="#recenzie_collapse"
                                    role="button" aria-expanded="false" aria-controls="recenzie_collapse">
                                    <span>
                                        Recenzie
                                    </span>
                                    <span class="product_detail_collapse_icon">
                                        <i class="far fa-angle-down"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="collapse product_detail_collapse_content" id="recenzie_collapse">
                                <div class="pt-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  @include('frontend.partials._carusel')
    

@endsection


@section('scripts')
<script src="{{asset('frontend/assets/js/img_gallery/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/img_gallery/easyzoom.js')}}"></script>
<script src="{{asset('assets/js/img_gallery/main.js')}}"></script>
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
    $('#product_item_carousel_on_drtail_page').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        dots: false,
        center: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 6000,
        responsive: {
            0: {
                items: 1,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 4,
            }
        }
    });
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
