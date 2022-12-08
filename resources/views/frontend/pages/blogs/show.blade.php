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
                        <span class="text-pink bold overflow-x-hidden">Blog</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Detail Section -->
<section class="custom-bg-light pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                <div class="">
                    <div class="">
                        <img class="w-100" src="assets/images/blogs/blog_detail/1.png" alt="">
                    </div>
                    <div class="blog_detail_content">
                        <div class="">
                            <p class="mb-0">25. 05. 2022</p>
                            <h2>Samsung S22 Ultra 5G</h2>
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
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Blogs Section -->
<section class="custom-bg-light pt-5 border-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-5">
                    <h3 class="text-dark bold">Ďalšie články</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="bg-white blog_outer_div">
                    <div class="">
                        <img class="w-100 mb-4" src="assets/images/blogs/blog-1.png" alt="">
                    </div>
                    <div class="">
                        <h5 class="bold mb-0">Samsung S22 Ultra 5G</h5>
                        <p class="small text-muted">25. 05. 2022</p>
                    </div>
                    <div class="">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...</p>
                        <a href="blog_detail.html"><u>Čítať celý článok</u></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="bg-white blog_outer_div">
                    <div class="">
                        <img class="w-100 mb-4" src="assets/images/blogs/blog-2.png" alt="">
                    </div>
                    <div class="">
                        <h5 class="bold mb-0">Samsung S22 Ultra 5G</h5>
                        <p class="small text-muted">25. 05. 2022</p>
                    </div>
                    <div class="">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...</p>
                        <a href="blog_detail.html"><u>Čítať celý článok</u></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="bg-white blog_outer_div">
                    <div class="">
                        <img class="w-100 mb-4" src="assets/images/blogs/blog-1.png" alt="">
                    </div>
                    <div class="">
                        <h5 class="bold mb-0">Samsung S22 Ultra 5G</h5>
                        <p class="small text-muted">25. 05. 2022</p>
                    </div>
                    <div class="">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mauris sapien, faucibus in egestas id, blandit pretium purus. Etiam sed metus scelerisque...</p>
                        <a href="blog_detail.html"><u>Čítať celý článok</u></a>
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
