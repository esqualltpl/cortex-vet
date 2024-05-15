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
                    <img src="{{ asset('portal/assets/img/settings gray.png') }}" alt="icon" />
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Settings</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="col-12">
            <div class="mx-3">
                <div class="tab-content card-background-white" id="v-pills-tabContent">
                    <div class="tab-pane fade show position-relative active  " id="cam1" role="tabpanel"
                         aria-labelledby="cam1" loading="lazy">
                        <div class="row">
                            <div class="col-md-3 mx-0 px-0">
                                <div class="nav card flex-column nav-pills bg-white py-3 px-3 my-0" id="v-pills-tab"
                                     role="tablist" aria-orientation="vertical">
                                    <button class="nav-link h-navlinks py-2 my-0 active" id="v-pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true"
                                            tabindex="-1">
                                        <p class="nav-link1 mb-0 text-dark  text-start px-0 mx-0 ">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm"><i class="fa fa-user me-2 opacity-7"
                                                                     aria-hidden="true"></i>Profile Information</span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0" id="v-pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true"
                                            tabindex="-1">

                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm font-weight-normal text-dark "><i
                                                        class="fa fa-lock me-2 opacity-7" aria-hidden="true"></i>Update
                                                    Password</span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0" id="v-pills-exam-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-exam" type="button"
                                            role="tab" aria-controls="v-pills-exam" aria-selected="true" tabindex="-1">

                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm"><i class="fa fa-credit-card-alt me-2 opacity-7"
                                                                     aria-hidden="true"></i>Set Localization Form</span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0" id="v-pills-result-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-result" type="button"
                                            role="tab" aria-controls="v-pills-result" aria-selected="true"
                                            tabindex="-1">

                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                    <i class="fa fa-wpforms  me-2 opacity-7" aria-hidden="true"></i> Set
                                                    Results</span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0" id="v-pills-payment-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button"
                                            role="tab" aria-controls="v-pills-payment" aria-selected="true"
                                            tabindex="-1">

                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm">
                                                    <i class="fa fa-credit-card  me-2 text-sm opacity-7"
                                                       aria-hidden="true"> </i>Payments</span>
                                        </p>
                                    </button>
                                    <button class="nav-link h-navlinks py-2 my-0" id="v-pills-result-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-student" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="true"
                                            tabindex="-1">

                                        <p class="nav-link1 text-dark mb-0  text-start px-0 mx-0">
                                            {{--<i class="fa fa-chevron-right float-end mt-1"></i>--}}
                                            <span class="text-sm"><i class="fa fa-credit-card-alt me-2 opacity-7"
                                                                     aria-hidden="true"></i>Students</span>
                                        </p>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-9">

                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel">

                                        <div class="card p-4" id="Divone">
                                            <div class="col-md-12 d-flex justify-content-between">
                                                <div class="col-md-6 d-flex">
                                                    <h5>Personal Information</h5>
                                                </div>
                                                <div class="col-md-6 text-end">
                                                        <span class="fa fa-edit text-success"
                                                              onclick="switchDocument()">
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="row" id="showedit">
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <img src="{{ asset('portal/assets/img/team-3.jpg') }}" alt="icon" alt=""
                                                             style="width: 50%; border-radius: 16px;">
                                                    </div>
                                                    <div
                                                            class="col-md-9 d-flex flex-wrap justify-content-between  ">
                                                        <div class="col-md-12  ">
                                                            <h5>Super Admin Information</h5>
                                                        </div>
                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Super Admin Name
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Ryan Holland
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Email
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Super Admin Name</p>
                                                        </div>

                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Contact Number
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                (168)447-5444
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Vet License Number
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Lorem ipsum</p>
                                                        </div>
                                                        <div class="col-md-12 mt-5  ">
                                                            <h5>Address Detail</h5>
                                                        </div>
                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Main street
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Gunnersbury House , 1 Chapel Hill
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                City
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                London</p>
                                                        </div>

                                                        <div class="col-md-6  ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                State/Country
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                A11 B12
                                                            </p>

                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <p class="font-weight-bold text-dark mb-0"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                Zip Code
                                                            </p>
                                                            <p class="font-weight-normal text-dark opacity-8"
                                                               style=" font-family: 'Poppins', sans-serif !important">
                                                                A11 B12</p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="card p-3 mt-3" id="Divtwo" style="display: none;">
                                            <div class="row justify-content-start">
                                                <div class="d-flex">
                                                    <i class="fa fa-arrow-left  mt-1" aria-hidden="true"
                                                       onclick="switchVisibleBasicInfo()"></i>
                                                    <h6 class="mx-1">Personal Information</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h5>Personal Information</h5>
                                                <div class="col-md-3 mb-3">
                                                    <input type="file" id="imageUpload" accept="image/*"
                                                           style="display: none;">
                                                    <img id="defaultImage" src="{{ asset('portal/assets/img/team-3.jpg') }}" alt="icon"
                                                         alt="Default Image"
                                                         style="width: 50%; border-radius: 16px; cursor: pointer;">
                                                </div>

                                                <div class="col-md-9 d-flex flex-wrap justify-content-between  ">
                                                    <div class="col-md-12  ">
                                                        <h5>Super Admin Information</h5>
                                                    </div>
                                                    <div class="col-12 col-sm-5 mx-1">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">Super
                                                            Admin Name</label>
                                                        <div class="input-group input-group-outline">
                                                            <input type="text" class="form-control w-100"
                                                                   aria-describedby="emailHelp" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)"
                                                                   placeholder="Ryan Holland">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">Email</label>
                                                        <div class="input-group input-group-outline">

                                                            <input type="email" class="form-control w-100"
                                                                   onfocus="focused(this)" onfocusout="defocused(this)"
                                                                   placeholder="ryanholland@gmail.com">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-5 mx-1">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">Contact
                                                            Number</label>
                                                        <div class="input-group input-group-outline">
                                                            <input type="text" class="form-control w-100"
                                                                   aria-describedby="emailHelp" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)"
                                                                   placeholder="(186)444 5333">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">Vet
                                                            License Nunber</label>
                                                        <div class="input-group input-group-outline">

                                                            <input type="text" class="form-control w-100"
                                                                   onfocus="focused(this)" onfocusout="defocused(this)"
                                                                   placeholder="lorem Ipsum">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-5  ">
                                                        <h5>Address Detail</h5>
                                                    </div>
                                                    <div class="col-12 col-sm-5 mx-1">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">Main
                                                            street</label>
                                                        <div class="input-group input-group-outline">
                                                            <input type="text" class="form-control w-100"
                                                                   aria-describedby="emailHelp" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)"
                                                                   placeholder="Gunnersbury House,1 Chapel Hill">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">City</label>
                                                        <div class="input-group input-group-outline">

                                                            <input type="text" class="form-control w-100"
                                                                   onfocus="focused(this)" onfocusout="defocused(this)"
                                                                   placeholder="London">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-5 mx-1">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">State/Country</label>
                                                        <div class="input-group input-group-outline">
                                                            <input type="text" class="form-control w-100"
                                                                   aria-describedby="emailHelp" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)" placeholder="London">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                        <label class="form-label font-weight-bold"
                                                               style=" font-family: 'Poppins', sans-serif !important">Zip
                                                            Code</label>
                                                        <div class="input-group input-group-outline">

                                                            <input type="email" class="form-control w-100"
                                                                   onfocus="focused(this)" onfocusout="defocused(this)"
                                                                   placeholder="A11 B12">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="d-flex mt-3"
                                                 style="justify-content:end; align-items: center;">
                                                <div>
                                                    <button type="button" class="btn btn-outline-primary py-2  mb-2"
                                                            onclick="switchVisibleBasicInfo()"> Cancel
                                                    </button>
                                                    <button type="button"
                                                            class="btn  btn-primary  btn-sm py-2 text-white mb-2"
                                                            style=" font-family: 'Poppins', sans-serif !important"> Save
                                                        Changes
                                                    </button>
                                                </div>
                                            </div>



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
                                                <form asp-controller="Settings" asp-action="ChangePassword"
                                                      data-ajax="true" data-ajax-method="POST"
                                                      data-ajax-begin="OnBegin" data-ajax-success="OnSuccess"
                                                      data-ajax-complete="completed2">
                                                    <div class="col-12 d-md-flex mt-3 d-block align-items-center">
                                                        <div class="col-lg-3"><label class="form-label">Current
                                                                Password</label></div>
                                                        <div class="input-group input-group-outline">
                                                            <input type="password" class="form-control" name="oldpassword" aria-label="Password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-md-flex mt-3 d-block align-items-center">
                                                        <div class="col-lg-3"> <label class="form-label">New
                                                                Password</label></div>
                                                        <div class="input-group input-group-outline my-1">
                                                            <input type="password" class="form-control" name="newpassword" aria-label="Password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-md-flex mt-3 d-block align-items-center">
                                                        <div class="col-lg-3"> <label class="form-label">Confirm New
                                                                Password</label></div>
                                                        <div class="input-group input-group-outline">
                                                            <input type="password" class="form-control" name="confirmnewpassword" aria-label="Password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mt-3" style="justify-content:end; align-items: center;">
                                                        <div>
                                                            <button type="button" class="btn btn-primary btn-sm py-2 text-white mb-2"> Save Changes </button>
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
                                                    <div id="divNine">
                                                        <div class="d-flex justify-content-between flex-wrap">
                                                            <h5>Set Localization Exam Form</h5>
                                                            <div class="d-flex flex-wrap">
                                                                <div><button type="button" onclick="ShowUpload()"
                                                                             id="uploadButton"
                                                                             class="btn  btn-outline-primary mx-2   ">
                                                                        <i class="fa fa-check-circle-o text-lg mx-1"
                                                                           aria-hidden="true"></i>
                                                                        Upload Instruction Video
                                                                    </button></div>
                                                                <div>
                                                                    <div class="nav-item dropdown mx-2">
                                                                        <button type="button"
                                                                                class="btn btn-primary px-3 nav-link cursor-pointer btn-sm py-2 text-white"
                                                                                id="dropdownMenuDocs"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                            <i class="fa fa-plus mx-2"
                                                                               aria-hidden="true"></i>Add Exam Step
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                             aria-labelledby="dropdownMenuDocs">
                                                                            <div class="d-lg-block"
                                                                                 style="width: 300px">
                                                                                <h6><i class="fa fa-plus mx-2"
                                                                                       aria-hidden="true"></i>Add
                                                                                    Exam Step</h6>
                                                                                <label
                                                                                        class="form-label font-weight-bold">Exam
                                                                                    Step Name</label>
                                                                                <div
                                                                                        class="input-group input-group-outline mb-3">
                                                                                    <input type="text"
                                                                                           id="examStepInput"
                                                                                           class="form-control"
                                                                                           placeholder="Exam Step Name">
                                                                                </div>
                                                                                <button type="button"
                                                                                        class="btn btn-primary float-end btn-lg text-white"
                                                                                        onclick="addExamStep()"> Add
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div id="divTen" style="display: none;">
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingSeven">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSeven"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Mentation
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
                                                                            <label
                                                                                    class="form-label font-weight-bold">Video
                                                                                Url</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">
                                                                                <input type="cpoy" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">
                                                                                <span
                                                                                        class="input-group-text bg-transparent"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Referral code expires in 24 hours"><i
                                                                                            class="material-symbols-outlined text-sm me-2">
                                                                                            content_copy
                                                                                        </i></span>
                                                                            </div>

                                                                        </div>
                                                                        <h5 class="text-center">OR</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Upload
                                                                                Video</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">

                                                                                <input type="file" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingTwo">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Gait & Posture
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseTwo"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingTwo"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div class="card p-4">

                                                                        <h5>Upload Instruction Video</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Video
                                                                                Url</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">
                                                                                <input type="cpoy" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">
                                                                                <span
                                                                                        class="input-group-text bg-transparent"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Referral code expires in 24 hours"><i
                                                                                            class="material-symbols-outlined text-sm me-2">
                                                                                            content_copy
                                                                                        </i></span>
                                                                            </div>

                                                                        </div>
                                                                        <h5 class="text-center">OR</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Upload
                                                                                Video</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">

                                                                                <input type="file" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingThree">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Cranial Nerves
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseThree"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingThree"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div class="card p-4">

                                                                        <h5>Upload Instruction Video</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Video
                                                                                Url</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">
                                                                                <input type="cpoy" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">
                                                                                <span
                                                                                        class="input-group-text bg-transparent"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Referral code expires in 24 hours"><i
                                                                                            class="material-symbols-outlined text-sm me-2">
                                                                                            content_copy
                                                                                        </i></span>
                                                                            </div>

                                                                        </div>
                                                                        <h5 class="text-center">OR</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Upload
                                                                                Video</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">

                                                                                <input type="file" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingFour">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFour"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Postural Reactions
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseFour"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingFour"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div class="card p-4">

                                                                        <h5>Upload Instruction Video</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Video
                                                                                Url</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">
                                                                                <input type="cpoy" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">
                                                                                <span
                                                                                        class="input-group-text bg-transparent"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Referral code expires in 24 hours"><i
                                                                                            class="material-symbols-outlined text-sm me-2">
                                                                                            content_copy
                                                                                        </i></span>
                                                                            </div>

                                                                        </div>
                                                                        <h5 class="text-center">OR</h5>
                                                                        <div class="col-md-12 mt-2">
                                                                            <label
                                                                                    class="form-label font-weight-bold">Upload
                                                                                Video</label>
                                                                            <div
                                                                                    class="input-group input-group-outline mb-3">

                                                                                <input type="file" name="email"
                                                                                       class="form-control"
                                                                                       placeholder="Link">

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
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSeven"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Mentation
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
                                                                    <div>
                                                                        <div class="nav-item dropdown mx-2 d-flex justify-content-end gap-2">
                                                                            <!-- <button type="button"
                                                                                class="btn btn-danger text-sm nav-link cursor-pointer btn-sm text-white"
                                                                                style="border-radius: 50px; opacity: 0.6; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;"
                                                                                onclick="handleDeleteQuestion('cloningTestContainer1')"
                                                                                aria-expanded="false">
                                                                                <i class="fa fa-times"
                                                                                    aria-hidden="true"
                                                                                    style="font-size: 0.6rem !important;"></i>
                                                                            </button> -->
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
                                                                            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                                 style="width: 300px; height: auto;"
                                                                                 aria-labelledby="dropdownMenuDocs">
                                                                                <div class="d-lg-block">
                                                                                    <h6><i class="fa fa-plus mx-2"
                                                                                           aria-hidden="true"></i>Add
                                                                                        Test</h6>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Test</label>
                                                                                    <div
                                                                                            class="input-group input-group-outline mb-3">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Enter Test">
                                                                                    </div>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Options</label>
                                                                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                                                                         id="optionsContainer1">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Option">
                                                                                        <button type="button"
                                                                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                                                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                                                                onclick="addOptionField(event, 'optionsContainer1')">
                                                                                            <i class="fa fa-plus"
                                                                                               aria-hidden="true"
                                                                                               style="font-size: 0.6rem !important"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <button type="button"
                                                                                            class="btn btn-primary float-end btn-lg text-white"
                                                                                            onclick="handleCloneQuestion('cloningTest1')">
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
                                                                                <div
                                                                                        class="d-flex justify-content-end gap-2 p-2 ">
                                                                                    <a href="" data-bs-toggle="modal"
                                                                                       data-bs-target="#editTestModal">
                                                                                        <i class="fa fa-pencil-square-o"
                                                                                           aria-hidden="true"
                                                                                           style="cursor: pointer; color: #5534A5"></i>
                                                                                    </a>
                                                                                    <a href="">
                                                                                        <i class="fa fa-times"
                                                                                           aria-hidden="true"
                                                                                           style="color: #E66D6D; cursor: pointer"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-12 p-2 d-flex flex-wrap justify-content-between"
                                                                                >
                                                                                    <div class="col-md-12">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                        class="col-md-2 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-bold text-dark mb-0">
                                                                                                        Test: 1</p>
                                                                                                </div>
                                                                                                <div
                                                                                                        class="col-md-10 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                                        Lorem ipsum
                                                                                                        is a
                                                                                                        dummy text
                                                                                                    </p>
                                                                                                    <div class="">
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio1">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio1">Normal</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio2">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio2">Obtunded</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Stuporous</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Comatose</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Select
                                                                                                                all</label>
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
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingTwo">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Gait & Posture
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseTwo"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingTwo"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div>
                                                                        <div class="nav-item dropdown mx-2">
                                                                            <button type="button"
                                                                                    class="btn btn-primary ms-auto text-sm nav-link cursor-pointer btn-sm text-white"
                                                                                    style="border-radius: 50px; opacity: 0.6; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;"
                                                                                    id="dropdownMenuDocs"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                <i class="fa fa-plus"
                                                                                   aria-hidden="true"
                                                                                   style="font-size: 0.6rem !important;"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                                 style="width: 300px"
                                                                                 aria-labelledby="dropdownMenuDocs">
                                                                                <div class="d-none d-lg-block">
                                                                                    <h6><i class="fa fa-plus mx-2"
                                                                                           aria-hidden="true"></i>Add
                                                                                        Test</h6>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Test</label>
                                                                                    <div
                                                                                            class="input-group input-group-outline mb-3">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Enter Test">
                                                                                    </div>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Options</label>
                                                                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                                                                         id="optionsContainer2">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Option">
                                                                                        <button type="button"
                                                                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                                                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                                                                onclick="addOptionField(event, 'optionsContainer2')">
                                                                                            <i class="fa fa-plus"
                                                                                               aria-hidden="true"
                                                                                               style="font-size: 0.6rem !important"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <button type="button"
                                                                                            class="btn btn-primary float-end btn-lg text-white"
                                                                                            onclick="handleCloneQuestion('cloningTest2')">
                                                                                        Add
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2" id="cloningTest2">
                                                                        <div class="border-radius-lg"
                                                                             style="border:1px solid #e8e8e8;">
                                                                            <div
                                                                                    class="d-flex justify-content-end gap-2 p-2 ">
                                                                                <a href="" data-bs-toggle="modal"
                                                                                   data-bs-target="#editTestModal">
                                                                                    <i class="fa fa-pencil-square-o"
                                                                                       aria-hidden="true"
                                                                                       style="cursor: pointer; color: #5534A5"></i>
                                                                                </a>
                                                                                <a href="">
                                                                                    <i class="fa fa-times"
                                                                                       aria-hidden="true"
                                                                                       style="color: #E66D6D; cursor: pointer"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="cloningTestContainer">
                                                                                <div class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between"
                                                                                >
                                                                                    <div class="col-md-12">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                        class="col-md-2 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-bold text-dark mb-0">
                                                                                                        Test: 1</p>
                                                                                                </div>
                                                                                                <div
                                                                                                        class="col-md-10 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                                        Lorem ipsum
                                                                                                        is a
                                                                                                        dummy text
                                                                                                    </p>
                                                                                                    <div class="">
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio1">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio1">Normal</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio2">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio2">Obtunded</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Stuporous</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Comatose</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Select
                                                                                                                all</label>
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
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingThree">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Cranial Nerves
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseThree"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingThree"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div>
                                                                        <div class="nav-item dropdown mx-2">
                                                                            <button type="button"
                                                                                    class="btn btn-primary ms-auto text-sm nav-link cursor-pointer btn-sm text-white"
                                                                                    style="border-radius: 50px; opacity: 0.6; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;"
                                                                                    id="dropdownMenuDocs"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                <i class="fa fa-plus"
                                                                                   aria-hidden="true"
                                                                                   style="font-size: 0.6rem !important;"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                                 style="width: 300px"
                                                                                 aria-labelledby="dropdownMenuDocs">
                                                                                <div class="d-none d-lg-block">
                                                                                    <h6><i class="fa fa-plus mx-2"
                                                                                           aria-hidden="true"></i>Add
                                                                                        Test</h6>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Test</label>
                                                                                    <div
                                                                                            class="input-group input-group-outline mb-3">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Enter Test">
                                                                                    </div>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Options</label>
                                                                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                                                                         id="optionsContainer3">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Option">
                                                                                        <button type="button"
                                                                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                                                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                                                                onclick="addOptionField(event, 'optionsContainer3')">
                                                                                            <i class="fa fa-plus"
                                                                                               aria-hidden="true"
                                                                                               style="font-size: 0.6rem !important"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <button type="button"
                                                                                            class="btn btn-primary float-end btn-lg text-white"
                                                                                            onclick="handleCloneQuestion('cloningTest3')">
                                                                                        Add
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2" id="cloningTest3">
                                                                        <div class="border-radius-lg"
                                                                             style="border:1px solid #e8e8e8;">
                                                                            <div
                                                                                    class="d-flex justify-content-end gap-2 p-2 ">
                                                                                <a href="" data-bs-toggle="modal"
                                                                                   data-bs-target="#editTestModal">
                                                                                    <i class="fa fa-pencil-square-o"
                                                                                       aria-hidden="true"
                                                                                       style="cursor: pointer; color: #5534A5"></i>
                                                                                </a>
                                                                                <a href="">
                                                                                    <i class="fa fa-times"
                                                                                       aria-hidden="true"
                                                                                       style="color: #E66D6D; cursor: pointer"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="cloningTestContainer">
                                                                                <div class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between"
                                                                                >
                                                                                    <div class="col-md-12">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                        class="col-md-2 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-bold text-dark mb-0">
                                                                                                        Test: 1</p>
                                                                                                </div>
                                                                                                <div
                                                                                                        class="col-md-10 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                                        Lorem ipsum
                                                                                                        is a
                                                                                                        dummy text
                                                                                                    </p>
                                                                                                    <div class="">
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio1">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio1">Normal</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio2">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio2">Obtunded</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Stuporous</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Comatose</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Select
                                                                                                                all</label>
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
                                                        <div class="accordion-item mt-2">
                                                            <p class="accordion-header" id="headingFour">
                                                                <button
                                                                        class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFour"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    Postural Reactions
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseFour"
                                                                 class="accordion-collapse collapse"
                                                                 aria-labelledby="headingFour"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="accordion-body p-3">
                                                                    <div>
                                                                        <div class="nav-item dropdown mx-2">
                                                                            <button type="button"
                                                                                    class="btn btn-primary ms-auto text-sm nav-link cursor-pointer btn-sm text-white"
                                                                                    style="border-radius: 50px; opacity: 0.6; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;"
                                                                                    id="dropdownMenuDocs"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                <i class="fa fa-plus"
                                                                                   aria-hidden="true"
                                                                                   style="font-size: 0.6rem !important;"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                                 style="width: 300px"
                                                                                 aria-labelledby="dropdownMenuDocs">
                                                                                <div class="d-none d-lg-block">
                                                                                    <h6><i class="fa fa-plus mx-2"
                                                                                           aria-hidden="true"></i>Add
                                                                                        Test</h6>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Test</label>
                                                                                    <div
                                                                                            class="input-group input-group-outline mb-3">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Enter Test">
                                                                                    </div>
                                                                                    <label
                                                                                            class="form-label font-weight-bold">Options</label>
                                                                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                                                                         id="optionsContainer4">
                                                                                        <input type="text"
                                                                                               id="examStepInput"
                                                                                               class="form-control"
                                                                                               placeholder="Option">
                                                                                        <button type="button"
                                                                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                                                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                                                                onclick="addOptionField(event, 'optionsContainer4')">
                                                                                            <i class="fa fa-plus"
                                                                                               aria-hidden="true"
                                                                                               style="font-size: 0.6rem !important"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <button type="button"
                                                                                            class="btn btn-primary float-end btn-lg text-white"
                                                                                            onclick="handleCloneQuestion('cloningTest4')">
                                                                                        Add
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2" id="cloningTest4">
                                                                        <div class="border-radius-lg"
                                                                             style="border:1px solid #e8e8e8;">
                                                                            <div
                                                                                    class="d-flex justify-content-end gap-2 p-2 ">
                                                                                <a href="" data-bs-toggle="modal"
                                                                                   data-bs-target="#editTestModal">
                                                                                    <i class="fa fa-pencil-square-o"
                                                                                       aria-hidden="true"
                                                                                       style="cursor: pointer; color: #5534A5"></i>
                                                                                </a>
                                                                                <a href="">
                                                                                    <i class="fa fa-times"
                                                                                       aria-hidden="true"
                                                                                       style="color: #E66D6D; cursor: pointer"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="cloningTestContainer">
                                                                                <div class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between"
                                                                                >
                                                                                    <div class="col-md-12">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                        class="col-md-2 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-bold text-dark mb-0">
                                                                                                        Test: 1</p>
                                                                                                </div>
                                                                                                <div
                                                                                                        class="col-md-10 col-sm-12">
                                                                                                    <p
                                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                                        Lorem ipsum
                                                                                                        is a
                                                                                                        dummy text
                                                                                                    </p>
                                                                                                    <div class="">
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio1">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio1">Normal</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio2">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio2">Obtunded</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Stuporous</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Comatose</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                                class="form-check ps-0">
                                                                                                            <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                            <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Select
                                                                                                                all</label>
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
                                                        <div id="accordionRental" class="container mt-3 mx-0 px-0">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                    <div class="tab-pane fade" id="v-pills-result" role="tabpanel"
                                         aria-labelledby="v-pills-result-tab">
                                        <div class="row" id="divSeven">
                                            <div class="col-12" id="divFive">
                                                <div class="card mt-3 p-3">
                                                    <div class="d-flex justify-content-between flex-wrap">
                                                        <h5>Set Results</h5>
                                                        <div class="d-flex ">
                                                            <div>
                                                                <div class="input-group input-group-outline">
                                                                    <label class="form-label">Search here</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div><button type="button"
                                                                         onclick="ShowNeurolocalizations()"
                                                                         class="btn  btn-primary mx-2   text-white ">
                                                                    Neurolocalizations
                                                                </button></div>
                                                        </div>


                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="form-check d-flex  justify-content-start">
                                                            <input type="checkbox" class="checkbox"
                                                                   name="radioDisabled" class="form-check-input">
                                                            <h6 for="radio3" class="mx-5 my-2">Test:1</h6>
                                                        </div>
                                                        <div>
                                                            <p class="my-2">Lorem ipsum is a dummy text</p>
                                                            <div class="form-group" id="radioOptions"
                                                                 style="display: none;">
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="normalRadio"
                                                                           value="option1">
                                                                    <label class="form-check-label"
                                                                           for="normalRadio">
                                                                        Normal
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="obtundedRadio"
                                                                           value="option2">
                                                                    <label class="form-check-label"
                                                                           for="obtundedRadio">
                                                                        Obtunded
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Stuporous
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Comatose
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Select all
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start">
                                                        <div class="form-check d-flex ">
                                                            <input type="checkbox" class="checkbox"
                                                                   name="radioDisabled" class="form-check-input">
                                                            <h6 for="radio3" class="mx-5 my-2">Test:2</h6>
                                                        </div>
                                                        <div>
                                                            <p class="my-2">Lorem ipsum is a dummy text</p>
                                                            <div class="form-group" id="radioOptions"
                                                                 style="display: none;">
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="normalRadio"
                                                                           value="option1">
                                                                    <label class="form-check-label"
                                                                           for="normalRadio">
                                                                        Normal
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="obtundedRadio"
                                                                           value="option2">
                                                                    <label class="form-check-label"
                                                                           for="obtundedRadio">
                                                                        Obtunded
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Stuporous
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Comatose
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Select all
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="form-check d-flex ">
                                                            <input type="checkbox" class="checkbox"
                                                                   name="radioDisabled" class="form-check-input">
                                                            <h6 for="radio3" class="mx-5 my-2">Test:3</h6>
                                                        </div>
                                                        <div>
                                                            <p class="my-2">Lorem ipsum is a dummy text</p>
                                                            <div class="form-group" id="radioOptions"
                                                                 style="display: none;">
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="normalRadio"
                                                                           value="option1">
                                                                    <label class="form-check-label"
                                                                           for="normalRadio">
                                                                        Normal
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="obtundedRadio"
                                                                           value="option2">
                                                                    <label class="form-check-label"
                                                                           for="obtundedRadio">
                                                                        Obtunded
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Stuporous
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Comatose
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Select all
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="form-check d-flex ">
                                                            <input type="checkbox" class="checkbox"
                                                                   name="radioDisabled" class="form-check-input">
                                                            <h6 for="radio3" class="mx-5 my-2">Test:4</h6>
                                                        </div>
                                                        <div>
                                                            <p class="my-2">Lorem ipsum is a dummy text</p>
                                                            <div class="form-group" id="radioOptions"
                                                                 style="display: none;">
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="normalRadio"
                                                                           value="option1">
                                                                    <label class="form-check-label"
                                                                           for="normalRadio">
                                                                        Normal
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="obtundedRadio"
                                                                           value="option2">
                                                                    <label class="form-check-label"
                                                                           for="obtundedRadio">
                                                                        Obtunded
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Stuporous
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Comatose
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Select all
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <div class="form-check d-flex">
                                                            <input type="checkbox" class="checkbox"
                                                                   name="radioDisabled" class="form-check-input">
                                                            <h6 for="radio3" class="mx-5 my-2">Test:5</h6>
                                                        </div>
                                                        <div>
                                                            <p class="my-2">Lorem ipsum is a dummy text</p>
                                                            <div class="form-group" id="radioOptions"
                                                                 style="display: none;">
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="normalRadio"
                                                                           value="option1">
                                                                    <label class="form-check-label"
                                                                           for="normalRadio">
                                                                        Normal
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="obtundedRadio"
                                                                           value="option2">
                                                                    <label class="form-check-label"
                                                                           for="obtundedRadio">
                                                                        Obtunded
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Stuporous
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Comatose
                                                                    </label>
                                                                </div>
                                                                <div class="form-check" style="padding-left: 0;">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="exampleRadios" id="stuporousRadio"
                                                                           value="option3">
                                                                    <label class="form-check-label"
                                                                           for="stuporousRadio">
                                                                        Select all
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end mt-3">
                                                        <div>

                                                            <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#addcomment"
                                                                    class="btn  btn-primary submitButton hidden  btn-sm py-2 text-white mb-2">
                                                                Give Result Name
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" id="divSix" style="display: none;">
                                                <div class="col-12">
                                                    <div class="card mt-3 p-3">
                                                        <div class="d-flex justify-content-between">
                                                            <h5>Neurolocalizations</h5>
                                                            <button type="button"
                                                                    class="btn  btn-primary submitButton  btn-sm py-2 text-white mb-2"
                                                                    onclick="ShowNeurolocalizations()">
                                                                Form a result
                                                            </button>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-flush"
                                                                   id="datatable-Neurolocalizations">
                                                                <thead class="thead-light">
                                                                <tr>
                                                                    <th>Result ID</th>
                                                                    <th>Result Name</th>
                                                                    <th>Test Count</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-sm ">
                                                                        Result 1
                                                                    </td>
                                                                    <td class="text-sm ">
                                                                        Spine
                                                                    </td>
                                                                    <td class="text-sm ">
                                                                        2
                                                                    </td>

                                                                    <td class="text-sm">
                                                                        <a href="" data-bs-toggle="modal"
                                                                           data-bs-target="#ViewNeurolocalizations">
                                                                            <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                                                        </a>

                                                                        <img src="{{ asset('portal/assets/img/edit png.png') }}" alt="icon"
                                                                             onclick="ShowEdit()">

                                                                        <a href="#" class="mx-1"
                                                                           data-bs-toggle="modal"
                                                                           data-bs-target="#deleteUser">
                                                                            <img src="{{ asset('portal/assets/img/Delete.png') }}" alt="icon">
                                                                        </a>

                                                                    </td>
                                                                </tr>


                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="divEight" style="display: none;">
                                            <div class="card mt-3 p-3">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <h5>Edit Results</h5>
                                                    <div class="d-flex ">
                                                        <div>
                                                            <div class="input-group input-group-outline">
                                                                <label class="form-label">Search here</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div><button type="button" onclick="ShowEdit()"
                                                                     class="btn  btn-primary mx-2   text-white ">
                                                                Neurolocalizations
                                                            </button></div>
                                                    </div>


                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check d-flex  justify-content-start">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5 my-2">Test:1</h6>
                                                    </div>
                                                    <div>
                                                        <p class="my-2">Lorem ipsum is a dummy text</p>
                                                        <div class="form-group" id="radioOptions"
                                                             style="display: none;">
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="normalRadio"
                                                                       value="option1">
                                                                <label class="form-check-label" for="normalRadio">
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="obtundedRadio"
                                                                       value="option2">
                                                                <label class="form-check-label" for="obtundedRadio">
                                                                    Obtunded
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Stuporous
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Comatose
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Select all
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5 my-2">Test:2</h6>
                                                    </div>
                                                    <div>
                                                        <p class="my-2">Lorem ipsum is a dummy text</p>
                                                        <div class="form-group" id="radioOptions"
                                                             style="display: none;">
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="normalRadio"
                                                                       value="option1">
                                                                <label class="form-check-label" for="normalRadio">
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="obtundedRadio"
                                                                       value="option2">
                                                                <label class="form-check-label" for="obtundedRadio">
                                                                    Obtunded
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Stuporous
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Comatose
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Select all
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5 my-2">Test:3</h6>
                                                    </div>
                                                    <div>
                                                        <p class="my-2">Lorem ipsum is a dummy text</p>
                                                        <div class="form-group" id="radioOptions"
                                                             style="display: none;">
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="normalRadio"
                                                                       value="option1">
                                                                <label class="form-check-label" for="normalRadio">
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="obtundedRadio"
                                                                       value="option2">
                                                                <label class="form-check-label" for="obtundedRadio">
                                                                    Obtunded
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Stuporous
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Comatose
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Select all
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5 my-2">Test:4</h6>
                                                    </div>
                                                    <div>
                                                        <p class="my-2">Lorem ipsum is a dummy text</p>
                                                        <div class="form-group" id="radioOptions"
                                                             style="display: none;">
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="normalRadio"
                                                                       value="option1">
                                                                <label class="form-check-label" for="normalRadio">
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="obtundedRadio"
                                                                       value="option2">
                                                                <label class="form-check-label" for="obtundedRadio">
                                                                    Obtunded
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Stuporous
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Comatose
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Select all
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <div class="form-check d-flex">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5 my-2">Test:5</h6>
                                                    </div>
                                                    <div>
                                                        <p class="my-2">Lorem ipsum is a dummy text</p>
                                                        <div class="form-group" id="radioOptions"
                                                             style="display: none;">
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="normalRadio"
                                                                       value="option1">
                                                                <label class="form-check-label" for="normalRadio">
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="obtundedRadio"
                                                                       value="option2">
                                                                <label class="form-check-label" for="obtundedRadio">
                                                                    Obtunded
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Stuporous
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Comatose
                                                                </label>
                                                            </div>
                                                            <div class="form-check" style="padding-left: 0;">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="stuporousRadio"
                                                                       value="option3">
                                                                <label class="form-check-label"
                                                                       for="stuporousRadio">
                                                                    Select all
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end mt-3">
                                                    <div>

                                                        <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#addcomment"
                                                                class="btn  btn-primary   btn-sm py-2 text-white mb-2">
                                                            Give Result Name
                                                        </button>
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
                                                    <h5>
                                                        Payments</h5>
                                                    <div class="card p-3">
                                                        <h5 class="mb-5">Set Payment Amount for Neurologists</h5>
                                                        <div class="input-group input-group-outline mb-3">
                                                            <input type="text" class="form-control"
                                                                   placeholder="$123.00">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-3"
                                                         style="justify-content:end; align-items: center;">
                                                        <div>

                                                            <button type="button"
                                                                    class="btn  btn-primary  btn-sm py-2 text-white mb-2">
                                                                Set
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
                                                        <h5>
                                                            Students</h5>
                                                        <a href="{{ route('admin.settings.student.add') }}">
                                                            <button type="button" class="btn  btn-primary  btn-sm py-2 text-white mb-2">
                                                                Add Student
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="table-responsive">

                                                        <table class="table table-flush" id="datatable-basic">
                                                            <thead class="thead-light">
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Role</th>
                                                                <th>Email</th>
                                                                <th>Access</th>

                                                                <th>Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-sm ">
                                                                    Ryan Holland
                                                                </td>
                                                                <td class="text-sm ">
                                                                    Student
                                                                </td>
                                                                <td class="text-sm ">
                                                                    ryan@gmail.com
                                                                </td>
                                                                <td class="text-sm ">
                                                                    Dashboard, Neuro Assessment, Patients,
                                                                    Settings
                                                                </td>
                                                                <td class="text-sm">
                                                                    <a href="{{ route('admin.settings.student.edit', 1) }}">
                                                                        <img src="{{ asset('portal/assets/img/edit png.png') }}" alt="icon">
                                                                    </a>
                                                                    <a href="#" class="mx-1"
                                                                       data-bs-toggle="modal"
                                                                       data-bs-target="#deleteUser">
                                                                        <img src="{{ asset('portal/assets/img/Delete.png') }}" alt="icon">
                                                                    </a>

                                                                </td>
                                                            </tr>


                                                            </tbody>

                                                        </table>
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

        <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered " role="document" style="">
                <div class="modal-content ">
                    <div class=" modal-header" style="background-color: #FD4F4E;border-bottom: none;">

                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                                aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #FD4F4E;">
                        <div class="d-flex justify-content-center">
                            <img src="../assets/img/Sad Emoji.png" />
                        </div>
                        <div class="text-center  m-3 p-3">

                            <p class="text-white">Are you sure you want to delete the result "Spine"</p>
                        </div>

                    </div>
                    <div class="">
                        <div class="my-3">
                            <a href="">
                                <p class="text-center font-weight-bold text-info ">Continue</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addcomment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content ">
                    <div class=" modal-header">
                        <h6><i class="fa fa-file-text-o mx-2" aria-hidden="true"
                               style="color: #38BEBC !important;"></i>Give Result Name</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body mb-5">
                        <div class="col-md-12">
                            <label class="font-weight-bold">Enter Result Name</label>
                            <div class="input-group input-group-outline mb-1 ">
                                <input type="text" class="form-control" value="Lorem ipsum" name="Name"
                                       placeholder="Spine" aria-label="Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editTestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered  modal-md" role="document">
                <div class="modal-content ">
                    <div class=" modal-header">
                        <h6>Edit Test</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body mb-5">
                        <div class="col-md-12">
                            <div>
                                <div class="d-lg-block">
                                    <label class="form-label font-weight-bold">Test</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" id="examStepInput" class="form-control"
                                               placeholder="Enter Test">
                                    </div>
                                    <label class="form-label font-weight-bold">Options</label>
                                    <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                         id="editModal">
                                        <input type="text" id="examStepInput" class="form-control"
                                               placeholder="Option">
                                        <button type="button"
                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                onclick="addOptionField(event, 'editModal')">
                                            <i class="fa fa-plus" aria-hidden="true"
                                               style="font-size: 0.6rem !important"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-primary float-end btn-lg text-white"> Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ViewNeurolocalizations" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-dialog-centered " role="document">
                <div class="modal-content ">
                    <div class=" modal-header pb-1" style="border-bottom: none !important;">
                        <h6><i class="fa fa-file-text-o mx-2" aria-hidden="true"
                               style="color: #38BEBC !important;"></i>Spine</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body pt-0">
                        <div class="d-flex gap-3">
                            <h6 for="radio3" class="mx-3">Test:1</h6>
                            <p class="mt-0">Lorem ipsum is a dummy text</p>
                            <p class="ml-2 mt-0" style="color: #83C1CC">Option 1</p>
                        </div>
                        <div class="d-flex gap-3 ">
                            <h6 for="radio3" class="mx-3">Test:2</h6>
                            <p class="my-2 mt-0">Lorem ipsum is a dummy text</p>
                            <p class="ml-2 mt-0" style="color: #83C1CC">Option 1</p>
                        </div>
                        <div class="d-flex gap-3 ">
                            <h6 for="radio3" class="mx-3">Test:3</h6>
                            <p class="my-2 mt-0">Lorem ipsum is a dummy text</p>
                            <p class="ml-2 mt-0" style="color: #83C1CC">Option 2</p>
                        </div>
                        <div class="d-flex gap-3 ">
                            <h6 for="radio3" class="mx-3">Test:4</h6>
                            <p class="my-2 mt-0">Lorem ipsum is a dummy text</p>
                            <p class="ml-2 mt-0" style="color: #83C1CC">Option 3</p>
                        </div>
                        <div class="d-flex gap-3 ">
                            <h6 for="radio3" class="mx-3">Test:5</h6>
                            <p class="my-2 mt-0">Lorem ipsum is a dummy text</p>
                            <p class="ml-2 mt-0" style="color: #83C1CC">Option 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ assert('portal/assets/js/plugins/datatables.js') }}"></script>
    <script>

        function handleCloneQuestion(contentId) {
            var container = document.getElementById(contentId);
            var clone = container.cloneNode(true);
            container.parentNode.appendChild(clone);

        }

        function handleDeleteQuestion(containerId) {
            var container = document.getElementById(containerId);
            container.style.display = 'none'

        }

        function addOptionField(event, className) {
            event.stopPropagation();
            const optionsContainer = document.getElementById(className);
            const newInputGroup = document.createElement('div');
            newInputGroup.classList.add('input-group', 'input-group-outline', 'd-flex', 'gap-2', 'align-items-center');
            newInputGroup.innerHTML = `
            <input type="text" class="form-control" placeholder="Option">
            <button type="button" class="btn btn-danger btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                    style="border-radius: 50px; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center; background: #E66D6D"
                    onclick="removeOptionField(event, this)">
                <i class="fa fa-times" aria-hidden="true" style="font-size: 0.6rem !important;"></i>
            </button>
        `;
            optionsContainer.appendChild(newInputGroup);
        }

        function removeOptionField(event, button) {
            event.stopPropagation();
            button.parentNode.remove();
        }


        const radioCheckboxes = document.querySelectorAll('.checkbox');

        radioCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const radioOptions = this.parentElement.nextElementSibling.querySelector('#radioOptions');

                if (this.checked) {
                    radioOptions.style.display = 'block';
                } else {
                    radioOptions.style.display = 'none';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var defaultImage = document.getElementById('defaultImage');
            var imageUpload = document.getElementById('imageUpload');

            // Trigger image upload when default image is clicked
            defaultImage.addEventListener('click', function () {
                imageUpload.click();
            });

            // Update preview when a new image is selected
            imageUpload.addEventListener('change', function () {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function (event) {
                        var imageUrl = event.target.result;
                        defaultImage.src = imageUrl;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

    </script>

    <script>
        function addExamStep() {
            var examStepName = document.getElementById("examStepInput").value;
            if (examStepName.trim() === "") {
                alert("Please enter a name for the exam step.");
                return;
            }

            var accordionRental = document.getElementById("accordionRental");

            // Create accordion item div
            var accordionItemDiv = document.createElement("div");
            accordionItemDiv.className = "accordion-item";

            // Create accordion header
            var accordionHeader = document.createElement("p");
            accordionHeader.className = "accordion-header";
            accordionHeader.innerHTML = `
        <button class="accordion-button my-2 py-3 px-2 border-bottom font-weight-bold" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapse${examStepName.replace(/\s+/g, '')}"
            aria-expanded="false" aria-controls="collapse${examStepName.replace(/\s+/g, '')}"
            style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
            ${examStepName}
            <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                aria-hidden="true"></i>
            <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                aria-hidden="true"></i>
        </button>
    `;

            // Create accordion collapse div
            var accordionCollapseDiv = document.createElement("div");
            accordionCollapseDiv.id = `collapse${examStepName.replace(/\s+/g, '')}`;
            accordionCollapseDiv.className = "accordion-collapse collapse";
            accordionCollapseDiv.setAttribute("aria-labelledby", `heading${examStepName.replace(/\s+/g, '')}`);
            accordionCollapseDiv.setAttribute("data-bs-parent", "#accordionRental");

            // Create accordion body
            var accordionBodyDiv = document.createElement("div");
            accordionBodyDiv.className = "accordion-body  p-3";

            // Append dropdown content
            accordionBodyDiv.innerHTML = `
        <div class="nav-item dropdown mx-2 ">
            <button type="button"
                                                                                    class="btn btn-primary ms-auto text-sm nav-link cursor-pointer btn-sm text-white"
                                                                                    style="border-radius: 50px; opacity: 0.6; width: 30px; height: 30px; display: flex; justify-content: center; align-items: center;"
                                                                                    id="dropdownMenuDocs"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false">
                                                                                    <i class="fa fa-plus"
                                                                                        aria-hidden="true"
                                                                                        style="font-size: 0.6rem !important;"></i>
                                                                                </button>
            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
            style="width: 300px; height: auto;"
                aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
                    <h6>Add Test</h6>
                    <label class="form-label font-weight-bold">Test</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="testInput" class="form-control" placeholder="Enter Test">
                    </div>
                    <label
                                                                                            class="form-label font-weight-bold">Options</label>
                                                                                        <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center"
                                                                                            id="optionsContainer1">
                                                                                            <input type="text"
                                                                                                id="examStepInput"
                                                                                                class="form-control"
                                                                                                placeholder="Option">
                                                                                            <button type="button"
                                                                                                class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                                                                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                                                                                onclick="addOptionField(event, 'optionsContainer1')">
                                                                                                <i class="fa fa-plus"
                                                                                                    aria-hidden="true"
                                                                                                    style="font-size: 0.6rem !important"></i>
                                                                                            </button>
                                                                                        </div>
                    <button type="button" class="btn btn-primary float-end btn-sm py-2 text-white mb-2"
                        onclick="addTestData('collapse${examStepName.replace(/\s+/g, '')}')">
                        Add
                    </button>
                </div>
            </div>
        </div>
        <div class="container mt-3" id="testDataContainer${examStepName.replace(/\s+/g, '')}"></div>
    `;

            // Append accordion body to accordion collapse div
            accordionCollapseDiv.appendChild(accordionBodyDiv);

            // Append accordion header and collapse div to accordion item div
            accordionItemDiv.appendChild(accordionHeader);
            accordionItemDiv.appendChild(accordionCollapseDiv);

            // Append accordion item div to accordion container
            accordionRental.appendChild(accordionItemDiv);

            document.getElementById("examStepInput").value = ""; // Clear input field after adding
        }

        function addTestData(collapseId) {
            var testInput = document.getElementById("testInput").value;
            if (testInput.trim() === "") {
                alert("Please enter some text for the test.");
                return;
            }

            var testDataContainerId = `testDataContainer${collapseId.slice(8)}`;
            var testDataContainer = document.getElementById(testDataContainerId);

            var testDataDiv = document.createElement("div");
            testDataDiv.className = "test-data";
            testDataDiv.innerHTML = `<div class="mt-2">
                                                                            <div class="border-radius-lg"
                                                                                style="border:1px solid #e8e8e8;">
                                                                                <div
                                                                                    class="d-flex justify-content-end gap-2 p-2 ">
                                                                                    <a href="" data-bs-toggle="modal"
                                                                                        data-bs-target="#editTestModal">
                                                                                        <i class="fa fa-pencil-square-o"
                                                                                            aria-hidden="true"
                                                                                            style="cursor: pointer; color: #5534A5"></i>
                                                                                    </a>
                                                                                    <a href="">
                                                                                        <i class="fa fa-times"
                                                                                            aria-hidden="true"
                                                                                            style="color: #E66D6D; cursor: pointer"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="cloningTestContainer">
                                                                                    <div class="col-md-12 p-2 d-flex flex-wrap justify-content-between"
                                                                                        id="cloningTest">
                                                                                        <div class="col-md-12">
                                                                                            <div class="container">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-2 col-sm-12">
                                                                                                        <p
                                                                                                            class="font-weight-bold text-dark mb-0">
                                                                                                            Test: 1</p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-10 col-sm-12">
                                                                                                        <p
                                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                                            Lorem ipsum
                                                                                                            is a
                                                                                                            dummy text
                                                                                                        </p>
                                                                                                        <div class="">
                                                                                                            <div
                                                                                                                class="form-check ps-0">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio1">
                                                                                                                <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio1">Normal</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check ps-0">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio2">
                                                                                                                <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio2">Obtunded</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check ps-0">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                                <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Stuporous</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check ps-0">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                                <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Comatose</label>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-check ps-0">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    type="radio"
                                                                                                                    name="flexRadioDefault"
                                                                                                                    id="customRadio3">
                                                                                                                <label
                                                                                                                    class="custom-control-label"
                                                                                                                    for="customRadio3">Select
                                                                                                                    all</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>`;

            testDataContainer.appendChild(testDataDiv);

            document.getElementById("testInput").value = ""; // Clear input field after adding
        }

        function deleteTestData(button) {
            var testDataDiv = button.parentNode;
            testDataDiv.remove();
        }
        const checkboxes = document.querySelectorAll('.checkbox');
        const submitButtons = document.querySelectorAll('.submitButton');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const isChecked = this.checked;
                submitButtons.forEach(button => {
                    button.classList.toggle('hidden', !isChecked);
                });
            });
        });
    </script>
    <script>
        if (document.getElementById('datatable-basic')) {
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-basic", {
                searchable: true,
                fixedHeight: false,
                perPage: 10
            });
        }
        if (document.getElementById('datatable-Neurolocalizations')) {
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-Neurolocalizations", {
                searchable: true,
                fixedHeight: false,
                perPage: 10
            });
        }

        function switchDocument() {
            if (document.getElementById('Divone')) {

                if (document.getElementById('Divone').style.display == 'none') {
                    document.getElementById('Divone').style.display = 'block';
                    document.getElementById('Divtwo').style.display = 'none';
                }
                else {
                    document.getElementById('Divone').style.display = 'none';
                    document.getElementById('Divtwo').style.display = 'block';
                }
            }
        }
        function switchVisibleBasicInfo() {
            if (document.getElementById('Divone')) {

                if (document.getElementById('Divone').style.display == 'none') {
                    document.getElementById('Divone').style.display = 'block';
                    document.getElementById('Divtwo').style.display = 'none';
                }
                else {
                    document.getElementById('Divone').style.display = 'none';
                    document.getElementById('Divtwo').style.display = 'block';
                }
            }
        }
        function switchStudent() {
            if (document.getElementById('Divthree')) {

                if (document.getElementById('Divthree').style.display == 'none') {
                    document.getElementById('Divthree').style.display = 'block';
                    document.getElementById('Divfour').style.display = 'none';
                }
                else {
                    document.getElementById('Divthree').style.display = 'none';
                    document.getElementById('Divfour').style.display = 'block';
                }
            }
        }
        function ShowNeurolocalizations() {
            if (document.getElementById('divFive')) {

                if (document.getElementById('divFive').style.display == 'none') {
                    document.getElementById('divFive').style.display = 'block';
                    document.getElementById('divSix').style.display = 'none';
                }
                else {
                    document.getElementById('divFive').style.display = 'none';
                    document.getElementById('divSix').style.display = 'block';
                }
            }
        }
        function ShowEdit() {
            if (document.getElementById('divSeven')) {

                if (document.getElementById('divSeven').style.display == 'none') {
                    document.getElementById('divSeven').style.display = 'block';
                    document.getElementById('divEight').style.display = 'none';
                }
                else {
                    document.getElementById('divSeven').style.display = 'none';
                    document.getElementById('divEight').style.display = 'block';
                }
            }
        }
        function ShowUpload() {
            var divTen = document.getElementById('divTen');
            var divEleven = document.getElementById('divEleven');
            var uploadButton = document.getElementById('uploadButton');

            if (divTen.style.display === 'block') {
                divTen.style.display = 'none';
                divEleven.style.display = 'block';
                uploadButton.innerHTML = 'Upload Instruction Video'
            } else {
                divTen.style.display = 'block';
                divEleven.style.display = 'none';
                uploadButton.innerHTML = 'Tests'
            }
        }
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
    </script>
@endsection
