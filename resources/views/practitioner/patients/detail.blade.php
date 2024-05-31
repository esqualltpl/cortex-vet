@extends("practitioner.layout.master")
@section('title')
    Patient Detail
@endsection
@section('type')
    Practitioner
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ route('practitioner.patients') }}">
                    <img src="{{ asset('portal/assets/img/Patients gray.png') }}" alt="icon" class="me-1" />
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
        <div class="card p-3 mt-3">
            <div class="col-md-12 d-flex justify-content-between flex-wrap">
                <h5>{{ $patientInfo->patient_name ?? '' }} Detail</h5>
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
                                                    <input class="form-check-input toggle-weight-switch" data-weight="{{ $patientInfo->weight ?? '' }}" data-weight-type="{{ $patientInfo->weight_type ?? '' }}" type="checkbox" id="weightSwitch" {{ $patientInfo->weight_type ?? '' == 'kgs' ? 'checked' : '' }}>
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
                        <img src="{{ $patientInfo->getPatientImage($patientInfo->specieTypeInfo?->name ?? null,$patientInfo->breedInfo?->image ?? null) }}" alt="icon" style="width: 130px;height: 130px;border-radius:300px;"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3 ">
            <h6 class="p-3">Appointment History</h6>
            <div class="table-responsive">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                    <tr>
                        <th>Date</th>
                        <th>Veterinary Practitioner</th>
                        <th>Consulting Neurologist</th>
                        <th>Neuro Exam Conducted</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    {{--<tbody>
                    <tr>
                        <td class="text-sm ">
                            1-01-2024, 11:10 Am
                        </td>
                        <td class="text-sm "><img src="{{ asset('portal/assets/img/Image 1.png') }}" alt="icon" class="avatar" /> Ryan Holland
                        </td>
                        <td class="text-sm "><img src="{{ asset('portal/assets/img/Image 2.png') }}" alt="icon" class="avatar" /> Ryan Holland
                        </td>

                        <td class="text-sm ">
                            <a href="{{ route('practitioner.patient.neuro.exam', 1) }}" class="text-info text-decoration-underline">   Neuro Exam 1</a>
                        </td>
                        <td class="">
                            <div class="input-group input-group-outline w-50" data-bs-toggle="modal"
                                 data-bs-target="#Notes">
                                <input type="text" class="form-control" placeholder="lorem Ipsum">
                            </div>
                        </td>
                        <td class="">
                            <a href="{{ route('practitioner.patient.neuro.exam', 1) }}"><i class="material-symbols-outlined">
                                    note_alt
                                </i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-sm ">
                            1-01-2024, 11:10 Am
                        </td>
                        <td class="text-sm "><img src="{{ asset('portal/assets/img/Image 1.png') }}" alt="icon" class="avatar" /> Ryan Holland
                        </td>
                        <td class="text-sm "><img src="{{ asset('portal/assets/img/Image 2.png') }}" alt="icon" class="avatar" /> Ryan Holland
                        </td>

                        <td class="text-sm ">
                            <a href="{{ route('practitioner.patient.neuro.exam', 1) }}" class="text-info text-decoration-underline">   Neuro Exam 1</a>
                        </td>
                        <td class="">
                            <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                        </td>
                        <td class="">
                            <a href="{{ route('practitioner.patient.neuro.exam', 1) }}"><i class="material-symbols-outlined">
                                    note_alt
                                </i></a>
                        </td>
                    </tr>
                    </tbody>--}}
                </table>
            </div>
        </div>
        <div class="modal fade" id="Notes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-lg " role="document">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i
                                    class="material-symbols-outlined text-sl text-info">
                                description
                            </i>Notes</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="input-group input-group-outline">
                                <textarea class="form-control"
                                          placeholder="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,"
                                          id="jkanban-task-description" rows="10" readonly></textarea>
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

        $(document).on('change','.toggle-weight-switch', function (){
            let weight = $(this).attr('data-weight');
            let weightType = $(this).attr('data-weight-type');
            let currentValue = parseFloat(weight);

            $(`#toggleWeight-loader`).removeClass('d-none');
            $(`.toggle-weight-switch-info`).addClass('d-none');

            if (weightType === 'kgs') {
                let newValue = (currentValue / 2.20462).toFixed(2);
                $('.toggle-weight').text(newValue);
                $(this).attr('data-weight', newValue);
                $(this).attr('data-weight-type', 'lbs');
                $('.toggle-weight-label').text('kgs');
            } else {
                let newValue = (currentValue * 2.20462).toFixed(2);
                $('.toggle-weight').text(newValue);
                $(this).attr('data-weight', newValue);
                $(this).attr('data-weight-type', 'kgs');
                $('.toggle-weight-label').text('lbs');
            }

            setTimeout(function () {
                $(`#toggleWeight-loader`).addClass('d-none');
                $(`.toggle-weight-switch-info`).removeClass('d-none');
            }, 500);
        });
    </script>
@endsection
