@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')

<section class="custom-bg-light" id="moj_profile_page_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="moj_profile_side_btn">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link" id="moji-tab" data-bs-toggle="pill" data-bs-target="#moji"
                            type="button" role="tab" aria-controls="moji" aria-selected="false"><i
                                class="fal fa-user me-3"></i>Môj profil</button>
                        <button class="nav-link active" id="objednavky-tab" data-bs-toggle="pill"
                            data-bs-target="#objednavky" type="button" role="tab" aria-selected="true"
                            aria-controls="objednavky"><i class="fal fa-box-alt me-3"></i>Moje
                            objednávky</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 set_boder_on_lg">
                <div class="">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="moji" role="tabpanel" aria-labelledby="moji-tab"
                            tabindex="0">
                            <div class="mt-5 mt-lg-0">
                                <form class="moj_profile_form" action="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-5">
                                                    <h2 class="bold text-dark">
                                                        Môj profil
                                                    </h2>
                                                    <p class="text-muted">
                                                        Váš profil obsahuje informácie, ktoré ste zadali pri
                                                        prvom nákupe. Tu si ich môžete kedykoľvek zmeniť pre
                                                        rýchlejší a pohodlnejší nákup.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="">
                                                    <div class="card moj_profile_card">
                                                        <h4 class="bold">Fakturačná adresa</h4>
                                                        <hr>
                                                        <div class="">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Krstné
                                                                            meno</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Vaše meno"
                                                                            value="René">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Priezvisko</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Mrkvička"
                                                                            value="Mrkvička">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Mesto</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Mesto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">PSČ</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="PSČ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Ulica a
                                                                            popisné číslo</label>
                                                                        <input type="text" class="form-control"
                                                                            id=""
                                                                            placeholder="Ulica a popisné číslo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card moj_profile_card">
                                                        <h4 class="bold">Firemné údaje</h4>
                                                        <hr>
                                                        <div class="">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Názov
                                                                            firmy</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Názov firmy">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">IČ
                                                                            DPH</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Mesto">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">IČO</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="IČO">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card moj_profile_card">
                                                        <h4 class="bold">Kontaktné údaje</h4>
                                                        <hr>
                                                        <div class="">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Emailová
                                                                            adresa</label>
                                                                        <input type="text" class="form-control"
                                                                            disabled id=""
                                                                            value="jozko@mrkvicka">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Telefónne
                                                                            číslo</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="0900 000 000">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card moj_profile_card">
                                                        <h4 class="bold">Dodacia adresa</h4>
                                                        <hr>
                                                        <div class="">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Mesto</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Mesto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">PSČ</label>
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="PSČ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for=""
                                                                            class="form-label mb-1">Ulica a
                                                                            popisné číslo</label>
                                                                        <input type="text" class="form-control"
                                                                            id=""
                                                                            placeholder="Ulica a popisné číslo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <a class="btn btn-green-main" href="">
                                                            Uložiť zmeny<i class="far fa-angle-right ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="objednavky" role="tabpanel"
                            aria-labelledby="objednavky-tab" tabindex="0">
                            <div class="mt-5 mt-lg-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <h3 class="bold mb-3">
                                                    Číslo objednávky 00000012021
                                                </h3>
                                                <a class="text-muted bold" href=""><i
                                                        class="far fa-arrow-left me-2 mt-1"></i> Späť na
                                                    zoznam</a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-12 mt-3 mb-5">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-12">
                                                    <div class="mb-5 mb-lg-0 mb-md-0">
                                                        <img src="assets/images/products/moj-product.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="">
                                                        <p class="text-muted">HP Spectre x360 2-in-1 15.6" 4K
                                                            Ultra HD Touch ...</p>
                                                        <div class="d-flex justify-content-strat">
                                                            <div class="me-5">
                                                                <p class="mb-0">
                                                                    <span class="bold">
                                                                        Množstvo:
                                                                    </span>
                                                                    1
                                                                </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="mb-0">
                                                                    <span class="bold">
                                                                        Cena:
                                                                    </span>
                                                                    500,00 €
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-12 mt-3 mb-5">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-12">
                                                    <div class="mb-5 mb-lg-0 mb-md-0">
                                                        <img src="assets/images/products/moj-product.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="">
                                                        <p class="text-muted">HP Spectre x360 2-in-1 15.6" 4K
                                                            Ultra HD Touch ...</p>
                                                        <div class="d-flex justify-content-strat">
                                                            <div class="me-5">
                                                                <p class="mb-0">
                                                                    <span class="bold">
                                                                        Množstvo:
                                                                    </span>
                                                                    1
                                                                </p>
                                                            </div>
                                                            <div class="">
                                                                <p class="mb-0">
                                                                    <span class="bold">
                                                                        Cena:
                                                                    </span>
                                                                    500,00 €
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-12 mt-3 mb-5">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                                    <div class="mod_detail_sposob_card">
                                                        <h4 class="bold">Fakturačná adresa</h4>
                                                        <hr>
                                                        <p class="mb-5 text-muted">
                                                            René Mrkvička<br/>
                                                            Wilcza 46,<br/>
                                                            92201, Piešťany
                                                        </p>
                                                        <h4 class="bold">Spôsob platby</h4>
                                                        <hr>
                                                        <p class="text-muted mb-0">
                                                            Platba prevodom<br/>
                                                            IBAN: SK68 0200 0000 0032 3550 3757<br/>
                                                            VS: 0000012021
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                                    <div class="mod_detail_sposob_card">
                                                        <h4 class="bold">Dodacia adresa</h4>
                                                        <hr>
                                                        <p class="mb-5 text-muted">
                                                            René Mrkvička<br/>
                                                            Wilcza 46,<br/>
                                                            92201, Piešťany
                                                        </p>
                                                        <h4 class="bold">Doručenie objednávky</h4>
                                                        <hr>
                                                        <p class="text-muted mb-0">
                                                            Kuriér na adresu<br/>
                                                            DPD, doručenie do 2 - 4 pracovných dní<br><br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-5">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <p class="mb-0">
                                                        Celkom bez DPH
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="mb-0">
                                                        140,83 €
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <p class="mb-0">
                                                        Doprava
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="mb-0">
                                                        0,00 €
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <p class="mb-0">
                                                        DPH
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="mb-0">
                                                        28,17 €
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <p class="bold mb-0">
                                                        Celkom s DPH
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <h3 class="bold">
                                                        179,00 €
                                                    </h3>
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

@endsection


@section('scripts')
@endsection

@push('js')
<script>
    function cartToogle() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
</script>
@endpush
