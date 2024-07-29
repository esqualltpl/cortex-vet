@extends("practitioner.layout.master")
@section('title')
    Patients
@endsection
@section('type')
    Neurologist
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Patients gray.png') }}" alt="icon" />
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Patients</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h6 class="mb-0">Patients</h6>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                            <tr>
                                <th>Patient ID</th>
                                <th>Owner Name</th>
                                <th>Patient Name</th>
                                <th>Specie Type</th>
                                <th>Breed</th>
                                <th>Date & Time</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                            <tr>
                                <td class="text-sm ">
                                    {{ $patient->patient_id ?? '' }}
                                </td>
                                <td class="text-sm ">
                                    {{ $patient->owner_name ?? '' }}
                                </td>
                                <td class="text-sm "><img src="{{ $patient->getPatientImage($patient->specieTypeInfo?->name ?? null,$patient->breedInfo?->image ?? null) }}" alt="icon" class="avatar"> {{ $patient->patient_name ?? '' }}</td>
                                <td class="text-sm">
                                    {{ $patient->specieTypeInfo?->name ?? '' }}
                                </td>
                                <td class="text-sm">
                                    {{ $patient->breedInfo?->name ?? '' }}
                                </td>
                                <td class="text-sm">
                                    {{ $patient->created_at ?? '' }}
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('practitioner.patient.detail', Crypt::encrypt($patient->id)) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                    <a href="{{ route('practitioner.neuro.assessment.exam', Crypt::encrypt($patient->id)) }}">
                                        <img src="{{ asset('portal/assets/img/Veterinary Practitioners Blue.png') }}" style=" width: 29px !important; margin-left: 2px !important; " alt="icon">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
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
    </script>
@endsection
