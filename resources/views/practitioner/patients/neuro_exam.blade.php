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
                <a class="opacity-7 text-dark" href="{{ route('practitioner.patients') }}">
                    <img src="{{ asset('portal/assets/img/Patients gray.png') }}" alt="icon" class="me-1" />
                    Patients
                </a>
            </li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Oreo</li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Neuro Exam 1</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        .accordion-item {
            border: 1px solid #ACACAC !important;
            border-radius: 10px;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="col-md-12">
            <div class="card p-3 p-sm-5">

                <div class="col-md-12 d-flex justify-content-between">
                    <h5><a href="{{ route('practitioner.patient.detail', 1) }}"><i class="fa fa-arrow-left me-2" aria-hidden="true"></i></a>Neuro Exam 1</h5>
                    <p><span style="color: #2E97A9;">12-01-2023</span></p>
                </div>
                <div class="col-md-10 d-flex justify-content-between flex-wrap">
                    <div class="col-md-6 d-md-flex gap-2">
                        <p class="font-weight-bold text-dark mb-1">Practitioner Name:
                        </p>
                        <p class="font-weight-normal  text-dark opacity-8">Johan Thomos
                        </p>
                    </div>
                    <div class="col-md-6 d-md-flex gap-2">
                        <p class="font-weight-bold me-4 text-dark mb-1">Consultant Neurologist:
                        </p>
                        <p class="font-weight-normal text-dark opacity-8">Johan Thomos
                        </p>
                    </div>
                </div>
                <div class="row p-2">
                    <h5>History</h5>
                    <div class="container p-0">
                        <div class="row gx-2">
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Medical History</p>
                                    <p>Please describe the presenting complaint and associated history. Please also
                                        note any historical medical information. Please include the results of any
                                        diagnostics already performed. Please note any previous therapies and response.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Vaccination History</p>
                                    <p>Please comment if this patient is up to date on vaccines (rabies and
                                        distemper).
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Diet/Feeding Routine</p>
                                    <p>Please note the type of diet and feeding frequency.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Current Therapy/Response</p>
                                    <p>Please note any current or previous therapies and include clinical response to each therapy.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 p-2 mt-3   border-radius-lg " style="border:1px solid #bab8b8;">
                        <p class="font-weight-bold text-dark ">Patient's Environment
                        </p>
                        <p>Please note if the patient is indoor/outdoor, has recent travel, other pets in the home,
                            and any environmental history such as tick or potential toxin exposure.
                        </p>



                    </div>
                </div>
                <hr class="horizontal dark" />
                <div class="col-md-12 mt-3 ">
                    <h5>Neurological Exam</h5>

                    <div>
                        <div class=" p-2 border-radius-lg" style="border: 1px solid #e8e8e8;">
                            <div class=" d-flex justify-content-end">
                                <div class="form-check form-switch ms-2">
                                    <input class="form-check-input" type="checkbox"
                                           id="flexSwitchCheckDefault23"
                                           onchange="toggleVideo('sampleVideo' , this.checked ? 'show' : 'hide')">

                                </div>
                            </div>
                            <div id="sampleVideo" style="display: none;">
                                <div class=" p-5 border-radius-lg" style="border: 1px solid #e8e8e8;">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="accordion-item mt-2">
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
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefaultQuestion"
                                           onchange="toggleVideo('sampleVideoQuestion1' , this.checked ? 'show' : 'hide')">
                                </div>
                            </div>
                            <div id="sampleVideoQuestion1" style="display: none;">
                                <div class=" p-5 border-radius-lg">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-lg"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 1</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12">
                                                <p class="font-weight-bold text-dark">Answer:</p>
                                            </div>
                                            <div class="col-md-10 col-sm-12">
                                                <div class="container p-0">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-check p-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                <label class="form-check-label" for="customRadio1">Normal</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check p-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check p-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check p-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                <label class="form-check-label" for="customRadio4">Comatose</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check p-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                <label class="form-check-label" for="customRadio5">Select all</label>
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
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 2</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                                    <input class="form-check-input" type="checkbox" onchange="toggleVideo('sampleVideoQuestion3' , this.checked ? 'show' : 'hide')">
                                </div>
                            </div>
                            <div id="sampleVideoQuestion3" style="display: none;">
                                <div class=" p-5 border-radius-lg">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-lg"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 1</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                            <div class="border-radius-lg mt-2"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 2</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                                    <input class="form-check-input" type="checkbox" onchange="toggleVideo('sampleVideoQuestion4' , this.checked ? 'show' : 'hide')">
                                </div>
                            </div>
                            <div id="sampleVideoQuestion4" style="display: none;">
                                <div class=" p-5 border-radius-lg">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-lg"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 1</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                            <div class="border-radius-lg mt-2"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 2</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                                    <input class="form-check-input" type="checkbox" onchange="toggleVideo('sampleVideoQuestion5' , this.checked ? 'show' : 'hide')">
                                </div>
                            </div>
                            <div id="sampleVideoQuestion5" style="display: none;">
                                <div class=" p-5 border-radius-lg">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-lg"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 1</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                            <div class="border-radius-lg mt-2"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 2</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                                    <input class="form-check-input" type="checkbox" onchange="toggleVideo('sampleVideoQuestion6' , this.checked ? 'show' : 'hide')">
                                </div>
                            </div>
                            <div id="sampleVideoQuestion6" style="display: none;">
                                <div class=" p-5 border-radius-lg">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-lg"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 1</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                            <div class="border-radius-lg mt-2"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 2</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                                    <input class="form-check-input" type="checkbox" onchange="toggleVideo('sampleVideoQuestion7' , this.checked ? 'show' : 'hide')">
                                </div>
                            </div>
                            <div id="sampleVideoQuestion7" style="display: none;">
                                <div class=" p-5 border-radius-lg">
                                    <div class="p-2 d-flex justify-content-center">
                                        <video controls style="width: 80%;">
                                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-lg"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 1</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                            <div class="border-radius-lg mt-2"
                                 style="border:1px solid #e8e8e8;">
                                <div
                                        class="col-md-12 p-2 mt-3 d-flex flex-wrap justify-content-between">
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p
                                                            class="font-weight-bold text-dark">
                                                        Test: 2</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <p
                                                            class="font-weight-normal text-dark opacity-8">
                                                        Lorem ipsum is a dummy text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-12">
                                                    <p class="font-weight-bold text-dark">Answer:</p>
                                                </div>
                                                <div class="col-md-10 col-sm-12">
                                                    <div class="container p-0">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                                                    <label class="form-check-label" for="customRadio1">Normal</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                                                    <label class="form-check-label" for="customRadio2">Obtunded</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
                                                                    <label class="form-check-label" for="customRadio3">Stuporous</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio4">
                                                                    <label class="form-check-label" for="customRadio4">Comatose</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-check p-0">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio5">
                                                                    <label class="form-check-label" for="customRadio5">Select all</label>
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
                <hr class="horizontal dark my-4" />
                <div class="row">
                    <h5>Neurolocalizations</h5>
                    <div class="row mt-3  gap-8 ms-1">
                        <div class="col-md-5 p-2  border-radius-lg " style="border:1px solid #bab8b8;">
                            <p class="font-weight-bold text-dark ">Mentation
                            </p>
                            <strong style="color: #2E97A9;">Results:</strong>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat,
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('script')
    <script>
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
    </script>
    <script>

        function toggleVideo(elementId, state) {
            const element = document.getElementById(elementId);
            if (state === 'show') {
                element.style.display = 'block';
            } else if (state === 'hide') {
                element.style.display = 'none';
            }
        }


        function visible() {
            var elem = document.getElementById('profileVisibility');
            if (elem) {
                if (elem.innerHTML == "6Lbs") {
                    elem.innerHTML = "6kgs"
                } else {
                    elem.innerHTML = "6lbs"
                }
            }
        }
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
    </script>
@endsection
