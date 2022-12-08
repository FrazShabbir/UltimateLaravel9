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
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="moji-tab" data-bs-toggle="pill" data-bs-target="#moji" type="button" role="tab" aria-controls="moji" aria-selected="true"><i class="fal fa-user me-3"></i>Môj profil</button>
                        <button class="nav-link" id="objednavky-tab" data-bs-toggle="pill" data-bs-target="#objednavky" type="button" role="tab" aria-controls="objednavky" aria-selected="false"><i class="fal fa-box-alt me-3"></i>Moje objednávky</button>
                      </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 set_boder_on_lg">
                <div class="">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="moji" role="tabpanel" aria-labelledby="moji-tab" tabindex="0">
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
                                                        Váš profil obsahuje informácie, ktoré ste zadali pri prvom nákupe. Tu si ich môžete kedykoľvek zmeniť pre rýchlejší a pohodlnejší nákup.
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
                                                                        <label for="" class="form-label mb-1">Krstné meno</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="Vaše meno" value="René">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">Priezvisko</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="Mrkvička" value="Mrkvička">
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">Mesto</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="Mesto">
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">PSČ</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="PSČ">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">Ulica a popisné číslo</label>
                                                                        <input type="text" class="form-control" id=""
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
                                                                        <label for="" class="form-label mb-1">Názov firmy</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="Názov firmy">
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">IČ DPH</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="Mesto">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">IČO</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="IČO">
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
                                                                        <label for="" class="form-label mb-1">Emailová adresa</label>
                                                                        <input type="text" class="form-control" disabled id=""
                                                                            value="jozko@mrkvicka">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">Telefónne číslo</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="0900 000 000">
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
                                                                        <label for="" class="form-label mb-1">Mesto</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="Mesto">
                                                                    </div> 
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">PSČ</label>
                                                                        <input type="text" class="form-control" id=""
                                                                            placeholder="PSČ">
                                                                    </div> 
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="mb-4">
                                                                        <label for="" class="form-label mb-1">Ulica a popisné číslo</label>
                                                                        <input type="text" class="form-control" id=""
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
                        <div class="tab-pane fade" id="objednavky" role="tabpanel" aria-labelledby="objednavky-tab" tabindex="0">
                            <div class="mt-5 mt-lg-0">
                                <div class="moj_profile_form">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-5">
                                                    <h2 class="bold text-dark">
                                                        Moje objednávky
                                                    </h2>
                                                    <p class="text-muted">
                                                        Skontrolujte stav posledných objednávok, spravujte vrátenia a sťahujte faktúry.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card moj_objednavky_card">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Objednané
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Október 22, 2021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Číslo objednávky
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            00000012021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Celkom s DPH
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Celkom s DPH
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-12 col-sm-12">
                                                                    <div class="text-end">
                                                                        <a class="btn btn-green btn-sm mt-2" href="">Otvorená</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-12 col-sm-12">
                                                                    <div class="moj_objednavky_set_btn_position mb-5">
                                                                        <div class="d-flex justify-content-end w-100">
                                                                            <div class="moj_profile_circel_link me-3">
                                                                                <a href="">
                                                                                    <i class="far fa-file"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="moj_profile_circel_link_angle">
                                                                                <a class="" href="moj_detail.html">
                                                                                    <i class="far fa-angle-right"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card moj_objednavky_card">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Objednané
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Október 22, 2021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Číslo objednávky
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            00000012021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Celkom s DPH
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Celkom s DPH
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-12 col-sm-12">
                                                                    <div class="text-end">
                                                                        <a class="btn btn-green btn-sm mt-2" href="">Otvorená</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-12 col-sm-12">
                                                                    <div class="moj_objednavky_set_btn_position mb-5">
                                                                        <div class="d-flex justify-content-end w-100">
                                                                            <div class="moj_profile_circel_link me-3">
                                                                                <a href="">
                                                                                    <i class="far fa-file"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="moj_profile_circel_link_angle">
                                                                                <a class="" href="moj_detail.html">
                                                                                    <i class="far fa-angle-right"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card moj_objednavky_card">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Objednané
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Október 22, 2021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Číslo objednávky
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            00000012021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Celkom s DPH
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Celkom s DPH
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-12 col-sm-12">
                                                                    <div class="text-end">
                                                                        <a class="btn btn-green btn-sm mt-2" href="">Otvorená</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-12 col-sm-12">
                                                                    <div class="moj_objednavky_set_btn_position mb-5">
                                                                        <div class="d-flex justify-content-end w-100">
                                                                            <div class="moj_profile_circel_link me-3">
                                                                                <a href="">
                                                                                    <i class="far fa-file"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="moj_profile_circel_link_angle">
                                                                                <a class="" href="moj_detail.html">
                                                                                    <i class="far fa-angle-right"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="card moj_objednavky_card">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Objednané
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Október 22, 2021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Číslo objednávky
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            00000012021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                                    <div class="mb-5">
                                                                        <h5 class="bold">
                                                                            Celkom s DPH
                                                                        </h5>
                                                                        <p class="mb-0 text-muted small">
                                                                            Celkom s DPH
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row">
                                                                <div class="col-lg-5 col-md-12 col-sm-12">
                                                                    <div class="text-end">
                                                                        <a class="btn btn-green btn-sm mt-2" href="">Otvorená</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7 col-md-12 col-sm-12">
                                                                    <div class="moj_objednavky_set_btn_position mb-5">
                                                                        <div class="d-flex justify-content-end w-100">
                                                                            <div class="moj_profile_circel_link me-3">
                                                                                <a href="">
                                                                                    <i class="far fa-file"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="moj_profile_circel_link_angle">
                                                                                <a class="" href="moj_detail.html">
                                                                                    <i class="far fa-angle-right"></i>
                                                                                </a>
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
