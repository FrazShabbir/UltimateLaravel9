@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')

    <section class="custom-bg-light pb-0 pt-3">
        <div class="container">
            <div class="row">

                @include('frontend.pages.home.partials.sidebar')

              @include('frontend.pages.home.partials.carousel')
            </div>
        </div>
    </section>

    <!-- Product List -->
    <section class="custom-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <h3 class="bold">
                            Obľúbené <span class="text-pink">kategórie</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="category_carousel">
                        <div class="item">
                            <div class="category_box">
                                <div class="row">
                                    <div class="col-lg-8 col-12 order-last order-lg-first">
                                        <div class="d-lg-flex align-items-center h-100">
                                            <div class="category_box_content">
                                                <p class="mb-0 bold">Notebooky</p>
                                                <a class="small text-muted " href="category_page.html">
                                                    Zobraziť produkty <i class="far fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 order-first order-lg-last">
                                        <div class="">
                                            <img src="{{asset('frontend/assets/images/products/shirt.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category_box">
                                <div class="row">
                                    <div class="col-lg-8 col-12 order-last order-lg-first">
                                        <div class="d-lg-flex align-items-center h-100">
                                            <div class="category_box_content">
                                                <p class="mb-0 bold">Inteligentné</p>
                                                <a class="small text-muted " href="category_page.html">
                                                    Zobraziť produkty <i class="far fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 order-first order-lg-last">
                                        <div class="">
                                            <img src="{{asset('frontend/assets/images/products/watch.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category_box">
                                <div class="row">
                                    <div class="col-lg-8 col-12 order-last order-lg-first">
                                        <div class="d-lg-flex align-items-center h-100">
                                            <div class="category_box_content">
                                                <p class="mb-0 bold">Oblečenie</p>
                                                <a class="small text-muted " href="category_page.html">
                                                    Zobraziť produkty <i class="far fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 order-first order-lg-last">
                                        <div class="">
                                            <img src="{{asset('frontend/assets/images/products/shirt.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="product_list_row">
                <div class="col-lg-3 col-md-12 col-sm-12">
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
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop-2.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop-3.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop-4.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop-3.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop-4.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop-2.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="product-box d-flex d-lg-block bg-white">
                        <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/laptop.png"
                                    alt="">
                                <p class="bold d-lg-none mb-0 text-danger">$ 999.00</p>
                            </div>
                        </div>
                        <div class="d-lg-flex align-items-center h-100">
                            <div class="">
                                <span class="badge bg-orange rounded-1 mb-3 d-lg-none">TOP produkt</span>
                                <div class="d-flex">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                                <div class="mb-2">
                                    <a href="product_page.html" class="product-box-heading">HP Spectre x360 2-in-1
                                        15.6" 4K Ultra HD Touch ...
                                    </a>
                                </div>
                                <div class="d-lg-none">
                                    <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                    <a href="" class="btn btn-outline-success mb-3">Doručenie do 2-4
                                        dní</a>
                                </div>
                                <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5 5600H, 15.6"
                                    IPS antireflexný 1920 × 1080</p>
                                <p class="bold d-none d-lg-block">$ 999.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop For Real Banner Section -->
    <section id="shop_for_real_section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex align-items-center h-100">
                        <div class="shop_for_real_banner_content">
                            <p>Weekend Discounts</p>
                            <h3><span class="text-pink">Shopping</span> for real life</h3>
                            <div class="mt-5">
                                <a href="category_page.html" class="btn btn-pink">Shop now<i
                                        class="far fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center">
                        <img class="img-fluid" src="assets/images/banners/watches.png" alt="">
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
                                        <div class="mb-2">
                                            <a href="product_page.html" class="product-box-heading">HP Spectre
                                                x360
                                                2-in-1 15.6" 4K Ultra HD Touch ...
                                            </a>
                                        </div>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do
                                                2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5
                                            5600H,
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
                                        <div class="mb-2">
                                            <a href="product_page.html" class="product-box-heading">HP Spectre
                                                x360
                                                2-in-1 15.6" 4K Ultra HD Touch ...
                                            </a>
                                        </div>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do
                                                2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5
                                            5600H,
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
                                        <div class="mb-2">
                                            <a href="product_page.html" class="product-box-heading">HP Spectre
                                                x360
                                                2-in-1 15.6" 4K Ultra HD Touch ...
                                            </a>
                                        </div>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do
                                                2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5
                                            5600H,
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
                                        <div class="mb-2">
                                            <a href="product_page.html" class="product-box-heading">HP Spectre
                                                x360
                                                2-in-1 15.6" 4K Ultra HD Touch ...
                                            </a>
                                        </div>
                                        <div class="d-lg-none">
                                            <a href="" class="btn btn-green me-2 mb-3">Na sklade</a>
                                            <a href="" class="btn btn-outline-success mb-3">Doručenie do
                                                2-4 dní</a>
                                        </div>
                                        <p class="product-box-sm-para d-lg-none">Herný notebook – AMD Ryzen 5
                                            5600H,
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
    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
@endsection

@push('js')
<script>
    function cartToogle() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
</script>
<script>
    function Switch_Main_Banner() {
        if ($(window).width() < 992) {
            $('#collapseExample_dropdown').removeClass('show');
        } else {
            $('#collapseExample_dropdown').addClass('show');
        }
    }
    $(window).resize(function() {
        Switch_Main_Banner();
    });
</script>
<script>
    $('#main_banner').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        dots: true,
        center: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive: {
            0: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1,
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
    $('#category_carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2,
                autoplay: true,
                autoplayTimeout: 5000,
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });
</script>
@endpush
