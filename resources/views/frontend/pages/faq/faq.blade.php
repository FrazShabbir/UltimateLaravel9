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
                    <p class="mb-0 ms-2 breadcrumbs_outer_div w-100">
                        <a class="text-muted" href="index.html"><i class="fal fa-home-lg-alt "></i></a>
                        <i class="far fa-angle-right ms-2 me-2"></i>
                        <span class="text-pink bold overflow-x-hidden">FAQ</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Detail Section -->
<section class="custom-bg-light pt-4 pb-5 border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">  
                    <h1 class="bold">FAQ</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="custom-bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                <div class="faq_outer_div">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                You're half-way there!
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p class="text-muted">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae facere aliquam nulla? Harum iusto sunt, dignissimos illum nostrum corrupti impedit laborum ea repudiandae sequi fugiat eligendi magni eos accusamus?
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                We'll show you more stories from the topics you pick
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="text-muted">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae facere aliquam nulla? Harum iusto sunt, dignissimos illum nostrum corrupti impedit laborum ea repudiandae sequi fugiat eligendi magni eos accusamus?
                                  </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                We'll show you more stories from the topics you pick
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="text-muted">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae facere aliquam nulla? Harum iusto sunt, dignissimos illum nostrum corrupti impedit laborum ea repudiandae sequi fugiat eligendi magni eos accusamus?
                                  </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                We'll show you more stories from the topics you pick
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p class="text-muted">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae facere aliquam nulla? Harum iusto sunt, dignissimos illum nostrum corrupti impedit laborum ea repudiandae sequi fugiat eligendi magni eos accusamus?
                                  </p>
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
