@extends("practitioner.layout.master")
@section('title')
    Dashboard
@endsection
@section('type')
    Admin
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
@endsection

@section('content')
    <div class="container-fluid py-2 ">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card p-2 mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2 bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class="mb-0 text-capitalize font-weight-800">Canine Patients</h6>
                                    <p class="mb-0 text-start font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Canine Patients.png') }}" style="width: 90px;" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card p-2 mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2 bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class="mb-0 text-capitalize font-weight-800">Feline Patients</h6>
                                    <p class="mb-0 text-start font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Feline Patients.png') }}" style="width: 90px;" /></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4">
                        <div class="card p-2 mb-2">
                            <div class=" mb-0 d-flex justify-content-between p-2 bg-transparent">
                                <div class="text-end pt-1">
                                    <h6 class="mb-0 text-capitalize font-weight-800">Exotic Patients</h6>
                                    <p class="mb-0 text-start font-weight-400 mt-3">237</p>
                                </div>
                                <div class="mb-0"><img alt="icon" src="{{ asset('portal/assets/img/Exotic Patients.png') }}" style="width: 90px;" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card  mb-2">
                    <div class=" mb-0 d-flex justify-content-between p-2 bg-transparent">
                        <div class="pt-1">
                            <h6 class=" mb-0 text-capitalize font-weight-800">Resources</h6>
                            <p class="mb-0 text-start font-weight-400 mt-1">Lorem Ipsum Dolor - Sit Amet (consecrate)</p>
                        </div>
                    </div>
                    <div class="p-3">
                        <video controls style="width: 100%">
                            <source src="{{ asset('portal/assets/img/vet sample video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-2">
                    <button type="button" class="btn btn-primary btn-lg text-white mt-2 mb-2"
                            style=" font-family: 'Poppins', sans-serif !important"
                            onclick="location.href = '{{ route("practitioner.add.new.patient") }}'">
                        Add New Patient
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
