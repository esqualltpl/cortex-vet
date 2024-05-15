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
                                    <p class="mb-0 text-start  font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0">
                                    <img src="{{ asset('portal/assets/img/Consultation Request.png') }}" style="width: 90px;" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card p-2  mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Total Payment</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0">
                                    <img src="{{ asset('portal/assets/img/Total Payment.png') }}" style="width: 90px;" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4">
                        <div class="card p-2  mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class=" mb-0 text-capitalize font-weight-800">Past Consultations</h6>
                                    <p class="mb-0 text-start  font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0">
                                    <img src="{{ asset('portal/assets/img/Patients Count.png') }}" style="width: 90px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card  mb-2">
                    <div class=" mb-0 d-flex justify-content-between p-2  bg-transparent">
                        <div class="pt-1">
                            <h5 class="mb-0 text-capitalize font-weight-800 mx-2">Resources</h5>
                            <p class="mb-0 text-start font-weight-400 mt-1 mx-2">Lorem Ipsum Dolor - Sit Amet (consecrate)</p>
                        </div>
                    </div>
                    <div class="p-2 mb-4 d-flex justify-content-center">
                        <video controls style="width: 60%" class="w-100 w-md-55">
                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
