@extends("admin.layout.master")
@section('title')
    Report Detail
@endsection
@section('type')
    Admin
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

            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">{{ $neuroExamInfo->patientInfo?->patient_name ?? '' }}</li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Report Detail</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container py-4">
        <div class="col-md-12">
            <div class="card  mt-3 ">
                <div class="col-md-12 d-flex justify-content-between px-5 py-3">
                    <div class="col-md-1 w-60"><img style="width: 110px" src="{{ asset('portal/assets/img/Logo.png') }}" alt="icon"/></div>
                </div>
                <h3 class="font-weight-bolder text-center" style="color: #866FBF;">Patient Report</h3>
                <p style="border-bottom: 1px solid #F3F3F3;"></p>
                <div class="row justify-content-md-between px-5">
                    <div class="col-lg-3 col-md-7 ">
                        <div class="d-flex align-items-center" style="">
                            <img src="{{ $neuroExamInfo->patientInfo?->getPatientImage($neuroExamInfo->patientInfo?->specieTypeInfo?->name ?? null,$neuroExamInfo->patientInfo?->breedInfo?->image ?? null) }}"
                                 class="avatar me-2" alt="icon"/>
                            <h6 style="color: #3099AB;" class="mb-0">{{ $neuroExamInfo->patientInfo?->patient_name ?? '' }}</h6>
                        </div>
                        <div class="row mt-md-3 text-md-end text-start">
                            <div class="col-md-5">
                                <h6 class="text-secondary text-start font-weight-normal mb-0">Patient ID:</h6>
                            </div>
                            <div class="col-md-7">
                                <h6 class="text-dark text-start mb-0">{{ $neuroExamInfo->patientInfo?->patient_id ?? 'pid-' }}</h6>
                            </div>
                        </div>
                        <div class="row  text-start">
                            <div class="col-md-5">
                                <h6 class="text-secondary font-weight-normal mb-0"> Breed:</h6>
                            </div>
                            <div class="col-md-7">
                                <h6 class="text-dark mb-0">{{ $neuroExamInfo->patientInfo?->breedInfo?->name ?? '-' }}</h6>
                            </div>
                        </div>
                        <div class="row  text-start">
                            <div class="col-md-5">
                                <h6 class="text-secondary font-weight-normal mb-0">Age/DOB:</h6>
                            </div>
                            <div class="col-md-7">
                                <h6 class="text-dark mb-0">{{ $neuroExamInfo->patientInfo?->dob ?? '-' }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-end">
                        <div class="row mt-md-5 mt-4 text-md-end text-start">
                            <div class="col-md-12">
                                <h6 class="text-secondary text-start font-weight-normal mb-0">
                                    <i class="fa fa-calendar-o mx-2" aria-hidden="true"></i>
                                    {{ $neuroExamInfo->patientInfo?->created_at ?? '0000-00-00 00:00' }}
                                </h6>
                            </div>

                        </div>
                        <div class="row text-end">
                            <div class="col-md-6 mx-2">
                                <h6 class="text-secondary  text-start font-weight-normal mb-0">Practitioner Name:
                                </h6>
                            </div>
                            <div class="col-md-5">
                                <h6 class="text-dark mb-0">{{ $neuroExamInfo->addedByInfo?->name ?? '-' }}</h6>
                            </div>
                        </div>
                        <div class="row text-end">
                            <div class="col-md-6 mx-2">
                                <h6 class="text-secondary  text-start font-weight-normal mb-0">Neurologist Name:
                                </h6>
                            </div>
                            <div class="col-md-5">
                                <h6 class="text-dark mb-0">{{ $neuroExamInfo->consultByInfo?->name ?? '-' }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="mx-10 my-4" style="border-bottom: 4px solid #866FBF;"></p>
                <div class="col-12 col-md-6 border-radius-sm px-5 py-2" style="background-color:#E3DCF3;">
                    <h5>History</h5>
                </div>

                <div class="px-5 py-3">

                    <h6>Medical History:</h6>
                    <p>{{ $neuroExamInfo->medical_history ?? 'No information found.' }}</p>
                    <h6>Vaccination History:</h6>
                    <p>{{ $neuroExamInfo->vaccination_history ?? 'No information found.' }}</p>
                    <h6>Diet/Feeding Routine:</h6>
                    <p>{{ $neuroExamInfo->diet_feeding_routine ?? 'No information found.' }}</p>
                    <h6>Current/Therapy Response:</h6>
                    <p>{{ $neuroExamInfo->current_therapy_response ?? 'No information found.' }}</p>
                    <h6>Patient's Environment:</h6>
                    <p>{{ $neuroExamInfo->patients_environment ?? 'No information found.' }}</p>
                </div>
                <p class="mx-10 my-4" style="border-bottom: 4px solid #866FBF;"></p>
                <div class="col-12 col-md-6 border-radius-sm px-5 py-2" style="background-color:#E3DCF3;">
                    <h5>Neurological Exam Findings</h5>
                </div>
                <div class="px-5 py-3">
                    @php($neurologicalExamSteps = json_decode($neuroExamInfo->neurological_exam_steps, true) ?? [])
                    @if(count($neurologicalExamSteps) > 0)
                        @foreach($examsInfo as $examInfo)
                            @if(isset($neurologicalExamSteps[$examInfo->id ?? 0]))
                                <h6>{{ $examInfo->step_name ?? '' }}</h6>
                                @if(count($examInfo->testInfo) > 0)
                                    @foreach($examInfo->testInfo as $testKey=>$testInfo)
                                        @php($test_sn = $testKey+1)
                                        <p>{{ $testInfo->name ?? '' }}:
                                            @foreach($testInfo->optionsInfo ?? [] as $optionKey=>$options)
                                                @php($option_sn = $optionKey +1)
                                                <strong style="color: #866FBF;">{{ isset($neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0][$options->id ?? 0]) && $neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0][$options->id ?? 0] == $options->id ? $options->name ?? '' : '' }}</strong>
                                            @endforeach
                                        </p>
                                    @endforeach
                                @endif
                            @endif
                        @endforeach
                    @else
                        <p> No :
                            <strong style="color: #866FBF;">No Information found</strong>
                        </p>
                    @endif
                </div>
                <p class="mx-10 my-4" style="border-bottom: 4px solid #866FBF;"></p>


                <div class="col-12 col-md-6 border-radius-sm px-5 py-2" style="background-color:#E3DCF3;">
                    <h5>Neurolocalizations</h5>
                </div>
                <div class="px-5 py-3">
                    <h6>Result</h6>
                    <p>{{ $neuroExamInfo->result ?? 'No result found.' }}</p>
                </div>

                <p class="mx-10 my-4" style="border-bottom: 4px solid #866FBF;"></p>
                <div class="col-12 col-md-6 border-radius-sm px-5 py-2" style="background-color:#E3DCF3;">
                    <h5>Neurologist's Comments</h5>
                </div>
                <div class="px-5 py-3">
                    @php($neurologicalComments = json_decode($neuroExamInfo->consultationInfo?->comments, true) ?? [])
                    @if(count($neurologicalComments) > 0)
                        @foreach($neurologicalComments as $neurologicalCommentKey =>$neurologicalComment)
                            <p><strong>{{ $neurologicalCommentKey+1 }}.</strong> {{$neurologicalComment ?? ''}}</p>
                        @endforeach
                    @else
                        <p class="text-center">No comments found.</p>
                    @endif
                </div>
                <p class="text-center font-weight-bold text-lg">Thank You</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection