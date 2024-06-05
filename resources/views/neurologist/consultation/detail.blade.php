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
                    <img src="{{ asset('portal/assets/img/Consultation Request purple.png') }}" alt="icon" class="me-1"/>
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
                                 class="w-100 pt-2" style="border-radius: 100px;"/>
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
                            <button class="btn btn-primary btn-md text-white mt-2 accept-request {{ $consultationRequest->accept_by == null ? '' : 'disabled' }}"
                                    data-action-url="{{ route('neurologist.consultation.detail.accept.request', request()->id) }}"
                                    type="button" title="{{ $consultationRequest->accept_by == null ? 'Accept' : 'Accepted' }}">
                                <span>{{ $consultationRequest->accept_by == null ? 'Accept' : 'Accepted' }}</span>
                                <span id="acceptRequest-loader" class="spinner-border overflow-hidden d-none" role="status"
                                      style="height: 15px !important;width: 15px !important;margin-left: 5px !important;">
                                    <span class="sr-only">Loading...</span>
                                </span>
                            </button>
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
                                                            <input class="form-check-input toggle-weight-switch"
                                                                   data-weight="{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->weight ?? '' }}" type="checkbox"
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
                                <img src="{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->getPatientImage($consultationRequest->neuroAssessmentInfo?->patientInfo?->specieTypeInfo?->name ?? null,$consultationRequest->neuroAssessmentInfo?->patientInfo?->breedInfo?->image ?? null) }}"
                                     alt="icon"
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
                        <div class="bg-gradient-primary border-radius-lg pt-4 pb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                        title="History">History
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Neurological Exam Steps">Neurological Exam Steps
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Neurolocalizations">Neurolocalizations
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Comments">Comments
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="neuro-exam-info">
                        <form class="multisteps-form__form perform-consultation-form">
                            @csrf
                            <!--History-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active"
                                 data-animation="FadeIn">
                                <div class="multisteps-form__content p-3">
                                    <div class="row mt-0">
                                        <div class="col-md-12">
                                            <p>Completing the history section is not required to utilize the localization tool but is recommended if you intend to submit a consultation.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style="font-family: 'Poppins', sans-serif !important">
                                                Medical History <span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          readonly="true"
                                                          name="medical_history"
                                                          aria-describedby="Medical History" onfocus="focused(this)"
                                                          onfocusout="defocused(this)"
                                                          style="resize: none;"
                                                          placeholder="Please describe the presenting complaint and associated history. Please also note any historical medical information. Please include the results of any diagnostics already performed. Please note any previous therapies and response."
                                                >{{ $neuroExamInfo->medical_history ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Vaccination History
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          readonly="true"
                                                          name="vaccination_history"
                                                          aria-describedby="Vaccination History" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Please comment if this patient is up to date on vaccines (rabies and distemper)."
                                                >{{ $neuroExamInfo->vaccination_history ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Diet/Feeding Routine
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          readonly="true"
                                                          name="diet_feeding_routine"
                                                          aria-describedby="Diet/Feeding Routine" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Please note the type of diet and feeding frequency."
                                                >{{ $neuroExamInfo->diet_feeding_routine ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Current Therapy/Response
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          readonly="true"
                                                          name="current_therapy_response"
                                                          aria-describedby="Current Therapy/Response" onfocus="focused(this)"
                                                          onfocusout="defocused(this)"
                                                          style="resize: none;"
                                                          placeholder="Please note any current or previous therapies and include clinical response to each therapy"
                                                >{{ $neuroExamInfo->current_therapy_response ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Patient's Environment
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          readonly="true"
                                                          name="patients_environment"
                                                          aria-describedby="Patient's Environment" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Please note if the patient is indoor/outdoor, has recent travel, other pets in the home, and any environmental history such as tick or potential toxin exposure."
                                                >{{ $neuroExamInfo->patients_environment ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary text-white ms-auto js-btn-next {{ $consultationRequest->accept_by == null ? 'disabled' : '' }}" type="button"
                                                title="Next">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--Neurological Exam Steps-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white"
                                 data-animation="FadeIn">
                                <div class="multisteps-form__content p-3">
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

                                        <div class="neurological-exam-steps-info">
                                            @php($neurologicalExamSteps = json_decode($neuroExamInfo->neurological_exam_steps, true) ?? [])
                                            @foreach($examsInfo as $examInfo)
                                                @if(isset($neurologicalExamSteps[$examInfo->id ?? 0]))
                                                    <div class="accordion mt-2">
                                                        <div class="accordion-item">
                                                            <p class="accordion-header" id="localizationExamFormData{{ $examInfo->id ?? 0 }}">
                                                                <button class="accordion-button py-3 px-2 border-bottom font-weight-bold" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseLocalizationExamFormData{{ $examInfo->id ?? 0 }}"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseLocalizationExamFormData{{ $examInfo->id ?? 0 }}"
                                                                        style="background-color: #E1DAF1; border-radius: 10px; color: #6647B1;">
                                                                    {{ $examInfo->step_name ?? '' }}
                                                                    <i class="collapse-close fa fa-sort-desc text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-caret-up text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                </button>
                                                            </p>
                                                            <div id="collapseLocalizationExamFormData{{ $examInfo->id ?? 0 }}" class="accordion-collapse collapse"
                                                                 aria-labelledby="localizationExamFormData{{ $examInfo->id ?? 0 }}"
                                                                 data-bs-parent="#accordionRental">
                                                                <div class="exam-test-option-data accordion-body p-3">
                                                                    <div class="d-flex justify-content-end mb-2">
                                                                        <div class="form-check form-switch ms-2">
                                                                            <input class="form-check-input"
                                                                                   type="checkbox"
                                                                                   id="flexSwitchCheckDefaultQuestion"
                                                                                   onchange="toggleVideo('examVideoData{{ $examInfo->id ?? 0 }}' , this.checked ? 'show' : 'hide')"
                                                                            >
                                                                        </div>
                                                                    </div>
                                                                    <div id="examVideoData{{ $examInfo->id ?? 0 }}" style="display: none;">
                                                                        <div class="p-5 border-radius-lg">
                                                                            <div class="p-2 d-flex justify-content-center">
                                                                                @if($examInfo->instructionVideoInfo != null)
                                                                                    @if($examInfo->instructionVideoInfo->video ?? '' !== null)
                                                                                        <video controls="" style="width: 70%">
                                                                                            <source src="{{ $examInfo->instructionVideoInfo->getExamVideo() ?? '' }}">
                                                                                            Your browser does not support the video tag.
                                                                                        </video>
                                                                                    @elseif($examInfo->instructionVideoInfo->url ?? '' !== null)
                                                                                        <iframe width="70%" height="415" src="{{ $examInfo->instructionVideoInfo->url ?? '' }}" frameborder="0"
                                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                                                allowfullscreen></iframe>
                                                                                    @else
                                                                                        <p class="text-center mt-3 font-weight-bold">No Instruction Video/URL Found.</p>
                                                                                    @endif
                                                                                @else
                                                                                    <p class="text-center mt-3 font-weight-bold">No Instruction Video/URL Found.</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="exam-test-option-data{{ $examInfo->id ?? 0 }}">
                                                                        @if(count($examInfo->testInfo) > 0)
                                                                            @foreach($examInfo->testInfo as $testKey=>$testInfo)
                                                                                @php($test_sn = $testKey+1)
                                                                                <div id="cloningTestContainer{{ $test_sn }}">
                                                                                    <div class="mt-2" id="cloningTest{{ $test_sn }}">
                                                                                        <div class="border-radius-lg"
                                                                                             style="border:1px solid #e8e8e8;">
                                                                                            <div class="col-md-12 p-2 d-flex flex-wrap justify-content-between">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="container">
                                                                                                        <div class="pt-3 row">
                                                                                                            <div class="col-md-2 col-sm-12">
                                                                                                                <p class="font-weight-bold text-dark mb-0">
                                                                                                                    Test: {{ $test_sn ?? 0 }}</p>
                                                                                                            </div>
                                                                                                            <div class="col-md-10 col-sm-12 show-updated-test-info{{ $testInfo->id }}">
                                                                                                                <p class="font-weight-normal text-dark opacity-8">
                                                                                                                    {{ $testInfo->name ?? '' }}
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="pb-3 row">
                                                                                                            <div class="col-md-2 col-sm-12">
                                                                                                                <p class="font-weight-bold text-dark mb-0">Answer</p>
                                                                                                            </div>
                                                                                                            <div class="col-md-10 col-sm-12">
                                                                                                                <div class="test-options">
                                                                                                                    <div class="row">
                                                                                                                        @foreach($testInfo->optionsInfo ?? [] as $optionKey=>$options)
                                                                                                                            @php($option_sn = $optionKey +1)
                                                                                                                            <b>{{ isset($neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0]) && $neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0] == $options->id ? $options->name ?? '' : '' }}</b>
                                                                                                                        @endforeach
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
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-primary text-white ms-auto js-btn-next {{ $consultationRequest->accept_by == null ? 'disabled' : '' }}" type="button"
                                                        title="Next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Neurolocalizations-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white"
                                 data-animation="FadeIn">
                                <div class="multisteps-form__content  p-3">
                                    <div class="col-md-12">
                                        <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                            Result
                                        </label>
                                        <div class="input-group input-group-outline mb-3">
                                            <textarea rows="4" class="form-control w-100 neuro-exam-result"
                                                      name="result"
                                                      readonly="true"
                                                      aria-describedby="Result"
                                                      onfocus="focused(this)"
                                                      onfocusout="defocused(this)"
                                                      style="resize: none;"
                                            >{{ $neuroExamInfo->result ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn btn-primary text-white ms-auto js-btn-next {{ $consultationRequest->accept_by == null ? 'disabled' : '' }}" type="button"
                                                title="Next">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--Comments-->
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white "
                                 data-animation="FadeIn">

                                <div class="multisteps-form__content  p-3">
                                    <div class="d-flex justify-content-end mt-3">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary py-2 mb-2 add-comments {{ $consultationRequest->accept_by == null ? 'disabled' : '' }}"
                                                    style="font-family: 'Poppins', sans-serif !important">
                                                <i class="fa fa-plus-circle text-lg mx-1" aria-hidden="true"></i>
                                                Add Comments
                                            </button>
                                        </div>
                                    </div>

                                    <div class="previous-comments">
                                        @php($neurologicalComments = json_decode($consultationRequest->comments, true) ?? [])
                                        @foreach($neurologicalComments as $neurologicalCommentKey=>$neurologicalComment)
                                            @if($neurologicalCommentKey == 0)
                                                <div class="col-md-12">
                                                    <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">Comment {{ $neurologicalCommentKey+1 }}</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <textarea rows="4" class="form-control neurologist-comment w-100"
                                                                  name="comments[]"
                                                                  aria-describedby="comments" onfocus="focused(this)"
                                                                  onfocusout="defocused(this)" style="resize: none;"
                                                                  placeholder="Please enter your comments"
                                                        >{{ $neurologicalComment ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-md-12 remove-neurologist-comment-{{ $neurologicalCommentKey+1 }}">
                                                    <div class="d-flex">
                                                        <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important"
                                                        >Comment {{ $neurologicalCommentKey+1 }}</label>
                                                        <span class="material-symbols-outlined text-danger cursor-pointer text-bold request-remove-data"
                                                              data-removed-name="Comment {{ $neurologicalCommentKey+1 }}"
                                                              data-removed-class="remove-neurologist-comment-{{ $neurologicalCommentKey+1 }}"
                                                              data-action-url="{{ route('neurologist.consultation.detail.comment.delete', ['request_id'=>Crypt::encrypt($consultationRequest->id), 'comment_id'=>Crypt::encrypt($neurologicalCommentKey)]) }}"
                                                              style="padding-left: 5px;font-size: 20px;cursor: pointer;"> delete </span>
                                                    </div>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <textarea rows="4" class="form-control neurologist-comment w-100"
                                                                  name="comments[]"
                                                                  aria-describedby="comments" onfocus="focused(this)"
                                                                  onfocusout="defocused(this)" style="resize: none;"
                                                                  placeholder="Please enter your comments"
                                                        >{{ $neurologicalComment ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="new-comments">
                                    </div>
                                    <div class="button-row d-flex justify-content-start justify-content-sm-end flex-wrap gap-3 mt-4">
                                        {{--<button
                                                class="btn btn-primary btn-sm py-2 text-white mb-2 js-btn-submit"
                                                type="button" title="Next">Back
                                        </button>--}}
                                        <button
                                                data-bs-toggle="modal"
                                                data-bs-target="#communicateDirectlyModal"
                                                class="btn btn-primary py-2 mb-2 {{ $consultationRequest->accept_by == null ? 'disabled' : '' }}"
                                                type="button" title="Communicate Directly">
                                            <i class="fa fa-user text-md mx-1" aria-hidden="true"></i>
                                            <span>Communicate Directly</span>
                                        </button>
                                        <button type="button" class="btn btn-primary py-2 mb-2 share-through-email {{ $consultationRequest->accept_by == null ? 'disabled' : '' }}"
                                                data-action-url="{{ route('neurologist.consultation.request.perform.share.through.email', request()->id) }}"
                                                style="font-family: 'Poppins', sans-serif !important">
                                            <i class="fa fa-envelope-o text-md mx-1" aria-hidden="true"></i>
                                            <span>Share through Email</span>
                                            <span id="shareThroughEmail-loader" class="spinner-border overflow-hidden d-none" role="status"
                                                  style="height: 15px !important;width: 15px !important;margin-left: 5px !important;">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteCommentModal" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" role="dialog" aria-labelledby="deleteCommentModalLabel" aria-hidden="true">
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
    <div class="modal fade" id="communicateDirectlyModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="communicateDirectlyModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h6 class="pt-1 mb-0">Communicate Directly</h6>
                    <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label class="form-label font-weight-bold">Enter Email to share call link</label>
                        <div class="input-group input-group-outline mb-3">
                            <input type="email" name="test" class="form-control communicate_directly_email" placeholder="Enter the email">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary float-end btn-md mt-3 mb-0 text-white communicate-directly"
                            data-action-url="{{ route('neurologist.consultation.request.communicate.directly', request()->id) }}">
                        <span>Communicate Directly</span>
                        <div id="communicateDirectly-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                             style="height: 16px !important;width: 16px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
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
                        <img src="{{ asset('portal/assets/img/happy emoji.png') }}" alt="icon"/>
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
    <script src="{{ asset('portal/assets/js/plugins/multistep-form.js') }}"></script>
    <script>
        $(document).on('click', '.accept-request', function (e) {
            let actionType = 'post';
            let loaderId = 'acceptRequest-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };

            saveInfo(actionURL, actionType, processData, loaderId);
        });

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

        $(document).on('click', '.add-comments', function (e) {
            e.preventDefault();
            let appendClass = 'new-comments';
            let commentNo = $('.neurologist-comment').length + 1;
            let appendValue = `<div class="col-md-12" id='remove-neurologist-comment-${commentNo}'>
                                    <div class="d-flex">
                                        <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important"
                                            >Comment ${commentNo}</label>
                                        <span class="material-symbols-outlined text-danger coursor-pointer text-bold remove-comment"
                                            data-remove-id='remove-neurologist-comment-${commentNo}'
                                            style="padding-left: 5px;font-size: 20px;cursor: pointer;"> delete </span>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <textarea rows="4" class="form-control neurologist-comment w-100"
                                                  name="comments[]"
                                                  aria-describedby="emailHelp" onfocus="focused(this)"
                                                  onfocusout="defocused(this)" style="resize: none;"
                                                  placeholder="Please enter your comments"
                                        ></textarea>
                                    </div>
                                </div>`;
            $(`.${appendClass}`).append(appendValue);
        });

        $(document).on('click', '.remove-comment', function (e) {
            e.preventDefault();
            let removedId = $(this).attr('data-remove-id');
            $(`#${removedId}`).remove();
        });

        $(document).on('click', '.request-remove-data', function (e) {
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let removedName = $(this).attr('data-removed-name');

            $('.removed-data').attr('data-removed-class', removedClass);
            $('.removed-data').attr('data-action-url', actionURL);
            $('.removed-item-name').html(removedName);
            $('#deleteCommentModal').modal('show');
        });

        $(document).on('click', '.removed-data', function (e) {
            let actionType = 'delete';
            let loaderId = 'removed-data-loader';
            let closedModalId = 'deleteCommentModal';
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };

            removeInfo(actionURL, actionType, processData, removedClass, closedModalId, loaderId);
        });

        $(document).on('click', '.communicate-directly', function (e) {
            e.preventDefault();
            let actionType = 'post';
            let modal = 'communicateDirectlyModal';
            let loaderId = 'communicateDirectly-loader';
            let actionURL = $(this).attr('data-action-url');
            let email = $('.communicate_directly_email').val();
            let processData = {
                "_token": "{{ csrf_token() }}",
                "email": email,
            };

            // Email validation regex
            let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (!emailPattern.test(email)) {
                $.notify({
                    title: '<strong>Error!</strong>',
                    message: `<br>Please enter a valid email address.`,
                    icon: 'fa fa-exclamation-triangle',
                }, {
                    // settings
                    type: 'danger',
                    z_index: 2000,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    }
                });
                return;
            }

            let mailToUrl = `mailto:${email}`;

            saveInfo(actionURL, actionType, processData, loaderId);

            setTimeout(function () {
                window.open(mailToUrl, '_blank');
                $(`#${loaderId}`).addClass('d-none');
                $(`#${modal}`).modal('hide');
            }, 1000);
        });

        $(document).on('click', '.share-through-email', function (e) {
            let actionType = 'post';
            let loaderId = 'shareThroughEmail-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = $('.perform-consultation-form').serialize();

            saveInfo(actionURL, actionType, processData, loaderId);
        });

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

        if (document.getElementById('edit-deschiption')) {
            var quill = new Quill('#edit-deschiption', {
                theme: 'snow' // Specify theme in configuration
            });
        }
        ;

    </script>
@endsection
