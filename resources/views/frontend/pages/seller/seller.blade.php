@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')


   <!-- breadcrumbs -->
   <div class="custom-bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <p class="mb-0 ms-2">
                        <a class="text-muted" href="index.html"><i class="fal fa-home-lg-alt "></i></a> <i
                            class="far fa-angle-right ms-2 me-2"></i> <span class="text-pink bold">Seller
                            profile</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Banner -->
<section class="custom-bg-light pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_banner_div seller_profile_banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-7">
                                <div class="main_banner_content ps-0 ps-lg-5 ms-0 ms-lg-5">
                                    <h1 class="bold">We Provide <br />
                                        Best Products</h1>
                                    <p class="d-none d-lg-block text-muted">You can buy anything for a
                                        reasonable price from our store.</p>
                                    <a class="btn btn-pink" href="">Register with Us<i
                                            class="far fa-angle-right ms-3"></i></a>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex align-items-lg-end align-items-center h-100">
                                    <img class="w-100" src="assets/images/banners/seller_profile_banner.png"
                                        alt="main_banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custom-bg-light pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="">
                    <div class="seller_user_box">
                        <div class="text-center mb-4">
                            <img class="rounded-circle seller_user_img"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dXNlcnxlbnwwfHwwfHw%3D&w=1000&q=80"
                                alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <p class="seller_user_heading">Seller One Profile</p>
                                <p class="seller_user_content">Member since Feb, 2022</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <p class="small text-muted ms-2 mb-2">(5.0)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <a class="btn side_bar_collaspe_btn w-100 d-lg-none text-start" data-bs-toggle="collapse" href="#sidebarfilters"
                            role="button" aria-expanded="true" aria-controls="sidebarfilters">
                            <i class="far fa-bars text-muted me-3"></i>Upresniť parametre
                        </a>
                    </div>
                    <div class="collapse show" id="sidebarfilters">
                        <div class="custom-bg-light side_bar_filter_div">
                            <p class="bold">Condition</p>
                            <div class="bg-white pt-3">
                                <ul>
                                    <li>
                                        <a href="">New</a>
                                    </li>
                                    <li>
                                        <a href="">Renewed</a>
                                    </li>
                                    <li>
                                        <a href="">Top produkt</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="bold">Department</p>
                            <div class="bg-white pt-3">
                                <ul>
                                    <li>
                                        <a href="">Cell Phones</a>
                                    </li>
                                    <li>
                                        <a href="">Cell Phones Cases & Covers</a>
                                    </li>
                                    <li>
                                        <a href="">Cell Phone Basic Cases</a>
                                    </li>
                                    <li>
                                        <a href="">See All 4 Departments</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="bold">Customer Reviews</p>
                            <div class="bg-white pt-3">
                                <ul>
                                    <li>
                                        <a href="">Cell Phones</a>
                                    </li>
                                    <li>
                                        <a href="">Cell Phones Cases & Covers</a>
                                    </li>
                                    <li>
                                        <a href="">Cell Phone Basic Cases</a>
                                    </li>
                                    <li>
                                        <a href="">See All 4 Departments</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="bold">Brand</p>
                            <div class="bg-white pt-3">
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="apple">
                                            <label class="form-check-label" for="apple">
                                                Apple
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="samsung">
                                            <label class="form-check-label" for="samsung">
                                                Samsung Electronics
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="xiaomi">
                                            <label class="form-check-label" for="xiaomi">
                                                Xiaomi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="nokia">
                                            <label class="form-check-label" for="nokia">
                                                Nokia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="blu">
                                            <label class="form-check-label" for="blu">
                                                BLU
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="doge">
                                            <label class="form-check-label" for="doge">
                                                DOOGEE
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="motorola">
                                            <label class="form-check-label" for="motorola">
                                                Motorola
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="row" id="product_list_row">
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
<script>
    function Switch_Menu() {
        if ($(window).width() < 992) {
            $('#sidebarfilters').removeClass('show');
        } else {
            $('#sidebarfilters').addClass('show');
        }
    }
    $(window).resize(function () { Switch_Menu(); });
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
