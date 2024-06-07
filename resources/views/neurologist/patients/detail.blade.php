@extends("neurologist.layout.master")
@section('title')
    Patient Detail
@endsection
@section('type')
    Neurologist
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ route('neurologist.patients') }}">
                    <img src="{{ asset('portal/assets/img/Patients gray.png') }}" alt="icon" class="me-1"/>
                    Patients
                </a>
            </li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">{{ $patientInfo->patient_name ?? '' }}</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="col-md-12">
            <div class="card p-4 py-3">
                <div class="col-md-12 d-flex justify-content-between">
                    <div class="d-lg-flex">
                        <a href="{{ url()->previous() }}" class="text-start">
                            <span class="material-icons-round font-weight-normal" style="color:#2E97A9;"> arrow_back </span>
                        </a>
                        <h5 class="mb-0 px-2">Neuro Exam {{ $neuro_exam_no }}</h5>
                    </div>
                    <p><span style="color: #2E97A9;">{{ $neuroExamInfo->created_at->format('m-d-yy') }}</span></p>
                </div>
                <div class="col-md-10 d-flex justify-content-between flex-wrap">
                    <div class="col-md-6 d-md-flex gap-2">
                        <p class="font-weight-bold text-dark mb-1">Practitioner Name:
                        </p>
                        <p class="font-weight-normal text-dark opacity-8">
                            {{ $neuroExamInfo->treatedByInfo?->name ?? '-' }}
                        </p>
                    </div>
                    <div class="col-md-6 d-md-flex gap-2">
                        <p class="font-weight-bold me-4 text-dark mb-1">Consultant Neurologist:
                        </p>
                        <p class="font-weight-normal text-dark opacity-8">
                            {{ $neuroExamInfo->consultByInfo?->name ?? '-' }}
                        </p>
                    </div>
                </div>
                <div class="row p-2">
                    <h6 class="px-0 pb-0">History</h6>
                    <div class="container p-0">
                        <div class="row gx-2">
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Medical History</p>
                                    <p>{{ $neuroExamInfo->medical_history ?? '' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Vaccination History</p>
                                    <p>{{ $neuroExamInfo->vaccination_history ?? '' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Diet/Feeding Routine</p>
                                    <p>{{ $neuroExamInfo->diet_feeding_routine ?? '' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="p-2 rounded-lg border-radius-lg " style="border:1px solid #bab8b8; height: 100%;">
                                    <p class="font-weight-bold text-dark">Current Therapy/Response</p>
                                    <p>{{ $neuroExamInfo->current_therapy_response ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-2 mt-3   border-radius-lg " style="border:1px solid #bab8b8;">
                        <p class="font-weight-bold text-dark ">Patient's Environment</p>
                        <p>{{ $neuroExamInfo->patients_environment ?? '' }}</p>
                    </div>
                </div>
                <hr class="horizontal dark"/>
                <div class="col-md-12 mt-3 ">
                    <h6>Neurological Exam</h6>
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
                                                                                                <div class="col-md-2 col-sm-6">
                                                                                                    <div class="form-check ps-0">
                                                                                                        <input class="form-check-input" type="radio"
                                                                                                               {{ isset($neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0]) && $neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0] == $options->id ? 'checked' : '' }}
                                                                                                               name="options[{{$examInfo->id ?? 0}}][{{$testInfo->id ?? 0}}]" value="{{ $options->id }}"
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
                    @endif
                @endforeach
                <hr class="horizontal dark my-4"/>
                <div class="row">
                    <h6>Neurolocalizations</h6>
                    <div class="row mt-3  gap-8 ms-1">
                        <div class="col-md-5 p-2  border-radius-lg " style="border:1px solid #bab8b8;">
                            <strong style="color: #2E97A9;">Results:</strong>
                            <p>{{ $neuroExamInfo->result ?? '' }}</p>
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
        if (document.getElementById('datatable-basic')) {
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-basic", {
                searchable: true,
                fixedHeight: false,
                perPage: 10
            });
        }

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

        $(document).on('click', '.appointment-history-note', function (e) {
            let actionType = 'get';
            let loaderId = 'notesModal-loader';
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'neuro-assessment-notes-info';

            getInfo(actionURL, actionType, processData, loaderId, renderClass);
        });

        $(document).on('click', '.save-notes', function (e) {
            let actionType = 'post';
            let loaderId = 'saveNotes-loader';
            let actionURL = $(this).attr('data-action-url');
            let formId = 'saveNotesForm';
            let closeModalId = 'notesModal';
            let processData = $(`#${formId}`).serialize();
            let renderClass = null;

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass, closeModalId);
        });
    </script>
@endsection
