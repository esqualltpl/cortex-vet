<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('portal/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('portal/assets/img/Fav Icon.png') }}">
    <title>Rest Password Success | {{config('app.name')}} </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="{{ asset('portal/assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('portal/assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('portal/assets/css/material-dashboard.css?v=3.0.5') }}" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body class="g-sidenav-show" style="background-color: #FAFAFA;">
<nav class="navbar px-md-7 navbar-expand-lg position-absolute top-0 z-index-3 shadow-none my-3 navbar-transparent mt-4">
    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-md-3 text-white" href="javascript:">
        <img src="{{ asset('portal/assets/img/Logo.png') }}" width="200px" alt="Logo"/>
        <div class="position-relative  h-100 m-3  border-radius-lg d-flex flex-column justify-content-start">
            <h2 class="">Hi,</h2>
            <h5>Welcome to Cortex Vet!</h5>
        </div>
    </a>
</nav>
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-start flex-column"
                         style="background-color: #EFE6FB;">
                        <img src="{{ asset('portal/assets/img/Images.png') }}" class="img-fluid mx-auto" width="60%"
                             style="margin-top: 30%" alt="side Image"/>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 d-flex flex-column ms-lg-auto px-1 me-lg-8 mt-5">
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <div class="">
                                <div class="text-center ">
                                    <img src="{{ asset('portal/assets/img/Password Reset.png') }}" alt="">
                                    <h4 class="font-weight-bolder text-center mt-3">Password Reset</h4>
                                    <p class="text-center my-3">Your password has been successfully reset.<br> Click below to log in magically.</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" onclick="window.location.href = '{{ route('practitioner.authentication.magically.login', ['email'=>request()->email, 'password'=> request()->password]) }}'" class="btn btn-primary mt-4 w-80 btn-lg py-2 text-white mb-2">
                                    Continue
                                </button>
                            </div>
                            <div class="text-center mt-4">
                                <a href="{{ route('practitioner.authentication.login') }}" class="text-start text-decoration-none" style="color: #41A0B0 !important;">
                                    <i class="fa fa-arrow-left"></i>
                                    <span class="mb-0 px-2" style="color: #41A0B0 !important; font-weight: bold">Back to Login</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
<script src="{{ asset('portal/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<!-- Kanban scripts -->
<script src="{{ asset('portal/assets/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/jkanban/jkanban.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/world.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/datatables.js') }}"></script>
<script>
    document.querySelectorAll('.toggle-password').forEach(function (element) {
        element.addEventListener('click', function () {
            const passwordInput = this.parentElement.previousElementSibling;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.innerHTML = '<i class="fas fa-eye-slash" style="cursor: pointer; padding-right: 8px;"></i>';
            } else {
                passwordInput.type = 'password';
                this.innerHTML = '<i class="fas fa-eye" style="cursor: pointer; padding-right: 8px;"></i>';
            }
        });
    });

    // Function to open a specific tab content
    function openCity(evt, cityName) {
        // your existing code to switch tabs
    }

    // Function to set the default active tab
    window.onload = function () {
        // Get the element with id "defaultOpen" (the first tab button)
        var defaultTabButton = document.getElementById("defaultOpen");

        // Trigger a click event on the default tab button
        defaultTabButton.click();
    };

    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('portal/assets/js/material-dashboard.min.js?v=3.0.5') }}"></script>
</body>

</html>