<!doctype html>
<html lang="en">

<head>
    @include('backend.partials._header')

</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">

               @include('backend.partials._logo')

                
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                        <div class="hover-circle"><i class="ri-close-fill"></i></div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                @include('backend.partials._sidebar')
            </div>
        </div>
        <!-- TOP Nav Bar -->
        @include('backend.partials._top_navbar')
        <!-- TOP Nav Bar END -->

        <!-- Page Content  -->

        @yield('content')
    </div>
    <!-- Page Content END  -->


@include('backend.partials._colorizor')
    <!-- Wrapper END -->
    <!-- Footer -->
    @include('backend.partials._footer')
    <!-- Footer END -->
    @include('backend.partials._scripts')
    @include('sweetalert::alert')
</body>

</html>
