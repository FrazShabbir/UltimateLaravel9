@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')

<section class="custom-bg-light pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
             @include('frontend.pages.products.partials.sidebar')
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="row mt-4" id="product_list_row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white mt-3 mt-lg-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mt-lg-4 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_1.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_2.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_3.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_4.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_5.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_6.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white mt-3 mt-lg-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mt-lg-4 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_1.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_2.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_3.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_4.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_5.png"
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
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="product-box d-flex d-lg-block bg-white">
                            <span class="badge bg-orange rounded-1 d-none d-lg-inline-block">TOP produkt</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-center pt-lg-5 mb-lg-5 me-3 me-lg-0">
                                    <img class="img-fluid mb-5 mb-lg-0" src="assets/images/products/phone_6.png"
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
            <div class="col-12">
                <div class="">
                    <div
                        class="d-flex justify-content-center justify-content-lg-between pagination_border py-3 mt-5">
                        <div class="pagination_prev">
                            <a href=""><i
                                    class="fal fa-arrow-left me-2 d-none d-lg-inline-block"></i>Predchádzajúce</a>
                        </div>
                        <div class="pagination_numbers d-none d-lg-block">
                            <a href="">
                                1
                            </a>
                            <a class="active" href="">
                                2
                            </a>
                            <a href="">
                                3
                            </a>
                            <span>
                                ...
                            </span>
                            <a href="">
                                8
                            </a>
                            <a href="">
                                9
                            </a>
                            <a href="">
                                10
                            </a>
                        </div>
                        <div class="pagination_next">
                            <a href="">Ďalšie<i
                                    class="fal fa-arrow-right ms-2 d-none d-lg-inline-block"></i></a>
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

@endpush
