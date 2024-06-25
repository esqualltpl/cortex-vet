@extends("student.layout.master")
@section('title')
    Settings
@endsection
@section('type')
    Student
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/settings gray.png') }}" alt="icon"/>
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Settings</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        button.btn.btn-primary.px-3.nav-link.cursor-pointer.btn-sm.text-white {
            padding: 6px 0px 6px 0px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="col-12">
            <div class="mx-3">
                <div class="tab-content card-background-white" id="v-pills-tabContent">
                    <div class="tab-pane fade show position-relative active" id="cam1" role="tabpanel"
                         aria-labelledby="cam1" loading="lazy">
                        <div class="row">
                            <div class="col-md-3 mx-0 px-0">
                                <div class="nav card flex-column nav-pills bg-white py-3 px-3 my-0" id="v-pills-tab"
                                     role="tablist" aria-orientation="vertical">
                                    <button class="nav-link h-navlinks px-2 py-2 my-0 mb-1 active" id="v-pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0 text-start px-0 mx-0 d-flex">
                                            <span class="text-sm">
                                                <i class="material-symbols-outlined float-start me-2 opacity-7" style="font-size: 22px">person</i>
                                                <span>Profile Information</span>
                                            </span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks px-2 py-2 my-0 mb-1 update-password-info" id="v-pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0 text-start px-0 mx-0 d-flex">
                                            <span class="text-sm">
                                                <i class="material-symbols-outlined float-start me-2 opacity-7" style="font-size: 22px">lock</i>
                                                <span>Update Password</span>
                                            </span>
                                        </p>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel">
                                        <div class="card p-4 personal-information-data">
                                            <div class="col-md-12 d-flex justify-content-between">
                                                <div class="col-md-6 d-flex">
                                                    <h5 style=" font-size: 17px; !important;">Personal Information</h5>
                                                </div>
                                                <div class="col-md-6 text-end cursor-pointer personal-information">
                                                    <span class="fa fa-edit text-success"></span>
                                                </div>
                                            </div>
                                            <div class="row" id="showedit">
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <img class="profile-image-show" src="{{ $settings['profile-information'] != null ? $settings['profile-information']->getUserPic() ?? '' : '' }}" alt="icon"
                                                             style="width: 90%; border-radius: 16px; border: 1px solid #cccccc; margin-top: 10px;">
                                                    </div>
                                                    <div class="col-md-9 d-flex flex-wrap justify-content-between  ">
                                                        <div class="col-md-12  ">
                                                            <h6>Doctor Information</h6>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="mb-0">Full Name</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->name ?? '' : '' }}
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <h6 class="mb-0">Email</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->email ?? '' : '' }}</p>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h6 class="mb-0">Personal Mobile</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->contact_no ?? '' : '' }}
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <h6 class="mb-0">Vet License</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->vet_license ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <h6 class="mb-0">License State</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->license_state ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <h6 class="mb-0">License Country</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->license_country ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-12 mt-3">
                                                            <h6>Address Detail</h6>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="mb-0">Main street</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->main_street ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="mb-0">City</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->city ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="mb-0">State/Country</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->state ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="mb-0">Zip Code</h6>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->zip_code ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card p-3 mt-3 d-none personal-information-update-data">
                                            <form id="save-profile-info-form">
                                                @csrf
                                                <div class="row justify-content-start">
                                                    <div class="d-flex">
                                                        <i class="fa fa-arrow-left mt-1 cursor-pointer back-personal-information" aria-hidden="true"></i>
                                                        <h6 class="mx-2">Personal Information</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-3 position-relative">
                                                    <span id="profile-image-hide">
                                                        <img class="profile-image-show" src="{{ $settings['profile-information'] != null ? $settings['profile-information']->getUserPic() ?? '' : '' }}"
                                                             alt="icon" style="width: 80%; border-radius: 16px; border: 1px solid #cccccc; margin-top: 14px;">
                                                        <div id="editIcon"
                                                             style="background-color: gainsboro;position: absolute;cursor: pointer;top: 0px;right: 17%;border-radius: 50px;width: 35px;height: 35px;display: flex;align-items: center;justify-content: center;">
                                                            <i class="fa fa-pencil" style="color: green;" aria-hidden="true"></i>
                                                        </div>
                                                        <input type="file" id="fileInput" style="display: none;" data-action-url="{{ route('student.setting.update.profile.image') }}">
                                                    </span>
                                                        <div id="profileImage-loader" class="d-none" style="margin-left: 34px;">
                                                            <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9 d-flex flex-wrap justify-content-between">
                                                        <div class="col-md-12">
                                                            <h6>Doctor Information</h6>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-0">
                                                            <p class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Full Name</p>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="name"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->name ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Email</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="email" class="form-control w-100" name="email"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->email ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-1 mt-3">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Personal Number</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="contact_no"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->contact_no ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Vet License</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="vet_license"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->vet_license ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">License State</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="license_state"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->license_state ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">License Country</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="license_country"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->license_country ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mt-5">
                                                            <h6>Address Detail</h6>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-1">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Main street</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="main_street"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->main_street ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">City</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="city"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->city ?? '' : '' }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-5 mx-1 mt-3">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">State/Country</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="state"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->state ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-1 mt-3">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Zip Code</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="zip_code"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->zip_code ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex mt-4"
                                                     style="justify-content:end; align-items: center;">
                                                    <div>
                                                        <button type="button" class="btn btn-outline-primary py-2 back-personal-information mb-2" > Cancel
                                                        </button>
                                                        <button type="button"
                                                                data-action-url="{{ route('student.setting.update.profile') }}"
                                                                class="btn btn-primary save-profile-info btn-sm py-2 text-white mb-2"
                                                                style=" font-family: 'Poppins', sans-serif !important">
                                                            <span>Save Changes</span>
                                                            <div id="save-data-loader"
                                                                 class="spinner-border text-green-700 d-none overflow-hidden"
                                                                 role="status"
                                                                 style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                                                <span class="sr-only">Loading...</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <div class="card p-3">
                                            <div class="row justify-content-start">
                                                <div class="d-flex">
                                                    <h6>Update Password</h6>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <form id="change-password-info-form">
                                                    @csrf
                                                    <div class="col-12 d-md-flex mt-3 d-block align-items-center">
                                                        <div class="col-lg-3"><label class="form-label">Current
                                                                Password</label></div>
                                                        <div class="input-group input-group-outline">
                                                            <input type="password" class="form-control" name="current_password" placeholder="********" id="current_password" aria-label="Password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-md-flex mt-3 d-block align-items-center">
                                                        <div class="col-lg-3"><label class="form-label">New
                                                                Password</label></div>
                                                        <div class="input-group input-group-outline my-1">
                                                            <input type="password" class="form-control" name="password" placeholder="********" id="password" aria-label="Password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-md-flex mt-3 d-block align-items-center">
                                                        <div class="col-lg-3"><label class="form-label">Confirm New
                                                                Password</label></div>
                                                        <div class="input-group input-group-outline">
                                                            <input type="password" class="form-control" name="password_confirmation" placeholder="********" id="password_confirmation" aria-label="Password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mt-3" style="justify-content:end; align-items: center;">
                                                        <div>
                                                            <button type="button"
                                                                    data-action-url="{{ route('student.setting.change.profile.password') }}"
                                                                    class="btn btn-primary change-password-info btn-sm py-2 text-white mb-2"
                                                                    style=" font-family: 'Poppins', sans-serif !important">
                                                                <span>Save Changes</span>
                                                                <div id="change-password-loader"
                                                                     class="spinner-border text-green-700 d-none overflow-hidden"
                                                                     role="status"
                                                                     style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                                                    <span class="sr-only">Loading...</span>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('portal/assets/js/plugins/datatables.js') }}"></script>
    <script>
        $(document).on('click', '.personal-information', function (e) {
            $('.personal-information-data').addClass('d-none');
            $('.personal-information-update-data').removeClass('d-none');
        });

        $(document).on('click', '.back-personal-information', function (e) {
            $('.personal-information-update-data').addClass('d-none');
            $('.personal-information-data').removeClass('d-none');
        });

        document.addEventListener("DOMContentLoaded", function () {
            var editIcon = document.getElementById("editIcon");
            var fileInput = document.getElementById("fileInput");

            editIcon.addEventListener("click", function () {
                fileInput.value = "";
                fileInput.click();
            });
        });

        $(document).on('change', '#fileInput', function (e) {
            let actionType = 'post';
            let file_data = new FormData();
            let file = $(this)[0].files[0];
            file_data.append('image', file);
            file_data.append("_token", '{{csrf_token()}}');

            let loaderId = 'profileImage-loader';
            let hideDataId = 'profile-image-hide';
            let showDataId = 'profile-image-show';
            let actionURL = $(this).attr('data-action-url');
            let processData = file_data;

            uploadFile(actionURL, actionType, processData, loaderId, hideDataId, showDataId);
        });

        $(document).on('click', '.save-profile-info', function (e) {
            let actionType = 'post';
            let loaderId = 'save-data-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = $('#save-profile-info-form').serialize();

            saveInfo(actionURL, actionType, processData, loaderId);
        });

        document.querySelectorAll('.toggle-password').forEach(function (element) {
            element.addEventListener('click', function () {
                const passwordInput = this.parentElement.previousElementSibling;
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                } else {
                    passwordInput.type = 'password';
                    this.innerHTML = '<i class="fas fa-eye"></i>';
                }
            });
        });

        $(document).on('click', '.update-password-info', function (e) {
            $('#current_password').val('');
            $('#password').val('');
            $('#password_confirmation').val('');
        });

        $(document).on('click', '.change-password-info', function (e) {
            let actionType = 'post';
            let loaderId = 'change-password-loader';
            let formId = 'change-password-info-form';
            let actionURL = $(this).attr('data-action-url');
            let processData = $(`#${formId}`).serialize();

            saveInfo(actionURL, actionType, processData, loaderId, formId);
        });
    </script>
    {{-- *****----------------End JS Code----------------***** --}}
@endsection
