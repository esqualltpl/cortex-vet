@extends("neurologist.layout.master")
@section('title')
    Dashboard
@endsection
@section('type')
    Neurologist
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="javascript:;">
                <span class="material-symbols-outlined">
                  dashboard
                  </span>
                </a>
            </li>
            <li class=" text-sm text-dark active px-1" aria-current="page">Dashboard</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        .card .card-footer {
            padding: 3%;
            background-color: transparent;
        }

        .card .card-header {
            padding: 1.5rem;
            padding-bottom: 0px !important;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card p-2 mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Consultation Request</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['consultation_request'] ?? 0 }}</p>
                                </div>
                                <div class="mb-0">
                                    <img src="{{ asset('portal/assets/img/Consultation Request.png') }}" style="width: 90px;" alt="icon"/>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card p-2  mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Total Payment</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['total_payment'] ?? 0 }}</p>
                                </div>
                                <div class="mb-0">
                                    <img src="{{ asset('portal/assets/img/Total Payment.png') }}" style="width: 90px;" alt="icon"/>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4">
                        <div class="card p-2  mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Past Consultations</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">{{ $dashboardInfo['past_consultations'] ?? 0 }}</p>
                                </div>
                                <div class="mb-0">
                                    <img src="{{ asset('portal/assets/img/Patients Count.png') }}" style="width: 90px;" alt="icon"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-2">
                    <div class=" mb-0 d-flex justify-content-between p-2 bg-transparent">
                        <div class="pt-1">
                            <h6 class="mb-0 text-capitalize font-weight-800 px-2">Resources</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="p-3">
                                @if($resourceInfo != null)
                                    @if($resourceInfo['type'] == 'video')
                                        <video controls="" style="width: 100%">
                                            <source src="{{ $resourceInfo['video'] ?? '' }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif($resourceInfo['type'] == 'url')
                                        <iframe width="100%" height="415" src="{{ $resourceInfo['video'] ?? '' }}" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    @else
                                        <p class="text-center mt-3 font-weight-bold">No Resource Found.</p>
                                    @endif
                                @else
                                    <p class="text-center mt-3 font-weight-bold">No Resource Found.</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
