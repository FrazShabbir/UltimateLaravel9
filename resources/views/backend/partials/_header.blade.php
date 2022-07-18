<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title','Laravel 9 BoilerPlate with preinstalled essential Kit') | {{fromSettings('site_title')}}</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset(fromSettings('favicon')??'backend/images/favicon.png')}}" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
<!-- Typography CSS -->
<link rel="stylesheet" href="{{asset('backend/css/typography.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
<!-- Full calendar -->
<link href='fullcalendar/core/main.css' rel='stylesheet' />
<link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
<link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
<link href='fullcalendar/list/main.css' rel='stylesheet' />

<link rel="stylesheet" href="{{asset('backend/css/flatpickr.min.css')}}">

@stack('css')
@yield('styles')