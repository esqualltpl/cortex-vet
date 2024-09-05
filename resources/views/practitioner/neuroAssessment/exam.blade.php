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
                <a class="opacity-7 text-dark" href="{{ route('practitioner.neuro.assessment') }}">
                    <img src="{{ asset('portal/assets/img/Veterinary Practitioners gray.png') }}" alt="icon" class="me-1"/>
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
            border-radius: 10px !important;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3 mt-3">
                    <div class="col-md-12 d-flex justify-content-between flex-wrap">
                        <h5>Neuro Exam</h5>
                        <p>Patient created on: <span style="color: #5534A5;">{{ $patientInfo->created_at ?? '0000-00-00 00:00' }}</span></p>
                    </div>
                    <div class="row">
                        <h6>Patient Detail</h6>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->patient_id ?? '' }}</p>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->owner_name ?? '' }}</p>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->patient_name ?? '' }}</p>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->dob ?? '' }}</p>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->sex ?? '' }}</p>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->breedInfo?->name ?? '' }}</p>
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
                                                            <input class="form-check-input toggle-weight-switch" data-weight="{{ $patientInfo->weight ?? '' }}" type="checkbox"
                                                                   id="weightSwitch" {{ $patientInfo->weight_type == 'Kgs' ? 'checked' : '' }}>
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
                                                        <span class="toggle-weight">{{ $patientInfo->weight ?? '' }}</span>
                                                        <span class="text-sm toggle-weight-label">{{ $patientInfo->weight_type ?? '' }}</span>
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
                                                    <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->specieTypeInfo?->name ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div style="width: 90px; max-height: 90px">
                                <img src="{{ $patientInfo->getPatientImage($patientInfo->specieTypeInfo?->name ?? null,$patientInfo->breedInfo?->image ?? null) }}" alt="icon"
                                     style="width: 130px;height: 130px;border-radius:300px;"/>
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
                                        title="Neurological Exam Steps">Neurological Exam Steps
                                </button>
                                <button class="multisteps-form__progress-btn" type="button"
                                        title="Neurolocalizations">Neurolocalizations
                                </button>
                            </div>
                        </div>
                    </div>
                    <form class="multisteps-form__form neuro-exam-form" action="{{ route('practitioner.neuro.assessment.treated', request()->id) }}" method="post">
                        @csrf
                        <div class="neuro-exam-info">
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
                                                <textarea rows="4" class="form-control w-100 medical_history-validation"
                                                          {{--readonly="true"--}}
                                                          name="medical_history"
                                                          aria-describedby="Medical History" onfocus="focused(this)"
                                                          onfocusout="defocused(this)"
                                                          style="resize: none;"
                                                          placeholder="Please describe the presenting complaint and associated history. Please also note any historical medical information. Please include the results of any diagnostics already performed. Please note any previous therapies and response."
                                                >{{ $neuroAssessmentInfo->medical_history ?? '' }}</textarea>
                                                <span class="text-danger medical_history-error mt-1 text-sm px-1 d-none">Medical History field is required.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Vaccination History
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          {{--readonly="true"--}}
                                                          name="vaccination_history"
                                                          aria-describedby="Vaccination History" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Please comment if this patient is up to date on vaccines (rabies and distemper)."
                                                >{{ $neuroAssessmentInfo->vaccination_history ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Diet/Feeding Routine
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          {{--readonly="true"--}}
                                                          name="diet_feeding_routine"
                                                          aria-describedby="Diet/Feeding Routine" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Please note the type of diet and feeding frequency."
                                                >{{ $neuroAssessmentInfo->diet_feeding_routine ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Current Therapy/Response
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          {{--readonly="true"--}}
                                                          name="current_therapy_response"
                                                          aria-describedby="Current Therapy/Response" onfocus="focused(this)"
                                                          onfocusout="defocused(this)"
                                                          style="resize: none;"
                                                          placeholder="Please note any current or previous therapies and include clinical response to each therapy"
                                                >{{ $neuroAssessmentInfo->current_therapy_response ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label font-weight-bold" style=" font-family: 'Poppins', sans-serif !important">
                                                Patient's Environment
                                            </label>
                                            <div class="input-group input-group-outline mb-3">
                                                <textarea rows="4" class="form-control w-100"
                                                          {{--readonly="true"--}}
                                                          name="patients_environment"
                                                          aria-describedby="Patient's Environment" onfocus="focused(this)"
                                                          onfocusout="defocused(this)" style="resize: none;"
                                                          placeholder="Please note if the patient is indoor/outdoor, has recent travel, other pets in the home, and any environmental history such as tick or potential toxin exposure."
                                                >{{ $neuroAssessmentInfo->patients_environment ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button
                                                class="btn btn-primary text-white ms-auto conduct-exam-button {{ isset($neuroAssessmentInfo) && $neuroAssessmentInfo->medical_history ? 'js-btn-next' : '' }}"
                                                type="button"
                                                title="Conduct Exam"
                                        >
                                            Conduct Exam
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
                                                       onchange="toggleVideo('mainFirstVideo', this.checked ? 'show' : 'hide')">
                                            </div>
                                        </div>
                                        <div id="mainFirstVideo" style="display: none;">
                                            <div class=" p-5 border-radius-lg" style="border: 1px solid #e8e8e8;">
                                                <div class="p-2 d-flex justify-content-center">
                                                    @if($mainFirstVideo != null)
                                                        @if($mainFirstVideo->video ?? '' != null)
                                                            <video controls="" style="width: 70%">
                                                                <source src="{{ $mainFirstVideo->getMainFirstVideo() ?? '' }}">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        @elseif($mainFirstVideo->url ?? '' != null)
                                                            <iframe width="70%" height="415" src="{{ $mainFirstVideo->url ?? '' }}" frameborder="0"
                                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                    allowfullscreen></iframe>
                                                        @else
                                                            <p class="text-center mt-3 font-weight-bold">No Video/URL Found.</p>
                                                        @endif
                                                    @else
                                                        <p class="text-center mt-3 font-weight-bold">No Video/URL Found.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="neurological-exam-steps-info">
                                            @foreach($examsInfo as $examInfo)
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
                                                                                @if($examInfo->instructionVideoInfo->video ?? '' != null)
                                                                                    <video controls="" style="width: 70%">
                                                                                        <source src="{{ $examInfo->instructionVideoInfo->getExamVideo() ?? '' }}">
                                                                                        Your browser does not support the video tag.
                                                                                    </video>
                                                                                @elseif($examInfo->instructionVideoInfo->url ?? '' != null)
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
                                                                                                                        <div class="col-md-2 col-sm-6">
                                                                                                                            <div class="form-check ps-0">
                                                                                                                                <input class="form-check-input" type="radio"
                                                                                                                                       {{ isset($neurologicalExamStepInfo[$examInfo->id ?? 0][$testInfo->id ?? 0]) && $neurologicalExamStepInfo[$examInfo->id ?? 0][$testInfo->id ?? 0] == $options->id ? 'checked' ?? '' : '' }}
                                                                                                                                       name="options[{{$examInfo->id ?? 0}}][{{$testInfo->id ?? 0}}]"
                                                                                                                                       value="{{ $options->id }}"
                                                                                                                                       id="customRadio{{ $options->id }}">
                                                                                                                                <label class="custom-control-label"
                                                                                                                                       for="customRadio{{ $options->id }}">{{ $options->name ?? '' }}</label>
                                                                                                                            </div>
                                                                                                                        </div>
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
                                            @endforeach
                                        </div>
                                        <div class="button-row d-flex justify-content-end gap-3 mt-4">
                                            <!-- <button class="btn bg-gradient-primary mb-0 js-btn-next" type="button"
                                                title="Back">Back</button> -->
                                            <button class="btn btn-primary text-white mb-2 js-btn-next get-neuro-exam-result"
                                                    data-action-url="{{ route('practitioner.neuro.assessment.exam.result', request()->id) }}"
                                                    type="button"
                                                    title="Localize">Localize
                                            </button>
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
                                                      aria-describedby="Result"
                                                      onfocus="focused(this)"
                                                      onfocusout="defocused(this)"
                                                      style="resize: none;"
                                            >{{ $neuroAssessmentInfo->result ?? '' }}</textarea>
                                        </div>
                                        <div id="neuroExamResult-loader" class="text-center d-none" style="margin-left: 34px;">
                                            <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                        </div>
                                    </div>
                                    <div class="button-row d-flex justify-content-end gap-2 mt-4">
                                        <button class="btn btn-primary text-white px-3 request-consult-neurologist-data"
                                                data-patient-name="{{ $patientInfo->patient_name ?? '' }}"
                                                data-action-url="{{ route('practitioner.neuro.assessment.consult.neurologist.request', request()->id) }}"
                                                type="button" title="Consult Neurologist">
                                            <i class="fas fa-user-md me-2 mx-1" style=" font-size: 14px; !important;" aria-hidden="true"></i>
                                            Consult Neurologist
                                        </button>
                                        <button class="btn btn-primary text-white" type="submit" title="Finished">Finished</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="consultNeurologistRequestModal" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" role="dialog" aria-labelledby="consultNeurologistRequestModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document" style="">
                <div class="modal-content ">
                    <div class=" modal-header" style="background-color: #8871c096;border-bottom: none;">
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: #8871c096;">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('portal/assets/img/consultation-request.png') }}" style="width: 120px !important;" alt="icon"/>
                        </div>
                        <div class="text-center  m-3 p-3">
                            <p class="text-white">Are you sure you want to send <span class="text-bold patient-name-show"></span> consultation request to Neurologists?</p>
                        </div>
                    </div>
                    <div class="conformation">
                        <div class="my-3">
                            <a href="javascript:">
                                <p class="justify-content-center font-weight-bold text-info consult-neurologist-request d-flex">
                                    <span>
                                        Continue
                                    </span>
                                    <span id="consultNeurologistRequest-loader" class="spinner-border overflow-hidden d-none" role="status"
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
    </div>
@endsection

@section('script')
    <script src="{{ asset('portal/assets/js/plugins/multistep-form.js') }}"></script>
    <script>
        $(document).on('click', '.conduct-exam-button', function (e) {
            let validation_class = $('.medical_history-validation').val().trim();

            if (!validation_class) {
                e.preventDefault();
                $('.medical_history-error').removeClass('d-none');
            } else {
                $('.medical_history-error').addClass('d-none');
            }
        });

        $(document).on('input', '.medical_history-validation', function () {
            if ($(this).val().trim() !== '') {
                $('.medical_history-error').addClass('d-none');
                $('.conduct-exam-button').addClass('js-btn-next');
            }else{
                $('.medical_history-error').removeClass('d-none');
                $('.conduct-exam-button').removeClass('js-btn-next');
            }
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

        $(document).on('click', '.get-neuro-exam-result', function (e) {
            let actionType = 'get';
            let loaderId = 'neuroExamResult-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = $('.neuro-exam-form').serialize();
            let renderClass = 'neuro-exam-result';

            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.request-consult-neurologist-data', function (e) {
            let actionURL = $(this).attr('data-action-url');
            let patientName = $(this).attr('data-patient-name');

            $('.consult-neurologist-request').attr('data-action-url', actionURL);
            $('.patient-name-show').text(patientName);
            $('#consultNeurologistRequestModal').modal('show');
        });

        $(document).on('click', '.consult-neurologist-request', function (e) {
            let actionType = 'post';
            let loaderId = 'consultNeurologistRequest-loader';
            let closedModalId = 'consultNeurologistRequestModal';
            let actionURL = $(this).attr('data-action-url');
            let processData = $('.neuro-exam-form').serialize();

            saveInfo(actionURL, actionType, processData, loaderId, null, null, closedModalId);
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

        if (document.getElementById('edit-deschiption')) {
            var quill = new Quill('#edit-deschiption', {
                theme: 'snow' // Specify theme in configuration
            });
        }
    </script>
@endsection
