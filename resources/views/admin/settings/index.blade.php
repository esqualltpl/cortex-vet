@extends("admin.layout.master")
@section('title')
    Settings
@endsection
@section('type')
    Admin
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
                                    <button class="nav-link h-navlinks py-2 my-0 active" id="v-pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 mb-0 text-dark  text-start px-0 mx-0 ">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                <i class="fa fa-user me-2 opacity-7" aria-hidden="true"></i>
                                                Profile Information
                                            </span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0 update-password-info" id="v-pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm font-weight-normal text-dark ">
                                                <i class="fa fa-lock me-2 opacity-7" aria-hidden="true"></i>
                                                Update Password
                                            </span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0 set-localization-form-step-info" id="v-pills-exam-tab"
                                            data-action-url="{{ route('admin.setting.exams.list') }}"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-exam" type="button"
                                            role="tab" aria-controls="v-pills-exam" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                <i class="fa fa-credit-card-alt me-2 opacity-7" aria-hidden="true"></i>
                                                Set Localization Form
                                            </span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0 set-results-step-info" id="v-pills-result-tab"
                                            data-action-url="{{ route('admin.setting.set.result.list') }}"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-result" type="button"
                                            role="tab" aria-controls="v-pills-result" aria-selected="true"
                                            tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                <i class="fa fa-wpforms  me-2 opacity-7" aria-hidden="true"></i>
                                                Set Results
                                            </span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0 payment-info" id="v-pills-payment-tab"
                                            data-payment-value="{{ $settings['payments'] ?? 0 }}"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button"
                                            role="tab" aria-controls="v-pills-payment" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                <i class="fa fa-credit-card  me-2 text-sm opacity-7" aria-hidden="true"></i>
                                                Payments
                                            </span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0 students-info" id="v-pills-result-tab"
                                            data-action-url="{{ route('admin.setting.students.list') }}"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-student" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true" tabindex="-1">
                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                <i class="fa fa-credit-card-alt me-2 opacity-7" aria-hidden="true"></i>
                                                Students
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
                                                        <img src="{{ $settings['profile-information'] != null ? $settings['profile-information']->getUserPic() ?? '' : '' }}" alt="icon"
                                                             style="width: 90%; border-radius: 16px; border: 1px solid #cccccc; margin-top: 10px;">
                                                    </div>
                                                    <div class="col-md-9 d-flex flex-wrap justify-content-between  ">
                                                        <div class="col-md-12  ">
                                                            <h6>Super Admin Information</h6>
                                                        </div>
                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Super Admin Name
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->name ?? '' : '' }}
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Email
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->email ?? '' : '' }}</p>
                                                        </div>

                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Contact Number
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->contact_no ?? '' : '' }}
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Vet License Number
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->vet_license ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-12 mt-3">
                                                            <h6>Address Detail</h6>
                                                        </div>
                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Main street
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->main_street ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                City
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->city ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                State/Country
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                {{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->state ?? '' : '' }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Zip Code
                                                            </p>
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
                                                        <input type="file" id="fileInput" style="display: none;" data-action-url="{{ route('admin.setting.update.profile.image') }}">
                                                    </span>
                                                        <div id="profileImage-loader" class="d-none" style="margin-left: 34px;">
                                                            <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-9 d-flex flex-wrap justify-content-between  ">
                                                        <div class="col-md-12  ">
                                                            <h6>Super Admin Information</h6>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-0">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Super Admin Name</label>
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
                                                                   style=" font-family: 'Poppins', sans-serif !important">Contact Number</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="contact_no"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->contact_no ?? '' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1">
                                                            <label class="form-label font-weight-bold mx-0"
                                                                   style=" font-family: 'Poppins', sans-serif !important">Vet License Number</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100" name="vet_license"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       value="{{ $settings['profile-information'] != null ? $settings['profile-information']->userInfo?->vet_license ?? '' : '' }}">
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
                                                                data-action-url="{{ route('admin.setting.update.profile') }}"
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
                                                                    data-action-url="{{ route('admin.setting.change.profile.password') }}"
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
                                    <div class="tab-pane fade" id="v-pills-exam" role="tabpanel"
                                         aria-labelledby="v-pills-exam-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card p-3">
                                                    <div class="set-localization-exam-form">
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <h6>Set Localization Exam Form</h6>
                                                            <div class="d-flex flex-wrap">
                                                                <div>
                                                                    <button type="button"
                                                                            class="upload-instruction-video-toggle btn btn-outline-primary btn-sm py-2 mb-2"
                                                                            style=" font-family: 'Poppins', sans-serif !important">
                                                                        <i class="fa fa-check-circle-o text-sm mx-1"
                                                                           aria-hidden="true"></i>
                                                                        <span class="upload-instruction-video-button-text">Upload Instruction Video</span>
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <div class="nav-item dropdown mx-2">
                                                                        <button type="button"
                                                                                class="btn btn-primary px-3 nav-link cursor-pointer btn-sm text-white"
                                                                                id="dropdownMenuDocs"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                            <i class="fa fa-plus me-2 mx-1" style=" font-size: 10px; !important;"
                                                                               aria-hidden="true"></i>
                                                                            <span class="text-sm">
                                                                                <span>Add Exam Step</span>
                                                                                <div id="addExamStep-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                                                                     style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                                                                    <span class="sr-only">Loading...</span>
                                                                                </div>
                                                                            </span>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                             aria-labelledby="dropdownMenuDocs">
                                                                            <form id="examStepAddForm">
                                                                                @csrf
                                                                                <div class="d-lg-block" style="width: 100%">
                                                                                    <h6><i class="fa fa-plus mx-2" aria-hidden="true"></i>Add Exam Step</h6>
                                                                                    <label class="form-label font-weight-bold">Exam Step Name</label>
                                                                                    <div class="input-group input-group-outline mb-3">
                                                                                        <input type="text"
                                                                                               name="exam_name"
                                                                                               class="form-control"
                                                                                               placeholder="Exam Step Name">
                                                                                    </div>
                                                                                    <button type="button" data-action-url="{{ route('admin.setting.exam.add') }}"
                                                                                            class="btn btn-primary add-exam-step-info btn-md py-2 text-white mb-2 float-end"
                                                                                            style=" font-family: 'Poppins', sans-serif !important">
                                                                                        <span>Add</span>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="accordion-loader" class="text-center d-none" style="margin-left: 34px;">
                                                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                    </div>
                                                    <div class="accordion-info"></div>
                                                    {{--<div id="divTen" style="display: none;">
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingSeven">
                                                                <button class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSeven"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;"> Mentation
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseSeven"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingSeven"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div class="card p-4">
                                                                        <h5>Upload Instruction Video</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label class="form-label font-weight-bold">Video Url</label>
                                                                            <div class="input-group input-group-outline mb-3">
                                                                                <input type="copy" name="email" class="form-control" placeholder="Link">
                                                                                <span class="input-group-text bg-transparent"
                                                                                      data-bs-toggle="tooltip"
                                                                                      data-bs-placement="top"
                                                                                      title="Referral code expires in 24 hours"><i
                                                                                            class="material-symbols-outlined text-sm me-2">
                                                                                        content_copy
                                                                                    </i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <h5 class="text-center">OR</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label class="form-label font-weight-bold">Upload Video</label>
                                                                            <div class="input-group input-group-outline mb-3">
                                                                                <input type="file" name="email" class="form-control" placeholder="Link">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="divEleven" style="display: block;">
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingSeven">
                                                                <button class="accordion-button py-3 px-2 border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Mentations
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div>
                                                                        <div class="nav-item dropdown mx-2 d-flex justify-content-end gap-2">
                                                                            <button type="button"
                                                                                    class="btn btn-primary text-sm nav-link cursor-pointer btn-sm text-white"
                                                                                    style="border-radius: 50px; opacity: 0.6; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;"
                                                                                    id="dropdownMenuDocs"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                <i class="fa fa-plus"
                                                                                   aria-hidden="true"
                                                                                   style="font-size: 0.6rem !important;"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" style="width: 300px; height: auto;" aria-labelledby="dropdownMenuDocs">
                                                                                <div class="d-lg-block">
                                                                                    <h6><i class="fa fa-plus mx-2" aria-hidden="true"></i>Add Test</h6>
                                                                                    <label class="form-label font-weight-bold">Test</label>
                                                                                    <div class="input-group input-group-outline mb-3">
                                                                                        <input type="text" id="examStepInput" class="form-control" placeholder="Enter Test">
                                                                                    </div>
                                                                                    <label class="form-label font-weight-bold">Options</label>
                                                                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center" id="optionsContainer1">
                                                                                        <input type="text" id="examStepInput" class="form-control" placeholder="Option">
                                                                                        <button type="button" class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white" style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center" onclick="addOptionField(event, 'optionsContainer1')">
                                                                                            <i class="fa fa-plus" aria-hidden="true" style="font-size: 0.6rem !important"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <button type="button" class="btn btn-primary float-end btn-lg text-white" onclick="handleCloneQuestion('cloningTest1')">
                                                                                        Add
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="cloningTestContainer1">
                                                                        <div class="mt-2" id="cloningTest1">
                                                                            <div class="border-radius-lg"
                                                                                 style="border:1px solid #e8e8e8;">
                                                                                <div class="d-flex justify-content-end gap-2 p-2 ">
                                                                                    <a href="" data-bs-toggle="modal" data-bs-target="#editTestModal">
                                                                                        <i class="fa fa-pencil-square-o" aria-hidden="true" style="cursor: pointer; color: #5534A5"></i>
                                                                                    </a>
                                                                                    <a href="">
                                                                                        <i class="fa fa-times" aria-hidden="true" style="color: #E66D6D; cursor: pointer"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-12 p-2 d-flex flex-wrap justify-content-between">
                                                                                    <div class="col-md-12">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div class="col-md-2 col-sm-12">
                                                                                                    <p class="font-weight-bold text-dark mb-0">
                                                                                                        Test: 1</p>
                                                                                                </div>
                                                                                                <div class="col-md-10 col-sm-12">
                                                                                                    <p class="font-weight-normal text-dark opacity-8">
                                                                                                        Lorem ipsum is a dummy textsssssss
                                                                                                    </p>
                                                                                                    <div class="">
                                                                                                        <div class="form-check ps-0">
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                                        </div>
                                                                                                        <div class="form-check ps-0">
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                                        </div>
                                                                                                        <div class="form-check ps-0">
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                                        </div>
                                                                                                        <div class="form-check ps-0">
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                                            <label class="custom-control-label" for="customRadio3">Comatose</label>
                                                                                                        </div>
                                                                                                        <div class="form-check ps-0">
                                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                                            <label class="custom-control-label" for="customRadio3">Select all</label>
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
                                                            </div>
                                                        </div>
                                                        <div id="accordionRental" class="container mt-3 mx-0 px-0"></div>
                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-result" role="tabpanel"
                                         aria-labelledby="v-pills-result-tab">
                                        <div class="row">
                                            <div class="col-12 set-result-info">
                                                <div class="card mt-3 p-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <h6 class="set-result-header">Set Results</h6>
                                                        <div class="d-flex ">
                                                            {{--<div>
                                                                <div class="input-group input-group-outline">
                                                                    <label class="form-label">Search here</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>--}}
                                                            <div>
                                                                <button type="button" class="btn btn-primary mx-2 text-white get-neurolocalization-info"
                                                                        data-action-url="{{ route('admin.setting.get.neurolocalization.list') }}">
                                                                    Neurolocalization
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="setResultsStep-loader" class="text-center d-none" style="margin-left: 34px;">
                                                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                    </div>
                                                    <form id="saveSetResultInfoForm">
                                                        @csrf
                                                        <div class="set-result-options-info">

                                                        </div>
                                                        <div class="d-flex justify-content-end mt-3">
                                                            <div>
                                                                <button type="button" class="btn btn-primary btn-sm py-2 show-give-result-name-modal text-white mb-2">
                                                                    Give Result Name
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row show-neurolocalization-info d-none">
                                                <div class="col-12">
                                                    <div class="card mt-3 p-3">
                                                        <div class="d-flex justify-content-between">
                                                            <h6>Neurolocalizations</h6>
                                                            <button type="button" class="btn btn-primary show-set-result-info btn-sm py-2 text-white mb-2">
                                                                Form a result
                                                            </button>
                                                        </div>
                                                        <div class="table-responsive show-neurolocalization-table-info">
                                                        </div>
                                                        <div id="showNeurolocalization-loader" class="text-center d-none" style="margin-left: 34px;">
                                                            <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                                         aria-labelledby="v-pills-payment-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card p-3">
                                                    <h6>Payments</h6>
                                                    <div id="setPaymentAmount-loader" class="text-center d-none" style="margin-left: 34px;">
                                                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                    </div>
                                                    <div class="card p-3 set-payment-amount">
                                                        <p class="mb-3"><b>Set Payment Amount for Neurologists</b></p>
                                                        <div class="input-group input-group-outline mb-3">
                                                            <input type="text" class="form-control payment-amount-neurologists-info" placeholder="$0.00">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-3 set-payment-amount" style="justify-content:end; align-items: center;">
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm py-2 text-white mb-2 set-payment-info" data-action-url="{{ route('admin.setting.set.payment') }}">
                                                                <span>Set</span>
                                                                <div id="setPayment-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                                                     style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                                                    <span class="sr-only">Loading...</span>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-student" role="tabpanel"
                                         aria-labelledby="v-pills-result-tab">
                                        <div class="row" id="Divthree">
                                            <div class="col-12">
                                                <div class="card p-3">
                                                    <div class="d-flex justify-content-between">
                                                        <h6>Students</h6>
                                                        <a href="{{ route('admin.settings.student.add') }}">
                                                            <button type="button" class="btn btn-primary btn-sm py-2 text-white mb-2">
                                                                Add Student
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="table-responsive show-student-table-info">
                                                    </div>
                                                    <div id="studentInfo-loader" class="text-center d-none" style="margin-left: 34px;">
                                                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" id="Divfour" style="display: none;">
                                            <h6>jahhdueue</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addTestModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="addTestModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Add Test</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addTestOptionsForm">
                            @csrf
                            <input type="hidden" name="exam_id" id="addTestOptionsId">
                            <div class="col-md-12">
                                <div class="d-lg-block">
                                    <label class="form-label font-weight-bold">Test</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" name="test" class="form-control"
                                               placeholder="Enter Test">
                                    </div>
                                    <label class="form-label font-weight-bold">Options</label>
                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                         id="addModal">
                                        <input type="text" name="test_options[]" class="form-control" placeholder="Option">
                                        <button type="button"
                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                style="border-radius: 50px !important; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                onclick="addOptionField(event, 'addModal')">
                                            <i class="fa fa-plus" aria-hidden="true"
                                               style="font-size: 0.6rem !important"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary float-end btn-md mt-3 mb-0 text-white save-test-options" data-action-url="{{ route('admin.setting.exam.test.options.add') }}">
                                <span>Save</span>
                                <div id="addTestOptions-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                     style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editTestModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Edit Test</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="editTestModal-loader" class="text-center d-none" style="margin-left: 34px;">
                            <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                        </div>
                        <div class="edit-test-modal-info"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteInfoModal" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" role="dialog" aria-labelledby="deleteInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document" style="">
                <div class="modal-content ">
                    <div class=" modal-header" style="background-color: #FD4F4E;border-bottom: none;">
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: #FD4F4E;">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('portal/assets/img/Sad Emoji.png') }}" alt="icon"/>
                        </div>
                        <div class="text-center  m-3 p-3">
                            <p class="text-white">Are you sure to want to delete <span class="text-bold removed-item-name"></span></p>
                        </div>
                    </div>
                    <div class="conformation">
                        <div class="my-3">

                            <a href="javascript:">
                                <p class="justify-content-center font-weight-bold text-info removed-data d-flex">
                                    <span>
                                        Continue
                                    </span>
                                    <span id="removed-data-loader" class="spinner-border overflow-hidden d-none" role="status"
                                          style="height: 15px !important;width: 15px !important;margin: 5px !important;">
                                        <span class="sr-only">Loading...</span>
                                    </span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="viewExamUploadedVideoModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
             aria-labelledby="viewExamUploadedVideoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Instruction Video</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="viewExamUploadedVideo-loader" class="text-center d-none" style="margin-left: 34px;">
                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                    </div>
                    <div class="modal-body show-exam-uploaded-video">

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="giveResultNameModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
             aria-labelledby="giveResultNameModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Give Result Name</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label class="font-weight-bold">Enter Result Name</label>
                            <div class="input-group input-group-outline mb-1">
                                <input type="hidden" class="form-control" id="resultEditId" placeholder="Result Id">
                                <input type="text" class="form-control" id="resultNameInfo" placeholder="Result Name">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary float-end btn-md mt-3 mb-0 text-white save-give-result-name" data-action-url="{{ route('admin.setting.set.result.info.save') }}">
                            <span>Save</span>
                            <div id="givResultName-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                 style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="viewNeurolocalizationInfoModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
             aria-labelledby="viewNeurolocalizationInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Neurolocalization Info</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="viewNeurolocalizationInfo-loader" class="text-center d-none" style="margin-left: 34px;">
                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                    </div>
                    <div class="modal-body pt-3 show-neurolocalization-detail-info">

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

        /*----------- Set Localization Exam Form -----------*/
        let toggleState = true;
        /*let setLocalizationFormCount = //$settings['set-localization-form'] ?? 0;*/
        $(document).on('click', '.upload-instruction-video-toggle', function (e) {
            $('.accordion-info').addClass('d-none');
            $('#accordion-loader').removeClass('d-none');

            /*if(setLocalizationFormCount > 0) {*/
            setTimeout(function () {
                if (toggleState) {
                    $('.exam-video-data').removeClass('d-none');
                    $('.exam-test-option-data').addClass('d-none');
                    $('.upload-instruction-video-button-text').text('Test');
                    $.notify({
                        title: 'Success!',
                        message: '<br>Upload instruction video information get successfully.',
                        icon: 'fa fa-check',
                    }, {
                        // settings
                        type: 'success',
                        z_index: 2000,
                        animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
                        }
                    });
                } else {
                    $('.exam-test-option-data').removeClass('d-none');
                    $('.exam-video-data').addClass('d-none');
                    $('.upload-instruction-video-button-text').text('Upload Instruction Video');
                    $.notify({
                        title: 'Success!',
                        message: '<br>Exam test information get successfully.',
                        icon: 'fa fa-check',
                    }, {
                        // settings
                        type: 'success',
                        z_index: 2000,
                        animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
                        }
                    });
                }

                toggleState = !toggleState; // Toggle the state

                $('#accordion-loader').addClass('d-none');
                $('.accordion-info').removeClass('d-none');
            }, 1000);
            /*}else{
                $('.accordion-info').removeClass('d-none');
                $('#accordion-loader').addClass('d-none');
                $.notify({
                    title: 'Notification!',
                    message: '<br>No exams step list found, please add exams step firstly.',
                    icon: 'fa fa-exclamation-triangle',
                }, {
                    // settings
                    type: 'warning',
                    z_index: 2000,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    }
                });
            }*/
        });

        $(document).on('click', '.toggle-copy', function (e) {
            e.preventDefault();

            let input = $(this).attr('data-video-url-link');

            $(`#${input}`).select();
            $(`#${input}`)[0].setSelectionRange(0, 99999); // For mobile devices

            document.execCommand('copy');
        });

        $(document).on('click', '.upload-exam-video-or-url', function (e) {
            e.preventDefault();
            let actionType = 'post';
            let loaderId = $(this).attr('data-loader-id');
            let formId = $(this).attr('data-form-id');
            let actionURL = $(this).attr('data-action-url');
            let processData = new FormData($(`#${formId}`)[0]);

            uploadFile(actionURL, actionType, processData, loaderId);
        });

        $(document).on('click', '.preview-exam-uploaded-video', function (e) {
            e.preventDefault();
            let actionType = 'get';
            let loaderId = 'viewExamUploadedVideo-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'show-exam-uploaded-video';

            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.set-localization-form-step-info', function (e) {
            let actionType = 'get';
            let loaderId = 'accordion-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'accordion-info';

            //Change the toggle state & value
            toggleState = true;
            $('.upload-instruction-video-button-text').text('Upload Instruction Video');

            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.add-exam-step-info', function (e) {
            let actionType = 'post';
            let loaderId = 'addExamStep-loader';
            let actionURL = $(this).attr('data-action-url');
            let formId = 'examStepAddForm';
            let processData = $(`#${formId}`).serialize();
            let renderClass = 'accordion-info';

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass);
        });

        $(document).on('click', '.exam-testOptions-add-modal', function (e) {
            let modalId = 'addTestModal';
            let examId = $(this).attr('data-exam-id');
            let examTestOptionClass = $(this).attr('data-test-option-class');
            $('#addTestOptionsId').val(examId);
            $('.save-test-options').attr('data-test-option-class', examTestOptionClass);

            $('#addTestOptionsForm')[0].reset();
            $('.removed-option-row').remove();

            $(`#${modalId}`).modal('show');
        });

        $(document).on('click', '.save-test-options', function (e) {
            let actionType = 'post';
            let loaderId = 'addTestOptions-loader';
            let actionURL = $(this).attr('data-action-url');
            let formId = 'addTestOptionsForm';
            let closeModalId = 'addTestModal';
            let processData = $(`#${formId}`).serialize();
            let renderClass = $(this).attr('data-test-option-class');

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass, closeModalId);
        });

        $(document).on('click', '.edit-test-options', function (e) {
            let actionType = 'get';
            let loaderId = 'editTestModal-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'edit-test-modal-info';

            $(`#editTestModal`).modal('show');
            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.update-test-options', function (e) {
            let actionType = 'post';
            let loaderId = 'updateTestOptions-loader';
            let actionURL = $(this).attr('data-action-url');
            let formId = 'updateTestOptionsForm';
            let closeModalId = 'editTestModal';
            let processData = $(`#${formId}`).serialize();
            let renderClass = $(this).attr('data-test-option-class');
            let renderType = 'html';

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass, closeModalId, renderType);
        });

        $(document).on('click', '.remove-test-old-option-data', function (e) {
            let removedClass = $(this).attr('data-removed-class');
            let removedId = $(this).attr('data-removed-id');
            let formId = 'updateTestOptionsForm';

            $(`#${formId}`).append(`<input type='hidden' name='removed_test_options[]' value='${removedId}' />`)
            $(`.${removedClass}`).remove();
        });

        $(document).on('click', '.remove-exam-info', function (e) {
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let removedName = $(this).attr('data-removed-name');

            $('.removed-data').attr('data-removed-class', removedClass);
            $('.removed-data').attr('data-action-url', actionURL);
            $('.removed-item-name').html(removedName);
            $('#deleteInfoModal').modal('show');
        });

        $(document).on('click', '.remove-exam-test-info', function (e) {
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let removedName = $(this).attr('data-removed-name');

            $('.removed-data').attr('data-removed-class', removedClass);
            $('.removed-data').attr('data-action-url', actionURL);
            $('.removed-item-name').html(removedName);
            $('#deleteInfoModal').modal('show');
        });

        /*----------- Removed Data Start -----------*/
        $(document).on('click', '.removed-data', function (e) {
            let actionType = 'delete';
            let loaderId = 'removed-data-loader';
            let closedModalId = 'deleteInfoModal';
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };

            removeInfo(actionURL, actionType, processData, removedClass, closedModalId, loaderId);
        });
        /*----------- Removed Data End -----------*/

        /*----------- Set Results -----------*/
        $(document).on('click', '.set-results-step-info', function (e) {
            let actionType = 'get';
            let loaderId = 'setResultsStep-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'set-result-options-info';

            $('.set-result-header').text('Set Results');
            $('.show-give-result-name-modal').removeAttr('data-result-id');
            $('.show-give-result-name-modal').removeAttr('data-result-value');
            $('.set-result-info').removeClass('d-none');
            $('.show-neurolocalization-info').addClass('d-none');
            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.exam-test-options-info', function (e) {
            let examStepClass = $(this).attr('data-exam-step-info');

            if ($(this).prop('checked')) {
                $(`.${examStepClass}`).removeClass('d-none');
            } else {
                $(`.${examStepClass}`).addClass('d-none');
            }
        });

        $(document).on('click', '.test-checkbox-info', function (e) {
            let testOptionsInfo = $(this).attr('data-test-options-info');
            let testRadioInfo = $(this).attr('data-test-radio-info');

            if ($(this).prop('checked')) {
                $(`.${testOptionsInfo}`).removeClass('d-none');
            } else {
                $(`.${testOptionsInfo}`).addClass('d-none');
                $(`.${testRadioInfo}`).prop('checked', false);
            }
        });

        $(document).on('click', '.show-give-result-name-modal', function (e) {
            let showModalId = 'giveResultNameModal';
            let resultId = $(this).attr('data-result-id') ?? '';
            let resultValue = $(this).attr('data-result-value') ?? '';
            $('#resultEditId').val(resultId);
            $('#resultNameInfo').val(resultValue);
            $(`#${showModalId}`).modal('show')
        });

        $(document).on('click', '.save-give-result-name', function (e) {
            let actionType = 'post';
            let loaderId = 'givResultName-loader';
            let actionURL = $(this).attr('data-action-url');
            let clickClass = 'set-results-step-info';
            let result_id = $('#resultEditId').val();
            let result_name = $('#resultNameInfo').val();
            let formId = 'saveSetResultInfoForm';
            let closeModalId = 'giveResultNameModal';
            let processData = $(`#${formId}`).serialize();
            processData += `&result_id=${encodeURIComponent(result_id)}`; // Append the result_name to the serialized data
            processData += `&result_name=${encodeURIComponent(result_name)}`; // Append the result_name to the serialized data
            let renderClass = null;

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass, closeModalId, null, clickClass);
        });

        $(document).on('click', '.get-neurolocalization-info', function (e) {
            let actionType = 'get';
            let loaderId = 'showNeurolocalization-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'show-neurolocalization-table-info';

            $('.set-result-info').addClass('d-none');
            $('.show-neurolocalization-info').removeClass('d-none');
            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.edit-neurolocalization-info', function (e) {
            let actionType = 'get';
            let loaderId = 'setResultsStep-loader';
            let actionURL = $(this).attr('data-action-url');
            let resultId = $(this).attr('data-result-id');
            let resultInfo = $(this).attr('data-result-info');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'set-result-options-info';

            $('.set-result-header').text('Edit Results');

            $('.set-result-info').removeClass('d-none');
            $('.show-give-result-name-modal').attr('data-result-id', resultId)
            $('.show-give-result-name-modal').attr('data-result-value', resultInfo)
            $('.show-neurolocalization-info').addClass('d-none');
            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.view-neurolocalization-info', function (e) {
            e.preventDefault();
            let actionType = 'get';
            let loaderId = 'viewNeurolocalizationInfo-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'show-neurolocalization-detail-info';

            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.remove-result-info', function (e) {
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let removedName = $(this).attr('data-removed-name');

            $('.removed-data').attr('data-removed-class', removedClass);
            $('.removed-data').attr('data-action-url', actionURL);
            $('.removed-item-name').html(removedName);
            $('#deleteInfoModal').modal('show');
        });

        $(document).on('click', '.show-set-result-info', function (e) {
            $('.show-neurolocalization-info').addClass('d-none');
            $('.set-result-info').removeClass('d-none');
        });
        /*----------- Set Results End -----------*/

        /*----------- Payments -----------*/
        $(document).on('click', '.payment-info', function (e) {
            let loaderId = 'setPaymentAmount-loader';
            let paymentInfo = $(this).attr('data-payment-value') ?? '0';
            let hideShowClass = 'set-payment-amount';
            let renderClass = 'payment-amount-neurologists-info';

            $(`.${hideShowClass}`).addClass('d-none');
            $(`#${loaderId}`).removeClass('d-none');

            setTimeout(function () {
                $.notify({
                    title: 'Success!',
                    message: '<br>Payment information get successfully.',
                    icon: 'fa fa-check',
                }, {
                    // settings
                    type: 'success',
                    z_index: 2000,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    }
                });

                $(`.${renderClass}`).val(paymentInfo);
                $(`.${hideShowClass}`).removeClass('d-none');
                $(`#${loaderId}`).addClass('d-none');
            }, 500);
        });

        $(document).on('click', '.set-payment-info', function (e) {
            let actionType = 'post';
            let loaderId = 'setPayment-loader';
            let actionURL = $(this).attr('data-action-url');

            let payment = $('.payment-amount-neurologists-info').val();
            $('.payment-info').attr('data-payment-value', payment ?? '0');
            let processData = {
                "_token": "{{ csrf_token() }}",
                "payment": payment,
            };

            saveInfo(actionURL, actionType, processData, loaderId);
        });
        /*----------- Payments End -----------*/

        /*----------- Student -----------*/
        $(document).on('click', '.students-info', function (e) {
            let actionType = 'get';
            let loaderId = 'studentInfo-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'show-student-table-info';

            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });
        /*----------- Student End -----------*/

        function addOptionField(event, className) {
            event.stopPropagation();
            const optionsContainer = $("#" + className);
            const newInputGroup = $("<div></div>");
            newInputGroup.addClass('input-group input-group-outline d-flex gap-2 align-items-center removed-option-row'); // Corrected class adding
            newInputGroup.html(`
        <input type="text" class="form-control" name="test_options[]" placeholder="Option">
        <button type="button" class="btn btn-danger btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                style="border-radius: 50px; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center; background: #E66D6D"
            onclick="removeOptionField(event, this)">
            <i class="fa fa-times" aria-hidden="true" style="font-size: 0.6rem !important;"></i>
        </button>
    `);
            optionsContainer.append(newInputGroup);
        }
        function removeOptionField(event, button) {
            event.stopPropagation();
            $(button).parent().remove();
        }
    </script>
    {{-- *****----------------End JS Code----------------***** --}}
@endsection
