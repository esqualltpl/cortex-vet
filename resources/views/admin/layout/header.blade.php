<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('portal/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('portal/assets/img/Fav Icon.png') }}">
    <title>@yield('title') | {{config('app.name')}} </title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('portal/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('portal/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('portal/assets/css/material-dashboard.css?v=3.0.5') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{--<style>
        .card .card-footer {
            padding: 3%;
            background-color: transparent;
        }

        .card .card-header {
            padding: 1.5rem;
            padding-bottom: 0px !important;
        }
    </style>--}}
    <style>
        .navbar-vertical .navbar-nav .nav-link.active {
            background: #8871C0 !important;
        }
    </style>
    @yield('style')
</head>