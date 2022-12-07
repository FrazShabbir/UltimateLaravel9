<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials._header')

</head>
<body>
    <div id="cursor"></div>
    <div id="cursor-border"></div>
    <div class="body_wrapper">
        {{-- Website Navbar will be Here --}}
        @include('frontend.partials._navbar')
        {{-- Page Content Will be here --}}
        @yield('content')
    </div>
    {{-- Website Footer Will be here --}}
    @include('frontend.partials._footer')
    {{-- Script tag and code will be here --}}
    @include('frontend.partials._scripts')
</body>
</html>
