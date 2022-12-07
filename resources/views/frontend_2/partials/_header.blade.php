<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title','Tools & Seo')</title>
{{-- Files --}}
{{-- Jquery --}}
<script src="{{asset('frontend/js/jquery.js')}}"></script>
{{-- Bootstrap 5.2 --}}
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
{{-- FontAwesome 6.1.2 Pro --}}
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
{{-- Custom CSS --}}
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


@yield('styles')
@stack('css')