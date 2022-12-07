<!DOCTYPE html>
<html lang="en">

@include('frontend.partials._header')

<body>

    <div class="body-wrapper">

        @include('frontend.partials._navbar')


        @yield('content')
        <!-- Main Banner -->
    
@include('frontend.partials._footer')

    </div>







   @include('frontend.partials._scripts')
</body>

</html>
