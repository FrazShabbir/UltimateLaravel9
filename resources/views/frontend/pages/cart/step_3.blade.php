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
                                <div class="gradient_div">
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
                    <div class="">
                        <h3 class="bold mb-4">
                            Kontaktné údaje
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="">
                        <nav>
                            <div class="nav nav-tabs cart_setp_3_nav" id="nav-tab" role="tablist">
                                <button class="nav-link active bg-transparent" id="seba-tab" data-bs-toggle="tab"
                                    data-bs-target="#seba" type="button" role="tab" aria-controls="seba"
                                    aria-selected="true">Nakupujem pre seba</button>
                                <button class="nav-link bg-transparent" id="firmu-tab" data-bs-toggle="tab"
                                    data-bs-target="#firmu" type="button" role="tab" aria-controls="firmu"
                                    aria-selected="false">Nakupujem pre firmu</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="seba" role="tabpanel"
                                aria-labelledby="seba-tab" tabindex="0">
                                <div class="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="cart_step_3_form" action="">
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Krstné meno</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Vaše meno">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Priezvisko</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Vaše priezvisko">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Vaše
                                                            priezvisko</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Ulica">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">PSČ</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="PSČ">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Mesto</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Mesto">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Emailová
                                                            adresa</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="@">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Telefónne
                                                            číslo</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="+421">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Rovnaká fakturačná adresa
                                                        </label>
                                                    </div>
                                                    <div class="mt-5">
                                                        <h3 class="bold mb-3">
                                                            Obchodné podmienky
                                                        </h3>
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Súhlasím s uvedenými <a href=""><u>obchodnými
                                                                        podmienkami</u></a>
                                                            </label>
                                                        </div>
                                                        <div class="">
                                                            <p class="small text-muted">
                                                                Vaše <a href=""><u>osobné údaje</u></a> spracovávame tiež pre vedenie
                                                                vášho užívateľského účtu a ďalšie účely. Bližšie
                                                                informácie o spracovaní osobných údajov, najmä
                                                                ďalších účeloch spracovania, prenos údajov mimo EÚ a
                                                                vašich právach, nájdete v sekcii <a href=""><u>Ochrana osobných
                                                                    údajov</u></a>.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="firmu" role="tabpanel" aria-labelledby="firmu-tab"
                                tabindex="0">
                                <div class="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <form class="cart_step_3_form" action="">
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Krstné meno</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Vaše meno">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Priezvisko</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Vaše priezvisko">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Vaše
                                                            priezvisko</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Ulica">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">PSČ</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="PSČ">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Mesto</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="Mesto">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Emailová
                                                            adresa</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="@">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Telefónne
                                                            číslo</label>
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="+421">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Rovnaká fakturačná adresa
                                                        </label>
                                                    </div>
                                                    <div class="mt-5">
                                                        <h3 class="bold mb-3">
                                                            Obchodné podmienky
                                                        </h3>
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Súhlasím s uvedenými <a href=""><u>obchodnými
                                                                        podmienkami</u></a>
                                                            </label>
                                                        </div>
                                                        <div class="">
                                                            <p class="small text-muted">
                                                                Vaše <a href=""><u>osobné údaje</u></a> spracovávame tiež pre vedenie
                                                                vášho užívateľského účtu a ďalšie účely. Bližšie
                                                                informácie o spracovaní osobných údajov, najmä
                                                                ďalších účeloch spracovania, prenos údajov mimo EÚ a
                                                                vašich právach, nájdete v sekcii <a href=""><u>Ochrana osobných
                                                                    údajov</u></a>.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
                                <a class="btn btn-green-main" href="cart_step_4.html">Prejsť na súhrn <i
                                        class="far fa-angle-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-start mt-5">
                        <a class="text-muted" href="cart_step_2.html"><i class="far fa-arrow-left me-3"></i>Predchádzajúce</a>
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

@endpush
