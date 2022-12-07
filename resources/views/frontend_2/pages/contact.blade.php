@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')
    <div class="main_banner_desktop">
        <img src="{{ asset('frontend/images/banner_bg.png') }}" alt="">
        <div class="top_heading">
            <h1 class="text-dark">
                Mini Seo Tools
            </h1>
            <p class="text-dark">
                Enjoy All Free Tools At one Place
            </p>
        </div>
    </div>
    <section class="items">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3 data-cursor="pointer2">Get in Touch</h3>
                        <p data-cursor="pointer2">Dont stand there lonely, you can reach out via e-mail or come to our
                            studio.<br> We may have a lot to discuss, who knows.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_option_div">
                        <div class="text-center">
                            <i data-cursor="pointer2" class="fa-light fa-location-smile"></i>
                            <h3 data-cursor="pointer2">Location</h3>
                            <p data-cursor="pointer2">Gujrat, Pakistan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_option_div">
                        <div class="text-center">
                            <i data-cursor="pointer2" class="fa-light fa-mobile"></i>
                            <h3 data-cursor="pointer2">Phone</h3>
                            <a data-cursor="pointer" href="tel:">+92 345 678 9900</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact_option_div">
                        <div class="text-center">
                            <i data-cursor="pointer2" class="fa-light fa-paper-plane"></i>
                            <h3 data-cursor="pointer2">Mail</h3>
                            <a data-cursor="pointer" href="mailto:">contact@tools&seo.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26371889.266378395!2d-113.72794858620556!3d36.20973146104363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1662922728616!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h3 data-cursor="pointer2">Reach Out</h3>
                        <p data-cursor="pointer2">You can always contact us via this contact form. <br> We will require 1
                            bussiness day to reply (at worst). </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3">
                    <form action="">
                        <div class="mb-4">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="mail" class="form-control" id="email" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                        </div>
                        <div class="mb-4">
                            <textarea type="text" class="form-control" id="message" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="text-center">
                            <button data-cursor="pointer" type="button" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
@endsection

@push('js')
@endpush
