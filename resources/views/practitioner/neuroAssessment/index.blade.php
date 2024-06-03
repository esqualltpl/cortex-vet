@extends("practitioner.layout.master")
@section('title')
    Neuro Assessment
@endsection
@section('type')
    Practitioner
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Veterinary Practitioners purple.png') }}" alt="icon"/>
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Neuro Assessment</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-2">
                    <div class=" mb-0 d-flex justify-content-between p-2 bg-transparent">
                        <div class="pt-2">
                            <h6 class="mx-2 mb-0 text-capitalize font-weight-800">Neuro Assessment</h6>
                        </div>
                    </div>
                    <form action="{{ route('practitioner.neuro.assessment.patient.id.info') }}" method="post">
                        @csrf
                        <div class="p-2 d-flex justify-content-center flex-column align-items-center gap-4">
                            <img src="{{ asset('portal/assets/img/Neuro Assessment Illustration.png') }}" alt="icon" width="300">
                            <div class="p-3 w-md-50" style="background: #EAF4F6; border-radius: 13px;">
                                <h6>Select Patient ID</h6>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" name="patient_id" value="{{ old('patient_id') }}" class="form-control @error('patient_id') is-invalid @enderror" placeholder="Enter patient ID">
                                    @error('patient_id')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="pe-7 pt-3 pb-4">
                            <button type="submit" class="btn btn-primary float-end btn-md text-white ">
                                Next
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
