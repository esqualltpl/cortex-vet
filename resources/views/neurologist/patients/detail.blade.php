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
        <div class="card p-3 mt-3">
            <div class="col-md-12 d-flex justify-content-between flex-wrap">
                <h5>{{ $patientInfo->patient_name ?? '' }} Detail</h5>
                <p>Patient created on: <span style="color: #5534A5;">{{ $patientInfo->created_at ?? '0000-00-00 00:00' }}</span></p>
            </div>
            <div class="row">
                <div class="d-flex">
                    <h6>Patient Detail</h6>
                </div>
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
                    <tbody>
                    @php($sn = 0)
                    @foreach($appointmentsHistory as $appointmentHistory)
                        @php($sn = $sn+1)
                        <tr>
                            <td class="text-sm ">
                                {{ $appointmentHistory->created_at }}
                            </td>
                            <td class="text-sm">
                                @if($appointmentHistory->addedByInfo != null)
                                    <img src="{{ $appointmentHistory->addedByInfo->getUserPic() ?? '-' }}" alt="icon" class="avatar"/>
                                    {{ $appointmentHistory->addedByInfo?->name ?? '' }}
                                @else
                                    <p class="px-6">-</p>
                                @endif
                            </td>
                            <td class="text-sm">
                                @if($appointmentHistory->consultByInfo != null)
                                    <img src="{{ $appointmentHistory->consultByInfo->getUserPic() ?? '-' }}" alt="icon" class="avatar"/>
                                    {{ $appointmentHistory->consultByInfo?->name ?? '' }}
                                @else
                                    <p class="px-6">-</p>
                                @endif
                            </td>
                            <td class="text-sm">
                                <a href="{{ route('neurologist.patient.neuro.exam.detail', ['id' => Crypt::encrypt($appointmentHistory->id), 'no'=> Crypt::encrypt($sn)]) }}"
                                   class="text-info text-decoration-underline"> Neuro Exam {{ $sn }}</a>
                            </td>
                            <td>
                                <img class="cursor-pointer appointment-history-note" data-bs-toggle="modal" data-bs-target="#notesModal"
                                     data-action-url="{{ route('neurologist.patients.neuro.assessment.get.notes', Crypt::encrypt($appointmentHistory->id)) }}"
                                     src="{{ asset('portal/assets/img/notes.png') }}" alt="icon">
                            </td>
                            <td class="">
                                <a href="{{ route('neurologist.patients.report.detail', Crypt::encrypt($appointmentHistory->id)) }}"><span class="material-symbols-outlined">share_windows</span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="notesModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="notesModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Notes</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="notesModal-loader" class="text-center d-none" style="margin-left: 34px;">
                                    <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                </div>
                                <div class="neuro-assessment-notes-info"></div>
                            </div>
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
