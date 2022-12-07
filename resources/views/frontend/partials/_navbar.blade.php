<header>
    <div class="top_nav d-none d-lg-block d-xl-block custom-bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="country_flag_dropdown">
                        <div class="dropdown">
                            <button class="btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class="fi fi-sk me-2"></span>EN
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><span class="fi fi-us me-2"></span>EN</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="fi fi-pk me-2"></span>PK</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><span class="fi fi-sl me-2"></span>SL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-end custom-dark-text d-flex justify-content-end align-items-center h-100">
                        <a href="seller_profile.html" class="custom-dark-text">
                            <i class="far fa-user me-1"></i>
                            Prihlásiť sa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search_nav d-none d-lg-block d-xl-block py-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex align-items-center h-100 ">
                        <a href="index.html">
                            <img src="{{asset('frontend/assets/images/logo.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="input-group">
                            <div class="dropdown">
                                <button class="btn nav-search-dropdwn-btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Všetky kategórie
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control nav-search" placeholder="Váš e-mail">
                            <span class="input-group-text">
                                <button data-bs-toggle="collapse" data-bs-target="#collapse_search_dropdown"
                                    aria-expanded="false" aria-controls="collapse_search_dropdown" type="button"
                                    class="btn border-0 nav-search-btn text-white h-100"><i
                                        class="far fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end align-items-center h-100">
                        <a onclick="cartToogle()" href="#">
                            <i class="fal fa-shopping-cart cart_icon position-relative">
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart_badge_fs">
                                    5
                                    <span class="visually-hidden">Products Added</span>
                                </span>
                            </i>
                            <span class="cart_price">125.00€</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-lg-none" href="#">
                    <img src="assets/images/logo.png" width="100px" alt="Logo">
                </a>
                <div class="ms-auto d-lg-none">
                    <ul class="d-flex ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapse_search" aria-expanded="false"
                                aria-controls="collapse_search">
                                <i class="far fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-user me-1"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="cartToogle()" href="#">
                                <i class="fal fa-shopping-cart cart_icon position-relative">
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart_badge_fs">
                                        5
                                        <span class="visually-hidden">Products Added</span>
                                    </span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="category_page.html">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Today's Deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customer Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">Registry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gift Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Sell</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Cart Dropdown  -->
    <div id="dropdown_id" class="rounded-0">
        <div id="myDropdown" class="dropdown-content">

            <div class="card">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="fw-bold pt-4 mb-4">Váš nákupný košík</h5>
                        </div>
                    </div>
                    <div class="row px-3 mb-3">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 order-1">
                            <div class="d-flex align-items-center h-100">
                                <img class="w-100" src="assets/images/products/moj-product.png" alt="Mouse">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-7 order-2">
                            <span id="card_font_values">HP Spectre x360 2-in-1 15.6" 4K Ultra
                                HD Touch ...</span><br>
                            <span id="card_font_values"
                                class="fw-bold d-sm-none d-lg-none d-md-none">19.80€</span>
                        </div>
                        <div
                            class="col-lg-2 col-md-2 col-sm-2 col-12 order-lg-3 order-md-3 order-sm-3 d-none d-md-block d-sm-block d-lg-block order-4">
                            <div class="d-flex align-items-center h-100">
                                <span id="card_font_values" class="fw-bold">19.80€</span>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-2 order-lg-4 order-md-4 order-sm-4 order-3">
                            <div class="d-flex align-items-center h-100">
                                <span>
                                    <i class="far fa-times text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row px-3 mb-3">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 order-1">
                            <div class="d-flex align-items-center h-100">
                                <img class="w-100" src="assets/images/products/moj-product.png" alt="Mouse">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-7 order-2">
                            <span id="card_font_values">HP Spectre x360 2-in-1 15.6" 4K Ultra
                                HD Touch ...</span><br>
                            <span id="card_font_values"
                                class="fw-bold d-sm-none d-lg-none d-md-none">19.80€</span>
                        </div>
                        <div
                            class="col-lg-2 col-md-2 col-sm-2 col-12 order-lg-3 order-md-3 order-sm-3 d-none d-md-block d-sm-block d-lg-block order-4">
                            <div class="d-flex align-items-center h-100">
                                <span id="card_font_values" class="fw-bold">19.80€</span>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-2 order-lg-4 order-md-4 order-sm-4 order-3">
                            <div class="d-flex align-items-center h-100">
                                <span>
                                    <i class="far fa-times text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div id="dropdown_content_cart">
                                <div class="col-12">
                                    <div id="card_font_values"
                                        class="d-flex justify-content-between align-items-center">
                                        <div><span class="fw-bold fs-6">Celková
                                                suma </span> <span>vrátane
                                                DPH</span></div>
                                        <span class="fw-bold fs-4 pe-3">179,00 €</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div id="dropdown_content_cart_button">
                                <div class="col-12">
                                    <div class="">
                                        <!-- <span id="card_font_values" class="fs-5">Prejsť do
                                            košíka</span> <i class="fal fa-chevron-right ms-2"
                                            style="font-size: 9px;"></i> -->
                                        <a class="btn btn-green w-100 text-white" href="cart_list.html">Prejsť
                                            do košíka <i class="fal fa-chevron-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Searcg_bar on Monile Screen -->
    <section class="search_nav d-lg-none custom-bg-light pb-0 pt-2">
        <div class="container">
            <div class="row">
                <div class="collapse" id="collapse_search">
                    <div class="col-lg-6 ">
                        <div class="">
                            <div class="input-group">
                                <div class="dropdown">
                                    <button class="btn nav-search-dropdwn-btn dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Všetky kategórie
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <input type="text" class="form-control nav-search" placeholder="Váš e-mail">
                                <span class="input-group-text">
                                    <button data-bs-toggle="collapse" data-bs-target="#collapse_search_dropdown"
                                        aria-expanded="false" aria-controls="collapse_search_dropdown"
                                        type="button" class="btn border-0 nav-search-btn text-white h-100"><i
                                            class="far fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Dropdown -->
    <div class="collapse" id="collapse_search_dropdown">
        <div class="card rounded-0 bg-transparent">
            <div class="container">
                <div class="search_rows row px-lg-3">
                    <div class="col-lg-2 col-md-2 col-3">
                        <div class="d-flex align-items-center h-100">
                            <div class="">
                                <img class="w-100" src="assets/images/products/search_preducts/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-9">
                        <div class="d-flex align-items-center h-100">
                            <div class="">
                                <a href="category_page.html" class="text-muted small mb-0">
                                    <span class="text-dark">iPhone</span>
                                     13 Pro 128GB grafitovo sivá
                                </a>
                                <p class="bold mb-0 d-lg-none d-md-none">
                                    839,90 €
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 d-none d-lg-block d-md-block">
                        <div class="d-flex align-items-center justify-content-end h-100">
                            <div class="">
                                <p class="bold mb-0">
                                    839,90 €
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search_rows row px-lg-3">
                    <div class="col-lg-2 col-md-2 col-3">
                        <div class="d-flex align-items-center h-100">
                            <div class="">
                                <img class="w-100" src="assets/images/products/search_preducts/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-9">
                        <div class="d-flex align-items-center h-100">
                            <div class="">
                                <a href="category_page.html" class="text-muted small mb-0">
                                    <span class="text-dark">iPhone</span>
                                     13 Pro 128GB grafitovo sivá
                                </a>
                                <p class="bold mb-0 d-lg-none d-md-none">
                                    839,90 €
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 d-none d-lg-block d-md-block">
                        <div class="d-flex align-items-center justify-content-end h-100">
                            <div class="">
                                <p class="bold mb-0">
                                    839,90 €
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search_rows row px-lg-3">
                    <div class="col-lg-2 col-md-2 col-3">
                        <div class="d-flex align-items-center h-100">
                            <div class="">
                                <img class="w-100" src="assets/images/products/search_preducts/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-9">
                        <div class="d-flex align-items-center h-100">
                            <div class="">
                                <a href="category_page.html" class="text-muted small mb-0">
                                    <span class="text-dark">iPhone</span>
                                     13 Pro 128GB grafitovo sivá
                                </a>
                                <p class="bold mb-0 d-lg-none d-md-none">
                                    839,90 €
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 d-none d-lg-block d-md-block">
                        <div class="d-flex align-items-center justify-content-end h-100">
                            <div class="">
                                <p class="bold mb-0">
                                    839,90 €
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a href="#" class="btn btn-pink w-100 rounded-0">Zobraziť všetky výsledky <i
                        class="far fa-angle-right ms-2"></i> </a>
            </div>
        </div>

    </div>
</header>