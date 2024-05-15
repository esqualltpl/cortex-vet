@extends("neurologist.layout.master")
@section('title')
    Settings
@endsection
@section('type')
    Neurologist
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
    <style>
        .hidden {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="col-12">
            <div class="p-0 position-relative z-index-2">
                <div class="tab-content card-background-white" id="v-pills-tabContent">
                    <div class="tab-pane fade show position-relative active  " id="cam1" role="tabpanel"
                         aria-labelledby="cam1" loading="lazy">
                        <div class="row">
                            <div class="col-md-3 mx-0 px-0">
                                <div class="nav card flex-column nav-pills bg-white me-3 py-3 px-3 my-0" id="v-pills-tab"
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
                                                        class="fa fa-lock me-2 opacity-7" aria-hidden="true"></i>Update Password</span>
                                        </p>
                                    </button>

                                </div>
                            </div>
                            <div class="col-md-9">

                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel">

                                        <div class="card p-3" id="Divone">
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
                                                    <div class="col-md-3 mb-3 position-relative">
                                                        <img src="{{ asset('portal/assets/img/team-3.jpg') }}" alt="icon" style="width: 50%; border-radius: 16px;">
                                                        <div id="editIcon" style="background-color: gainsboro; position: absolute; cursor: pointer; top: -10px; right: 45%; border-radius: 50px; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                                                            <i class="fas fa-edit edit-icon" style="color: green;"></i>
                                                        </div>
                                                        <input type="file" id="fileInput" style="display: none;">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="col-md-12  ">
                                                            <h5>Doctor Information</h5>
                                                        </div>

                                                        <div
                                                                class=" d-flex flex-wrap justify-content-between  ">
                                                            <div class="col-md-6  ">
                                                                <p class="font-weight-bold text-dark mb-0 mb-0"
                                                                >
                                                                    Full Name
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    Ryan Holland
                                                                </p>

                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    Email
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    Brooklyn@gmail.com</p>
                                                            </div>

                                                            <div class="col-md-6  ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    Personal Mobile
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    (168)447-5444
                                                                </p>

                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    Vet License
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    ABC 123456</p>
                                                            </div>
                                                            <div class="col-md-6  ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    License State
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    California
                                                                </p>

                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    License Country
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    United States</p>
                                                            </div>
                                                            <div class="col-md-12  ">
                                                                <h5 class="mt-4 mb-4">Address Detail</h5>
                                                            </div>
                                                            <div class="col-md-6  ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    Main street
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    Gunnersbury House , 1 Chapel Hill
                                                                </p>

                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    City
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    London</p>
                                                            </div>

                                                            <div class="col-md-6  ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    State/Country
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    A11 B12
                                                                </p>

                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <p class="font-weight-bold text-dark mb-0"
                                                                >
                                                                    Zip Code
                                                                </p>
                                                                <p class="font-weight-normal text-dark opacity-8"
                                                                >
                                                                    A11 B12</p>
                                                            </div>
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
                                                    <input type="file" id="imageUpload" accept="image/*" style="display: none;">
                                                    <img id="defaultImage" src="{{ asset('portal/assets/img/team-3.jpg') }}" alt="icon" alt="Default Image" style="width: 50%; border-radius: 16px; cursor: pointer;">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="col-md-12  ">
                                                        <h5>Doctor Information</h5>
                                                    </div>


                                                    <div class="d-flex flex-wrap justify-content-between  ">

                                                        <div class="col-12 col-sm-5 mx-1">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >Full Name</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       placeholder="Ryan Holland">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >Email</label>
                                                            <div class="input-group input-group-outline">

                                                                <input type="email" class="form-control w-100"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       placeholder="ryanholland@gmail.com">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-5 mx-1">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >Personal Mobile</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       placeholder="(186)444 5333">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >Vet License</label>
                                                            <div class="input-group input-group-outline">

                                                                <input type="text" class="form-control w-100"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       placeholder="ABC 123456">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-1">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >License State</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       placeholder="California">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >License Country</label>
                                                            <div class="input-group input-group-outline">

                                                                <input type="text" class="form-control w-100"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       placeholder="United States">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12  ">
                                                            <h5 class="mt-4">Address Detail</h5>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mx-1">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >Main
                                                                street</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)"
                                                                       placeholder="Gunnersbury House,1 Chapel Hill">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >City</label>
                                                            <div class="input-group input-group-outline">

                                                                <input type="text" class="form-control w-100"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       placeholder="London">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-5 mx-1">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >State/Country</label>
                                                            <div class="input-group input-group-outline">
                                                                <input type="text" class="form-control w-100"
                                                                       aria-describedby="emailHelp" onfocus="focused(this)"
                                                                       onfocusout="defocused(this)" placeholder="London">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-5 mt-3 mx-1 mt-sm-0">
                                                            <label class="form-label mb-0 font-weight-bold mt-2"
                                                            >Zip
                                                                Code</label>
                                                            <div class="input-group input-group-outline">

                                                                <input type="email" class="form-control w-100"
                                                                       onfocus="focused(this)" onfocusout="defocused(this)"
                                                                       placeholder="A11 B12">
                                                            </div>
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
                                                            style=" font-family: 'Poppins', sans-serif !important"> Save Changes
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
                                                        <div class="col-lg-2"><label class="form-label">Current
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
                                                        <div class="col-lg-2"> <label class="form-label">New
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
                                                        <div class="col-lg-2"> <label class="form-label">Confirm New
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
                                                        <div class="d-flex justify-content-between">
                                                            <h5>Set Localization Exam Form</h5>
                                                            <div class="d-flex ">
                                                                <div><button type="button" onclick="ShowUpload()"
                                                                             class="btn  btn-outline-primary mx-2   ">
                                                                        <i class="fa fa-check-circle-o text-lg mx-1"
                                                                           aria-hidden="true"></i>
                                                                        Upload Instruction Video
                                                                    </button></div>
                                                                <div>
                                                                    <div class="nav-item dropdown mx-2">
                                                                        <button type="button"
                                                                                class="btn btn-primary text-sm px-3 nav-link cursor-pointer btn-sm py-2 text-white"
                                                                                id="dropdownMenuDocs"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                            Add Exam Step
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                                                             aria-labelledby="dropdownMenuDocs">
                                                                            <div class="d-none d-lg-block">
                                                                                <h6>Add Exam Step</h6>
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
                                                                                        class="btn btn-primary float-end btn-sm py-2 text-white mb-2"
                                                                                        onclick="addExamStep()">
                                                                                    Add
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div id="accordionRental" class="container mt-3"></div>


                                                    </div>
                                                    <div class="p-4" id="divTen" style="display: none;">

                                                        <h6>Upload Instruction Video</h6>
                                                        <div class="col-md-12 mt-2">
                                                            <label class="form-label font-weight-bold">Video
                                                                Url</label>
                                                            <div class="input-group input-group-outline mb-3">
                                                                <input type="cpoy" name="email" class="form-control"
                                                                       placeholder="Link">
                                                                <span class="input-group-text bg-transparent"
                                                                      data-bs-toggle="tooltip" data-bs-placement="top"
                                                                      title="Referral code expires in 24 hours"><i
                                                                            class="material-symbols-outlined text-sm me-2">
                                                                            content_copy
                                                                        </i></span>
                                                            </div>

                                                        </div>
                                                        <h5 class="text-center">OR</h5>
                                                        <div class="col-md-12 mt-2">
                                                            <label class="form-label font-weight-bold">Video
                                                                Url</label>
                                                            <div class="input-group input-group-outline mb-3">

                                                                <input type="file" name="email" class="form-control"
                                                                       placeholder="Link">

                                                            </div>

                                                        </div>
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
                                            <div class="card p-3">
                                                <div class="d-flex justify-content-between">
                                                    <h5>
                                                        Set Students</h5>
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
                                                <div class="d-flex ">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5">Test:1</h6>
                                                    </div>
                                                    <p>Lorem ipsum is a dummy text</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5">Test:2</h6>
                                                    </div>
                                                    <p>Lorem ipsum is a dummy text</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5">Test:3</h6>
                                                    </div>
                                                    <p>Lorem ipsum is a dummy text</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <div class="form-check d-flex ">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5">Test:4</h6>
                                                    </div>
                                                    <p>Lorem ipsum is a dummy text</p>
                                                </div>
                                                <div class="d-flex ">
                                                    <div class="form-check d-flex">
                                                        <input type="checkbox" class="checkbox" name="radioDisabled"
                                                               class="form-check-input">
                                                        <h6 for="radio3" class="mx-5">Test:5</h6>
                                                    </div>
                                                    <p>Lorem ipsum is a dummy text</p>
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
                                                <div class="card p-3">
                                                    <h5>Neurolocalizations</h5>
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
                                                                    Test 1
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
                                                                        <img src="../assets/img/view.png">
                                                                    </a>

                                                                    <img src="../assets/img/edit png.png"
                                                                         onclick="ShowEdit()">

                                                                    <a href="#" class="mx-1"
                                                                       data-bs-toggle="modal"
                                                                       data-bs-target="#deleteUser">
                                                                        <img src="../assets/img/Delete.png">
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
                                        <div class="card p-3">
                                            <div class="d-flex justify-content-between">
                                                <h5>Edit Results</h5>
                                                <div class="d-flex ">
                                                    <div>
                                                        <div class="input-group input-group-outline">
                                                            <label class="form-label">Search here</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div><button type="button" onclick="ShowNeurolocalizations()"
                                                                 class="btn  btn-primary mx-2   text-white ">
                                                            Neurolocalizations
                                                        </button></div>
                                                </div>


                                            </div>
                                            <div class="d-flex ">
                                                <div class="form-check d-flex ">
                                                    <input type="checkbox" class="checkbox" name="radioDisabled"
                                                           class="form-check-input">
                                                    <h6 for="radio3" class="mx-5">Test:1</h6>
                                                </div>
                                                <p>Lorem ipsum is a dummy text</p>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="form-check d-flex ">
                                                    <input type="checkbox" class="checkbox" name="radioDisabled"
                                                           class="form-check-input">
                                                    <h6 for="radio3" class="mx-5">Test:2</h6>
                                                </div>
                                                <p>Lorem ipsum is a dummy text</p>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="form-check d-flex ">
                                                    <input type="checkbox" class="checkbox" name="radioDisabled"
                                                           class="form-check-input">
                                                    <h6 for="radio3" class="mx-5">Test:3</h6>
                                                </div>
                                                <p>Lorem ipsum is a dummy text</p>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="form-check d-flex ">
                                                    <input type="checkbox" class="checkbox" name="radioDisabled"
                                                           class="form-check-input">
                                                    <h6 for="radio3" class="mx-5">Test:4</h6>
                                                </div>
                                                <p>Lorem ipsum is a dummy text</p>
                                            </div>
                                            <div class="d-flex ">
                                                <div class="form-check d-flex">
                                                    <input type="checkbox" class="checkbox" name="radioDisabled"
                                                           class="form-check-input">
                                                    <h6 for="radio3" class="mx-5">Test:5</h6>
                                                </div>
                                                <p>Lorem ipsum is a dummy text</p>
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


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var defaultImage = document.getElementById('defaultImage');
            var imageUpload = document.getElementById('imageUpload');

            // Trigger image upload when default image is clicked
            defaultImage.addEventListener('click', function() {
                imageUpload.click();
            });

            // Update preview when a new image is selected
            imageUpload.addEventListener('change', function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
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
            <span class="material-symbols-outlined float-end nav-link cursor-pointer" id="dropdownMenuDocs"
                data-bs-toggle="dropdown" aria-expanded="false">
                add_circle
            </span>
            <div class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
                    <h6>Add Test</h6>
                    <label class="form-label font-weight-bold">Test</label>
                    <div class="input-group input-group-outline mb-3">
                        <input type="text" id="testInput" class="form-control" placeholder="Enter Test">
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
            testDataDiv.innerHTML = `<div class="d-flex my-2 justify-content-between p-3 border-radius-lg" style="border:1px solid #00000040"><div class="d-flex"><h6>${testInput}</h6>
        <p class="ms-3">Hi, this is your text.</p>
        </div><span class="material-symbols-outlined text-danger" onclick="deleteTestData(this)">
cancel
</span></div> `;

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

        document.addEventListener("DOMContentLoaded", function() {
            var editIcon = document.getElementById("editIcon");
            var fileInput = document.getElementById("fileInput");

            editIcon.addEventListener("click", function() {
                fileInput.click();
            });
        });


        if (document.getElementById('datatable-basic')) {
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-basic", {
                searchable: true,
                fixedHeight: false,
                perPage: 7
            });

            document.querySelectorAll(".export").forEach(function (el) {
                el.addEventListener("click", function (e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "material-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };
        if (document.getElementById('datatable-Neurolocalizations')) {
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-Neurolocalizations", {
                searchable: true,
                fixedHeight: false,
                perPage: 7
            });

            document.querySelectorAll(".export").forEach(function (el) {
                el.addEventListener("click", function (e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "material-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };

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
            if (document.getElementById('divNine')) {

                if (document.getElementById('divNine').style.display == 'none') {
                    document.getElementById('divNine').style.display = 'block';
                    document.getElementById('divTen').style.display = 'none';
                }
                else {
                    document.getElementById('divNine').style.display = 'none';
                    document.getElementById('divTen').style.display = 'block';
                }
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
