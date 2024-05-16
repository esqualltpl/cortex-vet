<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('portal/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('portal/assets/img/Fav Icon.png') }}">
    <title>Sign Up | {{config('app.name')}} </title>
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
    <style>
        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
            z-index: 1;

        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
            z-index: 1;
        }

        .form-control {
            padding-left: 35px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .form-select {
            padding-left: 35px !important;
            border-radius: 5px !important;
            border: 1px solid #ced4da !important;
        }

        .form-control:focus {
            outline: none;
            border: 1px solid #ced4da;
            box-shadow: none;
        }

        @media (max-width: 576px) {
            .img-container {
                display: none;
            }
        }


        #submit-btn {
            background-image: linear-gradient(#7B59CC, #5534A5);
        }

        /* imge */
        .img-container {
            background-color: #EFE6FB;

        }

        .logo {
            position: absolute;

            height: auto;

        }

        .welcome-text {
            margin-left: 20px;
            margin-top: 50px;
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
            /*background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e);*/
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
</head>

<body class="g-sidenav-show" style="background-color: #FAFAFA;">
<nav class="navbar px-md-7 navbar-expand-lg position-absolute top-0 z-index-3 shadow-none my-3 navbar-transparent mt-4">
    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-md-3 text-white" href="javascript:">
        <img src="{{ asset('portal/assets/img/Logo.png') }}" width="200px" alt="Logo"/>
        <div class="position-relative h-100 m-3 mt-5 border-radius-lg d-flex flex-column justify-content-start">
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
                        <img src="{{ asset('portal/assets/img/Images.png') }}" class="img-fluid mx-auto" width="78%"
                             style="margin-top: 38%" alt="side Image"/>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 d-flex flex-column ms-lg-auto px-1 me-lg-6 mt-5">
                        <form action="{{ route('sign.up.save') }}" method="post">
                            @csrf
                            <h3 class="mb-2">Sign Up</h3>
                            <p class="text-sm mb-4">Already have an account?
                                <a href="{{ route('login') }}" class="text-info font-weight-bold" style="text-decoration: none;">Sign In</a>
                            </p>
                            <div class="d-flex p-2" style="background-color: #EAF4F6;border-radius: 5px;">
                                <div class="form-check px-0">
                                    <input class="form-check-input" type="radio" name="type" value="Practitioner" id="customRadio1" checked>
                                    <label class="custom-control-label mb-0" for="customRadio1">Practitioner</label>
                                </div>
                                <div class="form-check mx-5">
                                    <input class="form-check-input" type="radio" name="type" value="Neurologist" id="customRadio2">
                                    <label class="custom-control-label mb-0" for="customRadio2">Neurologist</label>
                                </div>
                            </div>

                            <p class="mt-2"><b>Doctor's Information</b></p>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fa fa-user fa-regular"></i>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') ?? '' }}">
                                </div>
                                @error('name')
                                <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fa fa-envelope fa-regular"></i>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') ?? '' }}">
                                </div>
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <i class="fa fa-address-book"></i>
                                    <select class="form-select ps-3" aria-label="Default select example" name="contact_type">
                                        <option value="">Select Contact Type</option>
                                        <option {{ old('contact_type') ?? '' == 'Personal Mobile' ? 'selected' : '' }} value="{{ Crypt::encrypt('Personal Mobile') }}">Personal Mobile</option>
                                        <option {{ old('contact_type') ?? '' == 'Work Mobile' ? 'selected' : '' }} value="{{ Crypt::encrypt('Work Mobile') }}">Work Mobile</option>
                                        <option {{ old('contact_type') ?? '' == 'Home' ? 'selected' : '' }} value="{{ Crypt::encrypt('Home') }}">Home</option>
                                        <option {{ old('contact_type') ?? '' == 'Office' ? 'selected' : '' }} value="{{ Crypt::encrypt('Office') }}">Office</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fa fa-solid fa-phone"></i>
                                    <input type="text" class="form-control" placeholder="Contact No" name="contact_no" value="{{ old('contact_no') ?? '' }}">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fa fa-sharp fa-regular fa-id-card"></i>
                                    <input type="text" class="form-control" placeholder="Vet License" name="vet_license" value="{{ old('vet_license') ?? '' }}">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" class="form-control" placeholder="License State" name="license_state" value="{{ old('license_state') ?? '' }}">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fas fa-globe"></i>
                                    <input type="text" class="form-control" placeholder="License Country" name="license_country" value="{{ old('license_country') ?? '' }}">
                                </div>
                            </div>

                            <div class="mb-2">
                                <div class="input-group">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <select class="form-select ps-3" aria-label="Default select example" name="address">
                                        <option value="">Address</option>
                                        <option {{ old('address') ?? '' == 'Clinic' ? 'selected' : '' }} value="{{ Crypt::encrypt('Clinic') }}">Clinic</option>
                                        <option {{ old('address') ?? '' == 'Home' ? 'selected' : '' }} value="{{ Crypt::encrypt('Home') }}">Home</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <input type="text" class="form-control" placeholder="Main Street" name="main_street" value="{{ old('main_street') ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <i class="fas fa-city"></i>
                                            <input type="text" class="form-control" placeholder="City" name="city" value="{{ old('city') ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <i class="fas fa-flag-usa"></i>
                                            <input type="text" class="form-control" placeholder="State" name="state" value="{{ old('state') ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <i class="fas fa-location-arrow"></i>
                                            <input type="text" class="form-control" placeholder="Zip Code" name="zip_code" value="{{ old('zip_code') ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group">
                                    <i class="fa fa-solid fa-lock"></i>
                                    <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                </div>
                                @error('password')
                                <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <i class="fa fa-solid fa-lock"></i>
                                    <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-check ps-0">
                                    <input class="form-check-input" type="checkbox" name="terms_of_service" checked>
                                    <label class="custom-control-label" for="customCheck1">By signing up, I agree the
                                        <b class="text-info">Terms of Services</b></label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="submit" class="btn btn-primary btn-md py-2 text-white mb-2">
                                    Sign Up
                                </button>
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