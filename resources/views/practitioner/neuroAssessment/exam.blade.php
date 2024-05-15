@extends("practitioner.layout.master")
@section('title')
    Neuro Exam
@endsection
@section('type')
    Practitioner
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ route('admin.veterinary.practitioners') }}">
                    <img src="{{ asset('portal/assets/img/Veterinary Practitioners gray.png') }}" alt="icon" class="me-1" />
                    Neuro Assessment
                </a>
            </li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Neuro Exam</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        .accordion-item {
            border: 1px solid #e8e8e8 !important;
            border-radius: 10px;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3 mt-3">
                    <div class="col-md-12 d-flex justify-content-between">
                        <h5>Neuro Exam</h5>
                        <p>Patient created on: <span style="color: #5534A5;">12-01-2023</span></p>
                    </div>
                    <div class="row">
                        <h5>Patient Detail</h5>
                        <div class="col-md-10 mt-3 d-flex flex-wrap justify-content-between">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Patient ID
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">PID-001
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Owner Name
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">
                                                        Johan Thomos</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-bold text-dark mb-0">Patient Name
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-normal text-dark opacity-8">Orea
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Age/DOB
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">
                                                        12-01-2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-bold text-dark mb-0">Sex
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-normal text-dark opacity-8">Female Intact
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Breed
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">
                                                        German Shepherd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="d-flex">
                                                        <p class="font-weight-bold   text-dark mb-0">Weight </p>
                                                        <div class="form-check form-switch ms-2 ">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23"
                                                                   checked onchange="visible()">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-normal text-dark opacity-8" id="profileVisibility">6.5Lbs
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Species Type
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">
                                                        Canine</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div>
                                <img src="{{ asset('portal/assets/img/team-3.jpg') }}" alt="icon" class="w-40 w-md-60" style="border-radius:300px;"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header p-0 position-relative mt-4  z-index-2">
                        <div class="bg-gradient-primary  border-radius-lg pt-4 pb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                        title="Product Info">
                                    <span>History</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Media">Neurological Exam Steps</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Socials">Neurolocalizations</button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <form class="multisteps-form__form ">
                            <!--single form panel-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active"
                                 data-animation="FadeIn">
                                <div class="multisteps-form__content p-3">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <p>Completing the history section is not required to utilize the
                                                localization tool but is recommended if you intend to submit a
                                                consultation.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold"
                                                   style=" font-family: 'Poppins', sans-serif !important">Medical
                                                History <span class="text-danger">*</span> </label>
                                            <div class="input-group input-group-outline mb-3">
                                                    <textarea rows="4" class="form-control w-100"
                                                              aria-describedby="emailHelp" onfocus="focused(this)"
                                                              onfocusout="defocused(this)" style="resize: none;" placeholder="Please describe the presenting complaint and associated history. Please also note any historical medical information. Please include the results of any diagnostics already performed. Please note any previous therapies and response."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold"
                                                   style=" font-family: 'Poppins', sans-serif !important">Vaccination
                                                History</label>
                                            <div class="input-group input-group-outline mb-3">
                                                    <textarea rows="4" class="form-control w-100"
                                                              aria-describedby="emailHelp" onfocus="focused(this)"
                                                              onfocusout="defocused(this)" style="resize: none;" placeholder="Please comment if this patient is up to date on vaccines (rabies and distemper)."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold"
                                                   style=" font-family: 'Poppins', sans-serif !important">Diet/Feeding
                                                Routine</label>
                                            <div class="input-group input-group-outline mb-3">
                                                    <textarea rows="4" class="form-control w-100"
                                                              aria-describedby="emailHelp" onfocus="focused(this)"
                                                              onfocusout="defocused(this)" style="resize: none;" placeholder="Please note the type of diet and feeding frequency."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold"
                                                   style=" font-family: 'Poppins', sans-serif !important">Current
                                                Therapy/Response</label>
                                            <div class="input-group input-group-outline mb-3">
                                                    <textarea rows="4" class="form-control w-100"
                                                              aria-describedby="emailHelp" onfocus="focused(this)"
                                                              onfocusout="defocused(this)"
                                                              placeholder="Please note any current or previous therapies and include clinical response to each therapy"
                                                              style="resize: none;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold"
                                                   style=" font-family: 'Poppins', sans-serif !important">Patient's
                                                Environment</label>
                                            <div class="input-group input-group-outline mb-3">
                                                    <textarea rows="4" class="form-control w-100"
                                                              aria-describedby="emailHelp" onfocus="focused(this)"
                                                              onfocusout="defocused(this)" style="resize: none;" placeholder="Please note if the patient is indoor/outdoor, has recent travel, other pets in the home, and any environmental history such as tick or potential toxin exposure."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button
                                                class="btn btn-primary btn-sm py-2 text-white mb-2 ms-auto js-btn-next"
                                                type="button" title="Next">Conduct Exam</button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white "
                                 data-animation="FadeIn">
                                <div class="multisteps-form__content  p-3">
                                    <div class="row mt-3">
                                        <div class=" d-flex justify-content-end">
                                            <div class="form-check form-switch ms-2">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexSwitchCheckDefault23"
                                                       onchange="toggleVideo('sampleVideo', this.checked ? 'show' : 'hide')">
                                            </div>
                                        </div>
                                        <div id="sampleVideo" style="display: none;">
                                            <div class=" p-5 border-radius-lg" style="border: 1px solid #e8e8e8;">
                                                <div class="p-2 d-flex justify-content-center">
                                                    <video controls style="width: 70%;">
                                                        <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="accordion mt-2" id="accordionRental">
                                                <div class="accordion-item">
                                                    <p class="accordion-header" id="headingSeven">
                                                        <button
                                                                class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseSeven" aria-expanded="false"
                                                                aria-controls="collapseSeven"
                                                                style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                            Mentation
                                                            <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                               aria-hidden="true"></i>
                                                            <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                               aria-hidden="true"></i>
                                                        </button>
                                                    </p>
                                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                                         aria-labelledby="headingSeven"
                                                         data-bs-parent="#accordionRental">
                                                        <div class="accordion-body p-3">
                                                            <div class="d-flex justify-content-end mb-2">
                                                                <div class="form-check form-switch ms-2">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="flexSwitchCheckDefaultQuestion"
                                                                           onchange="toggleVideo('sampleVideoQuestion' , this.checked ? 'show' : 'hide')">
                                                                </div>
                                                            </div>
                                                            <div id="sampleVideoQuestion" style="display: none;">
                                                                <div class=" p-5 border-radius-lg">
                                                                    <div class="p-2 d-flex justify-content-center">
                                                                        <video controls style="width: 70%;">
                                                                            <source
                                                                                    src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                                    type="video/mp4">
                                                                            Your browser does not support the
                                                                            video tag.
                                                                        </video>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border-radius-lg"
                                                                 style="border:1px solid #e8e8e8;">
                                                                <div
                                                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                    <div class="col-md-12">
                                                                        <div class="container m-0">
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Test: 1</p>
                                                                                </div>
                                                                                <div class="col-md-10 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                        Lorem ipsum is a dummy
                                                                                        text
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="container m-0">
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Answer</p>
                                                                                </div>
                                                                                <div class="col-md-10 col-sm-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                                <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                                <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                                <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                                <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                                <label class="custom-control-label" for="customRadio5">Select all</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="border-radius-lg mt-2"
                                                                 style="border:1px solid #e8e8e8;">
                                                                <div
                                                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                    <div class="col-md-12">
                                                                        <div class="container m-0">
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Test: 2</p>
                                                                                </div>
                                                                                <div class="col-md-10 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-normal text-dark opacity-8">
                                                                                        Lorem ipsum is a dummy
                                                                                        text
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="container m-0">
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Answer</p>
                                                                                </div>
                                                                                <div class="col-md-10 col-sm-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                                <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                                <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                                <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                                <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-2 col-sm-6">
                                                                                            <div class="form-check ps-0 ps-sm-0">
                                                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                                <label class="custom-control-label" for="customRadio5">Select all</label>
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
                                            <div class="accordion-item mt-2 ">
                                                <p class="accordion-header " id="headingTwo"
                                                   style="font-size: 17px;font-weight: bold;">
                                                    <button
                                                            class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo"
                                                            style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                        Gait & Posture
                                                        <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                        <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                    </button>
                                                </p>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                     aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                                    <div class="accordion-body p-3">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <div class="form-check form-switch ms-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="flexSwitchCheckDefaultQuestion"
                                                                       onchange="toggleVideo('sampleVideoQuestion2' , this.checked ? 'show' : 'hide')">
                                                            </div>
                                                        </div>
                                                        <div id="sampleVideoQuestion2" style="display: none;">
                                                            <div class=" p-5 border-radius-lg">
                                                                <div class="p-2 d-flex justify-content-center">
                                                                    <video controls style="width: 70%;">
                                                                        <source
                                                                                src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                                type="video/mp4">
                                                                        Your browser does not support the video
                                                                        tag.
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 1</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg mt-2"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 2</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
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
                                            <div class="accordion-item mt-2 ">
                                                <p class="accordion-header " id="headingThree"
                                                   style="font-size: 17px;font-weight: bold;">
                                                    <button
                                                            class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree"
                                                            style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                        Cranial Nerves
                                                        <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                        <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                    </button>
                                                </p>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                     aria-labelledby="headingThree"
                                                     data-bs-parent="#accordionRental">
                                                    <div class="accordion-body p-3">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <div class="form-check form-switch ms-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="flexSwitchCheckDefaultQuestion"
                                                                       onchange="toggleVideo('sampleVideoQuestion3' , this.checked ? 'show' : 'hide')">
                                                            </div>
                                                        </div>
                                                        <div id="sampleVideoQuestion3" style="display: none;">
                                                            <div class=" p-5 border-radius-lg">
                                                                <div class="p-2 d-flex justify-content-center">
                                                                    <video controls style="width: 70%;">
                                                                        <source
                                                                                src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                                type="video/mp4">
                                                                        Your browser does not support the video
                                                                        tag.
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 1</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg mt-2"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 2</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
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
                                            <div class="accordion-item mt-2 ">
                                                <p class="accordion-header " id="headingFour"
                                                   style="font-size: 17px;font-weight: bold;">
                                                    <button
                                                            class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFour" aria-expanded="false"
                                                            aria-controls="collapseFour"
                                                            style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                        Postural Reactions
                                                        <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                        <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                    </button>
                                                </p>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                     aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                                                    <div class="accordion-body p-3">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <div class="form-check form-switch ms-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="flexSwitchCheckDefaultQuestion"
                                                                       onchange="toggleVideo('sampleVideoQuestion4' , this.checked ? 'show' : 'hide')">
                                                            </div>
                                                        </div>
                                                        <div id="sampleVideoQuestion4" style="display: none;">
                                                            <div class=" p-5 border-radius-lg">
                                                                <div class="p-2 d-flex justify-content-center">
                                                                    <video controls style="width: 70%;">
                                                                        <source
                                                                                src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                                type="video/mp4">
                                                                        Your browser does not support the video
                                                                        tag.
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 1</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg mt-2"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 2</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
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
                                            <div class="accordion-item mt-2 ">
                                                <p class="accordion-header " id="headingFive"
                                                   style="font-size: 17px;font-weight: bold;">
                                                    <button
                                                            class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseFive" aria-expanded="false"
                                                            aria-controls="collapseFive"
                                                            style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                        Spinal Cord Reflexes
                                                        <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                        <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                    </button>
                                                </p>
                                                <div id="collapseFive" class="accordion-collapse collapse"
                                                     aria-labelledby="headingFive" data-bs-parent="#accordionRental">
                                                    <div class="accordion-body p-3">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <div class="form-check form-switch ms-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="flexSwitchCheckDefaultQuestion"
                                                                       onchange="toggleVideo('sampleVideoQuestion5' , this.checked ? 'show' : 'hide')">
                                                            </div>
                                                        </div>
                                                        <div id="sampleVideoQuestion5" style="display: none;">
                                                            <div class=" p-5 border-radius-lg">
                                                                <div class="p-2 d-flex justify-content-center">
                                                                    <video controls style="width: 70%;">
                                                                        <source
                                                                                src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                                type="video/mp4">
                                                                        Your browser does not support the video
                                                                        tag.
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 1</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg mt-2"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 2</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
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
                                            <div class="accordion-item mt-2 ">
                                                <p class="accordion-header " id="headingSix"
                                                   style="font-size: 17px;font-weight: bold;">
                                                    <button
                                                            class="accordion-button py-3 px-2 border-bottom font-weight-bold"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix"
                                                            style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                        Nociception
                                                        <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                        <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3"
                                                           aria-hidden="true"></i>
                                                    </button>
                                                </p>
                                                <div id="collapseSix" class="accordion-collapse collapse"
                                                     aria-labelledby="headingSix" data-bs-parent="#accordionRental">
                                                    <div class="accordion-body p-3">
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <div class="form-check form-switch ms-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                       id="flexSwitchCheckDefaultQuestion"
                                                                       onchange="toggleVideo('sampleVideoQuestion6' , this.checked ? 'show' : 'hide')">
                                                            </div>
                                                        </div>
                                                        <div id="sampleVideoQuestion6" style="display: none;">
                                                            <div class=" p-5 border-radius-lg">
                                                                <div class="p-2 d-flex justify-content-center">
                                                                    <video controls style="width: 70%;">
                                                                        <source
                                                                                src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                                                type="video/mp4">
                                                                        Your browser does not support the video
                                                                        tag.
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 1</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-radius-lg mt-2"
                                                             style="border:1px solid #e8e8e8;">
                                                            <div
                                                                    class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Test: 2</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-normal text-dark opacity-8">
                                                                                    Lorem ipsum is a dummy
                                                                                    text
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="container m-0">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                                            <label class="custom-control-label" for="customRadio1">Normal</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                                            <label class="custom-control-label" for="customRadio2">Obtunded</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                                            <label class="custom-control-label" for="customRadio3">Stuporous</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                                            <label class="custom-control-label" for="customRadio4">Comatose</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2 col-sm-6">
                                                                                        <div class="form-check ps-0 ps-sm-0">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                                            <label class="custom-control-label" for="customRadio5">Select all</label>
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
                                        <div class="button-row d-flex justify-content-end gap-3 mt-4">
                                            <!-- <button class="btn bg-gradient-primary mb-0 js-btn-next" type="button"
                                                title="Back">Back</button> -->
                                            <button class="btn btn-primary btn-sm py-2 text-white mb-2 ms-auto js-btn-next" type="button"
                                                    title="Next">Localize</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white"
                                 data-animation="FadeIn">
                                <div class="multisteps-form__content  p-3">
                                    <div class="col-md-12">
                                        <label class="form-label font-weight-bold"
                                               style=" font-family: 'Poppins', sans-serif !important">Result
                                        </label>
                                        <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          aria-describedby="emailHelp" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex justify-content-end gap-3 mt-4">
                                        <button class="btn btn-primary  text-white js-btn-next" type="button" onclick="window.location.href = 'index.html'">Consult Neurologist</button>
                                        <button class="btn btn-primary  text-white js-btn-next" type="button"
                                                title="Next">Finish</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('portal/assets/js/plugins/multistep-form.js') }}"></script>
    <script>

        function addDifferential() {
            // Clone the differential section
            var differentialSection = document.querySelector('.differential-section');
            var clone = differentialSection.cloneNode(true);

            // Show the cloned section
            clone.style.display = 'block';

            // Append the cloned section to the container
            var differentialsContainer = document.getElementById('differentialsContainer');
            differentialsContainer.appendChild(clone);
        }
        const sampleVideo = document.getElementById('sampleVideo');
        const sampleVideoQuestion = document.getElementById('sampleVideoQuestion');
        const flexSwitchCheckDefault23 = document.getElementById('flexSwitchCheckDefault23');
        const flexSwitchCheckDefaultQuestion = document.getElementById('flexSwitchCheckDefaultQuestion');

        function toggleVideoVisibility() {
            if (flexSwitchCheckDefault23.checked) {
                sampleVideo.style.display = 'block';
            } else {
                sampleVideo.style.display = 'none';
            }
        }

        function toggleQuestionsVideoVisibility() {
            if (flexSwitchCheckDefaultQuestion.checked) {
                sampleVideoQuestion.style.display = 'block';
            } else {
                sampleVideoQuestion.style.display = 'none';
            }
        }

        function toggleVideo(elementId, state) {
            const element = document.getElementById(elementId);
            if (state === 'show') {
                element.style.display = 'block';
            } else if (state === 'hide') {
                element.style.display = 'none';
            }
        }

        // Optional: Toggle video visibility when the button is clicked
        const toggleButton = document.getElementById('toggleButton');
        toggleButton.addEventListener('click', function () {
            if (sampleVideo.style.display === 'none') {
                sampleVideo.style.display = 'block';
                flexSwitchCheckDefault23.checked = true; // Update the switch state
            } else {
                sampleVideo.style.display = 'none';
                flexSwitchCheckDefault23.checked = false; // Update the switch state
            }

        });
        function visible() {
            var elem = document.getElementById('profileVisibility');
            if (elem) {
                if (elem.innerHTML == "6Lbs") {
                    elem.innerHTML = "6kgs"
                } else {
                    elem.innerHTML = "6Lbs"
                }
            }
        }
        if (document.getElementById('edit-deschiption')) {
            var quill = new Quill('#edit-deschiption', {
                theme: 'snow' // Specify theme in configuration
            });
        };

    </script>
@endsection
