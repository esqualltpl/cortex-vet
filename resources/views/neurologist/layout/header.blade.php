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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

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

        /*//------Validation------\\*/
        .form-control.is-invalid {
            border: 1px solid #d2d6da;
            padding: 0.625rem 2.15rem !important;
            line-height: 1.3 !important;
        }
        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: #fd5c70 !important;
            padding-right: unset;
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e);
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 1rem 1rem;
        }
        /*//------Validation End------\\*/

        /*//------Dropdown Arrow------\\*/
        .form-select {
            background-size: 30px 12px !important;
        }
        /*//------Dropdown Arrow End------\\*/
    </style>
    @yield('style')
</head>