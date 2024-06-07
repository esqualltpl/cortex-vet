@extends("neurologist.layout.master")
@section('title')
    Consultation Request
@endsection
@section('type')
    Neurologist
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Consultation Request purple.png') }}" alt="icon"/>
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Consultation Request</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4 pt-2 mb-2">
                    <div class="mb-0 d-flex justify-content-between p-2  bg-transparent">
                        <h6 class=" mb-0 text-capitalize font-weight-800">Consultation Request</h6>
                    </div>
                    @if(count($consultationRequests) > 0)
                    @foreach($consultationRequests as $consultationRequest)
                        @if($consultationRequest->accept_by == null)
                            <div class="card p-2 mt-3">
                                <div class="row ">
                                    <div class="col-md-1 mt-3">
                                        <img src="{{ asset('portal/assets/img/Consultation Request img.png') }}" alt="icon"
                                             class="w-100" style="border-radius: 100px;"/>
                                    </div>
                                    <div class="col-md-9 mt-3 d-flex flex-wrap justify-content-between">
                                        <div class="col-md-3  ">
                                            <p class="font-weight-bold text-dark">Requested By:</p>
                                            <p class="font-weight-bold text-dark">Requested Time:</p>
                                        </div>

                                        <div class="col-md-3 ">
                                            <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->addedByInfo?->name ?? '' }}</p>
                                            <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->request_date_time ?? '' }}</p>
                                        </div>
                                        <div class="col-md-3  ">
                                            <p class="font-weight-bold text-dark">Patient Breed:</p>
                                            <p class="font-weight-bold text-dark">Patient Age:</p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->breedInfo?->name ?? '' }}</p>
                                            <p class="font-weight-normal text-dark opacity-8">{{ calculateAge($consultationRequest->neuroAssessmentInfo?->patientInfo?->dob ?? '0000-00-00') ?? 0 }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ms-auto my-4">
                                        <a href="{{ route('neurologist.consultation.detail', Crypt::encrypt($consultationRequest->id)) }}">
                                            <button class="btn btn-outline-primary btn-sm mb-2" type="button" title="Accept">Perform Consultation</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @elseif($consultationRequest->accept_by == auth()->user()->id)
                            <div class="card p-2 mt-3" style="background-color: #D4FFD8;">
                                <div class="row ">
                                    <div class="col-md-1 mt-3">
                                        <img src="{{ asset('portal/assets/img/Consultation Request img.png') }}" alt="icon"
                                             class="w-100" style="border-radius: 100px;"/>
                                    </div>
                                    <div class="col-md-9 mt-3 d-flex flex-wrap justify-content-between">
                                        <div class="col-md-3  ">
                                            <p class="font-weight-bold text-dark">Requested By:</p>
                                            <p class="font-weight-bold text-dark">Requested Time:</p>
                                        </div>

                                        <div class="col-md-3 ">
                                            <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->addedByInfo?->name ?? '' }}</p>
                                            <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->request_date_time ?? '' }}</p>
                                        </div>
                                        <div class="col-md-3  ">
                                            <p class="font-weight-bold text-dark">Patient Breed:</p>
                                            <p class="font-weight-bold text-dark">Patient Age:</p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <p class="font-weight-normal text-dark opacity-8">{{ $consultationRequest->neuroAssessmentInfo?->patientInfo?->breedInfo?->name ?? '' }}</p>
                                            <p class="font-weight-normal text-dark opacity-8">{{ calculateAge($consultationRequest->neuroAssessmentInfo?->patientInfo?->dob ?? '0000-00-00') ?? 0 }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ms-auto my-4">
                                        <a href="{{ route('neurologist.consultation.detail', Crypt::encrypt($consultationRequest->id)) }}">
                                            <button class="btn text-success pt-2" style="background-color: #4CAF5033;text-transform: none" type="button" title="Consulted">Consulted</button>
                                        </a>
                                        {{--<button class="btn text-success" style="background-color: #4CAF5033;text-transform: none" type="button" disabled title="Consulted">Consulted</button>--}}
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach
                    @else
                        <p class="text-center mt-5 font-weight-bold">No Consultation Request Found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
