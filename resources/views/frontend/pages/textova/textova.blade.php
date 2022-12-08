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
                            <span class="text-pink bold overflow-x-hidden">Textová page</span>
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
                        <h1 class="bold">Textová page</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-bg-light pt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                    <div class="">
                        <div class="blog_detail_content">
                            <div class="">
                                <p class="mb-0">Today's Deal</p>
                                <h3 class="bold">Samsung S22 Ultra 5G</h3>
                            </div>
                            <div class="">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                </p>
                            </div>
                            <div class="">
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center">
                            <img class="" src="assets/images/textova.png" alt="">
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
