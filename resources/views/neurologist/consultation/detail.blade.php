@extends("neurologist.layout.master")
@section('title')
    Consultation Request
@endsection
@section('type')
    Neurologist
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ route('neurologist.consultation.request') }}">
                    <img src="{{ asset('portal/assets/img/Consultation Request purple.png') }}" alt="icon" class="me-1" />
                    Consultation Request
                </a>
            </li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Perform Consultation</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        .accordion-item {
            border: 1px solid #e8e8e8 !important;
            border-radius: 10px !important;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4 mt-3">
                    <div class="row p-2" style="border: 1px solid #00000040; border-radius: 10px;">
                        <div class="col-md-1 mt-3">
                            <img src="{{ asset('portal/assets/img/Consultation Request img.png') }}" alt="icon"
                                 class="w-100 pt-2" style="border-radius: 100px;" />
                        </div>
                        <div class="col-lg-8 col-sm-5 mt-3 d-fle flex-wrap ">

                            <div class="d-block d-md-flex gap-5">
                                <p class="font-weight-bold text-dark w-lg-20">Requested By:</p>
                                <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->addedByInfo?->name ?? '' }}</p>
                            </div>
                            <div class="d-block d-md-flex gap-5">
                                <p class="font-weight-bold text-dark w-lg-20">Requested Time:</p>
                                <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->request_date_time ?? '' }}</p>
                            </div>
                        </div>
                        <div class="col-md-2 ms-auto my-4">
                            <button class="btn btn-primary btn-md text-white mt-2" type="button" title="Accept">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3 mt-3">
                    <div class="col-md-12 d-flex justify-content-between">
                        <h6>Neuro Exam</h6>
                        <p>Patient created on: <span style="color: #5534A5;">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->created_at ?? '0000-00-00 00:00' }}</span></p>
                    </div>
                    <div class="row">
                        <div class="d-flex">
                            <h6>Patient Detail</h6>
                        </div>
                        <div class="col-md-9 mt-3 d-flex flex-wrap justify-content-between">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Patient ID</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->patient_id ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Owner Name</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->owner_name ?? '' }}</p>
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
                                                    <p class="font-weight-bold text-dark mb-0">Patient Name</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->patient_name ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Age/DOB</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->dob ?? '' }}</p>
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
                                                    <p class="font-weight-bold text-dark mb-0">Sex</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->sex ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Breed</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->breedInfo?->name ?? '' }}</p>
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
                                                        <p class="font-weight-bold text-dark mb-0">Weight</p>
                                                        <div class="form-check form-switch ms-2 mt-1 mx-1">
                                                            <input class="form-check-input toggle-weight-switch" data-weight="{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->weight ?? '' }}" type="checkbox"
                                                                   id="weightSwitch" {{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->weight_type == 'Kgs' ? 'checked' : '' }}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div id="toggleWeight-loader"
                                                         class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                                         style="height: 21px !important;width: 21px !important;margin-left: 25px;font-size: 15px;margin-top: 8px;color: #a2a6b8;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    <p class="font-weight-normal text-dark opacity-8 toggle-weight-switch-info" id="profileVisibility">
                                                        <span class="toggle-weight">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->weight ?? '' }}</span>
                                                        <span class="text-sm toggle-weight-label">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->weight_type ?? '' }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="font-weight-bold text-dark mb-0">Species Type</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->specieTypeInfo?->name ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div style="width: 90px; max-height: 90px">
                                <img src="{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->getPatientImage($consultationRequest->neuroAssessmentInfo?->patientInfo?->specieTypeInfo?->name ?? null,$consultationRequest->neuroAssessmentInfo?->patientInfo?->breedInfo?->image ?? null) }}" alt="icon"
                                     style="width: 130px;height: 130px;border-radius:300px;"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div>
                    <div class="card-header p-0 position-relative mt-4  z-index-2">
                        <div class="bg-gradient-primary  border-radius-lg pt-4 pb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                        title="History">History</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Neurological Exam Steps">Neurological Exam Steps</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Neurolocalizations">Neurolocalizations</button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Comments">Comments</button>
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
                                                History</label>
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
                                                type="button" title="Next">Next</button>
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
                                                    <video controls class="w-md-70 w-100">
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
                                                                        <video controls class="w-md-70 w-100">
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
                                                                                        Lorem ipsum is a dummy
                                                                                        text
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Answer:</p>
                                                                                </div>
                                                                                <div class="col-md-10 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Normal</p>
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
                                                                                        Lorem ipsum is a dummy
                                                                                        text
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="container">
                                                                            <div class="row">
                                                                                <div class="col-md-2 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Answer:</p>
                                                                                </div>
                                                                                <div class="col-md-10 col-sm-12">
                                                                                    <p
                                                                                            class="font-weight-bold text-dark">
                                                                                        Normal</p>
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
                                                                    <video controls class="w-md-70 w-100">
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                    <video controls class="w-md-70 w-100">
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                    <video controls class="w-md-70 w-100">
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                    <video controls class="w-md-70 w-100">
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                                                    <video controls class="w-md-70 w-100">
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Obtunded</p>
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
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Answer:</p>
                                                                            </div>
                                                                            <div class="col-md-10 col-sm-12">
                                                                                <p
                                                                                        class="font-weight-bold text-dark">
                                                                                    Normal</p>
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
                                            <button class="btn btn-primary btn-sm py-2 text-white mb-2 js-btn-next" type="button"
                                                    title="Back">Back</button>
                                            <button class="btn btn-primary btn-sm py-2 text-white mb-2 js-btn-next" type="button"
                                                    title="Next">Next</button>
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
                                        <button class="btn btn-primary  text-white js-btn-next" type="button"
                                                title="Next">Back</button>
                                        <button class="btn btn-primary  text-white js-btn-next" type="button"
                                                title="Next">Next</button>
                                    </div>

                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white "
                                 data-animation="FadeIn">

                                <div class="multisteps-form__content  p-3">
                                    <div class="d-flex justify-content-end mt-3">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary py-2 mb-2"
                                                    style="font-family: 'Poppins', sans-serif !important"
                                                    onclick="addDifferential()">
                                                <i class="fa fa-plus-circle text-lg mx-1" aria-hidden="true"></i>
                                                Add Comments
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label font-weight-bold"
                                               style=" font-family: 'Poppins', sans-serif !important">Comment
                                            1
                                        </label>
                                        <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          aria-describedby="emailHelp" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label font-weight-bold"
                                               style=" font-family: 'Poppins', sans-serif !important">Comment 2
                                        </label>
                                        <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          aria-describedby="emailHelp" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,"></textarea>
                                        </div>
                                    </div>
                                    <div id="differentialsContainer" class="col-md-12">
                                        <!-- The first differential input field section -->
                                        <div class="differential-section" style="display: none;">
                                            <label class="form-label font-weight-bold"
                                                   style="font-family: 'Poppins', sans-serif !important">Comment
                                                3</label>
                                            <div class="input-group input-group-outline mb-3">
                                                    <textarea rows="4" class="form-control w-100"
                                                              aria-describedby="emailHelp" onfocus="focused(this)"
                                                              onfocusout="defocused(this)" style="resize: none;"
                                                              placeholder="Enter your comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex justify-content-start justify-content-sm-end flex-wrap gap-3 mt-4">
                                        <button
                                                class="btn btn-primary btn-sm py-2 text-white mb-2 js-btn-submit"
                                                type="button" title="Next">Back</button>
                                        <button
                                                data-bs-toggle="modal"
                                                data-bs-target="#sendEmail"
                                                class="btn btn-primary btn-sm py-2 text-white mb-2 js-btn-submit"
                                                type="button" title="Next"><i class="fa fa-user text-lg mx-1" aria-hidden="true"></i>Communicate Directly</button>
                                        <button
                                                class="btn btn-primary btn-sm py-2 text-white mb-2 js-btn-submit"
                                                data-bs-toggle="modal"
                                                data-bs-target="#successMessage"
                                                type="button" title="Next"><i class="fa fa-envelope-o text-lg mx-1" aria-hidden="true"></i>Share through Email</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="sendEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md " role="document">
            <div class="modal-content ">
                <div class=" modal-header">
                    <h6><i class="fa fa-user me-2 text-info" aria-hidden="true"></i>Communicate Directly</h6>
                    <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="font-weight-bold">Enter Email to share call link</label>
                            <div class="input-group input-group-outline mb-1 ">
                                <input type="text" class="form-control" value="Lorem ipsum" name="Name"
                                       placeholder="henry@gmail.com" aria-label="Name">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn mt-3  btn-primary  btn-sm py-2 text-white mb-2">
                                Communicate Directly
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered " role="document" style="">
            <div class="modal-content ">
                <div class=" modal-header" style="background-color: #34C89C;border-bottom: none;">

                    <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                            aria-label="Close">

                    </button>
                </div>
                <div class="modal-body" style="background-color: #34C89C;">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('portal/assets/img/happy emoji.png') }}" alt="icon" />
                    </div>
                    <div class="text-center  m-3 p-3">

                        <p class="text-white">Patient's complete report along with your comments has been successfully emailed to Dr. John Practitioner.</p>
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
@endsection

@section('script')
    <script src="{{ asset('portal/assets/js/plugins/datatables.js') }}"></script>
    <script src="{{ asset('portal/assets/js/plugins/multistep-form.js') }}"></script>
    <script>

        $(document).on('change', '.toggle-weight-switch', function () {
            let weight = $(this).attr('data-weight');
            let currentValue = parseFloat(weight);

            $(`#toggleWeight-loader`).removeClass('d-none');
            $(`.toggle-weight-switch-info`).addClass('d-none');


            if ($(this).is(':checked')) {
                let newValue = Math.round((currentValue / 2.20462) * 100) / 100;
                $('.toggle-weight').text(newValue);
                $(this).attr('data-weight', newValue);
                $('.toggle-weight-label').text('kgs');
            } else {
                let newValue = Math.round((currentValue * 2.20462) * 100) / 100;
                $('.toggle-weight').text(newValue);
                $(this).attr('data-weight', newValue);
                $('.toggle-weight-label').text('lbs');
            }

            setTimeout(function () {
                $(`#toggleWeight-loader`).addClass('d-none');
                $(`.toggle-weight-switch-info`).removeClass('d-none');
            }, 500);
        });

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
