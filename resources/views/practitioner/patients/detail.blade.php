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
                    <span class="cursor-pointer fa fa-edit text-success px-2 pt-1" data-bs-toggle="modal" data-bs-target="#editPatientModal"></span>
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
                                            <p class="font-weight-bold text-dark mb-0">Age/DOB</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->dob ?? '' }}</p>
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
                            <div class="col-md-6">
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
                                            <p class="font-weight-bold text-dark mb-0">Breed</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="font-weight-normal text-dark opacity-8">{{ $patientInfo->breedInfo?->name ?? '' }}</p>
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
                            <div class="col-md-6">
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
                                    <p class="text-center">-</p>
                                @endif
                            </td>
                            <td class="text-sm">
                                @if($appointmentHistory->consultByInfo != null)
                                    <img src="{{ $appointmentHistory->consultByInfo->getUserPic() ?? '-' }}" alt="icon" class="avatar"/>
                                    {{ $appointmentHistory->consultByInfo?->name ?? '' }}
                                @else
                                    <p class="text-center">-</p>
                                @endif
                            </td>
                            <td class="text-sm">
                                <a href="{{ route('practitioner.patient.neuro.exam.detail', ['id' => Crypt::encrypt($appointmentHistory->id), 'no'=> Crypt::encrypt($sn)]) }}"
                                   class="text-info text-decoration-underline"> Neuro Exam {{ $sn }}</a>
                            </td>
                            <td>
                                <span data-toggle="tooltip" data-placement="top" title="Mail Report" class="cursor-pointer show-export-modal" data-neuro-assessment-id="{{ Crypt::encrypt($appointmentHistory->id) }}">
                                    <img src="{{ asset('portal/assets/img/Email.png') }}" style=" width: 22px !important; margin-left: 2px !important; " alt="icon">
                                </span>
                                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('practitioner.neuro.assessment.detail', ['id'=>Crypt::encrypt($appointmentHistory->patientInfo?->id), 'na_id'=>Crypt::encrypt($appointmentHistory->id)]) }}">
                                    <img src="{{ asset('portal/assets/img/edit png.png') }}" style=" width: 20px !important; margin-left: 2px !important; " alt="icon">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="editPatientModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="editPatientModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Patient's Details</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 mb-3 p-0 mt-1">
                                    <div id="breedImage-loader" class="text-center d-none" style="margin-top: 135px !important;">
                                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                    </div>
                                    <img class="breed-type-image"
                                         src="{{ $patientInfo->breedInfo?->getBreedImage($patientInfo->specieTypeInfo?->name ?? null) ?? asset('portal/assets/img/breeds/no-breed-type-selected.png') }}"
                                         alt="icon"
                                         style="margin-top: 78px;width: 175px;border-radius: 16px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <form method="post" id="patientInfoUpdateForm">
                                            @csrf
                                            <input type="hidden" name="patient_id" value="{{ request()->id ?? '' }}">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Patient Name</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" class="form-control w-100 @error('patient_name') is-invalid @enderror"
                                                               name="patient_name"
                                                               value="{{ $patientInfo->patient_name ?? '' }}"
                                                               placeholder="Enter patient name"
                                                               aria-describedby="patient name" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                        @error('patient_name')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Owner Name</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" class="form-control w-100 @error('owner_name') is-invalid @enderror"
                                                               name="owner_name"
                                                               value="{{ $patientInfo->owner_name ?? '' }}"
                                                               placeholder="Enter owner name"
                                                               aria-describedby="owner name" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                        @error('owner_name')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">DOB</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="date" class="form-control w-100 @error('dob') is-invalid @enderror"
                                                               name="dob"
                                                               value="{{ $patientInfo->dob ?? '' }}"
                                                               placeholder="Enter DOB"
                                                               aria-describedby="DOB" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                        @error('dob')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Sex</label>
                                                    <select class="form-select p-2 @error('sex') is-invalid @enderror" name="sex" aria-label="Sex Types">
                                                        <option selected disabled>Select</option>
                                                        <option {{ $patientInfo->sex === 'Male Intact' ? 'selected' : '' }} value="{{ Crypt::encrypt('Male Intact') }}">Male
                                                            Intact
                                                        </option>
                                                        <option {{ $patientInfo->sex === 'Female Intact' ? 'selected' : '' }} value="{{ Crypt::encrypt('Female Intact') }}">
                                                            Female Intact
                                                        </option>
                                                        <option {{ $patientInfo->sex === 'Male Neutered' ? 'selected' : '' }} value="{{ Crypt::encrypt('Male Neutered') }}">Male
                                                            Neutered
                                                        </option>
                                                        <option {{ $patientInfo->sex === 'Female Spayed' ? 'selected' : '' }} value="{{ Crypt::encrypt('Female Spayed') }}">
                                                            Female Spayed
                                                        </option>
                                                        <option {{ $patientInfo->sex === "Unknown" ? 'selected' : '' }} value="{{ Crypt::encrypt('Unknown') }}">Unknown</option>
                                                    </select>
                                                    @error('sex')
                                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Specie Type</label>
                                                    <select class="form-select p-2 specie-type @error('specie_type') is-invalid @enderror"
                                                            name="specie_type" aria-label="Specie Type">
                                                        <option selected disabled>Select</option>
                                                        @foreach($species as $specie)
                                                            <option data-specie-image="{{ asset('portal/assets/img/breeds/no-breed-type-selected.png') }}"
                                                                    {{ $specie->id == $patientInfo->specie_type ? 'selected' : '' }}
                                                                    value="{{ Crypt::encrypt($specie->id ?? 0) }}">{{ $specie->name ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('specie_type')
                                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Weight Type</label>
                                                    <select class="form-select p-2 @error('weight_type') is-invalid @enderror" name="weight_type" aria-label="Weight Type">
                                                        <option selected disabled>Select</option>
                                                        <option {{ $patientInfo->weight_type === "Lbs" ? 'selected' : '' }} value="{{ Crypt::encrypt('Lbs') }}">Lbs
                                                        </option>
                                                        <option {{ $patientInfo->weight_type === "Kgs" ? 'selected' : '' }} value="{{ Crypt::encrypt('Kgs') }}">Kgs
                                                        </option>
                                                    </select>
                                                    @error('weight_type')
                                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Breed</label>
                                                    <select class="form-select p-2 breed-options @error('breed') is-invalid @enderror" name="breed" aria-label="Breed">
                                                        <option selected disabled>Select</option>
                                                        @foreach($breedsSelectedSpecie as $breed)
                                                            <option {{ $breed->id == $patientInfo->breed ? 'selected' : '' }}
                                                                    data-breed-image="{{ $breed->getBreedImage($patientInfo->specieTypeInfo?->name ?? null) }}"
                                                                    value="{{ Crypt::encrypt($breed->id ?? 0) }}">{{ $breed->name ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="breedOption-loader"
                                                         class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                                         style="height: 21px !important;width: 22px !important;margin-left: 5px;font-size: 15px;margin-top: 8px;color: #a2a6b8;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                    @error('breed')
                                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Weight</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="number" class="form-control w-100 @error('weight') is-invalid @enderror" name="weight"
                                                               value="{{ $patientInfo->weight ?? 0 }}"
                                                               placeholder="Enter weight"
                                                               aria-describedby="weight" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                        @error('weight')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4" style="justify-content:end; align-items: center;">
                                                <button type="button" class="btn btn-primary btn-sm py-2 text-white mb-2 patient-info-save"
                                                        style=" font-family: 'Poppins', sans-serif !important" data-action-url="{{ route('practitioner.patient.info.update') }}">
                                                    <i class="fa fa-plus me-2 mx-1" style=" font-size: 10px; !important;" aria-hidden="true"></i>
                                                    <span>Update</span>
                                                    <div id="updatePatientInfo-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                                         style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exportModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h6 class="pt-1 mb-0">Export Report</h6>
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" id="sendEmailForm">
                                    @csrf
                                    <input type="hidden" name="neuro_assessment_id" class="neuro_assessment_id">
                                    <label class="font-weight-bold">Enter Email</label>
                                    <div class="input-group input-group-outline mb-1 ">
                                        <input type="email" class="form-control" name="email" placeholder="Enter the email address" aria-label="Name">
                                    </div>
                                    <div class="d-flex mt-4" style="justify-content:end; align-items: center;">
                                        <button type="button" class="btn btn-primary float-end btn-md mt-3 mb-0 text-white send-email"
                                                data-action-url="{{ route('practitioner.patient.send.detail.report') }}">
                                            <span>Send Email</span>
                                            <div id="sendEmail-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                                                 style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </button>
                                    </div>
                                </form>
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

        $(document).on('change', '.specie-type', function (e) {
            e.preventDefault();

            let actionType = 'get';
            let loaderId = 'breedOption-loader';
            let selectedOption = $(this).find("option:selected");
            let specieOptionId = selectedOption.val();
            let specieImage = selectedOption.attr('data-specie-image');
            let actionURL = "{{ route('practitioner.breed.options', ':id') }}";
            actionURL = actionURL.replace(':id', specieOptionId);
            let processData = {
                "_token": "{{ csrf_token() }}",
            };
            let renderClass = 'breed-options';

            getInfo(actionURL, actionType, processData, loaderId, renderClass); //Ajax Call

            if (specieImage) {
                /*$(`#breedImage-loader`).removeClass('d-none');
                $(`.breed-type-image`).addClass('d-none');*/

                setTimeout(function () {
                    /*$(`#breedImage-loader`).addClass('d-none');
                    $(`.breed-type-image`).removeClass('d-none');*/
                    $(`.breed-type-image`).attr('src', specieImage);
                }, 500);
            }
        });

        /*$(document).on('change', '.breed-options', function (e) {
            e.preventDefault();

            let selectedOption = $(this).find('option:selected');
            let breedImage = selectedOption.attr('data-breed-image');

            let loaderId = 'breedImage-loader';
            let breedTypeImageClass = 'breed-type-image';

            if (breedImage) {
                $(`#${loaderId}`).removeClass('d-none');
                $(`.${breedTypeImageClass}`).addClass('d-none');

                setTimeout(function () {
                    $.notify({
                        title: 'Success!',
                        message: '<br>Breed type image loaded successfully.',
                        icon: 'fa fa-check',
                    }, {
                        // settings
                        type: 'success',
                        z_index: 2000,
                        animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
                        }
                    });

                    $(`#${loaderId}`).addClass('d-none');
                    $(`.${breedTypeImageClass}`).removeClass('d-none');
                    $(`.${breedTypeImageClass}`).attr('src', breedImage);
                }, 500);
            } else {
                $.notify({
                    title: 'Error!',
                    message: '<br>Breed type image not found.',
                    icon: 'fa fa-exclamation-triangle',
                }, {
                    type: 'danger',
                    z_index: 2000,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    }
                });
            }
        });*/

        $(document).on('click', '.patient-info-save', function (e) {
            let actionType = 'post';
            let loaderId = 'updatePatientInfo-loader';
            let actionURL = $(this).attr('data-action-url');
            let formId = 'patientInfoUpdateForm';
            let processData = $(`#${formId}`).serialize();
            let renderClass = null;
            let closeModalId = 'editPatientModal';

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass, closeModalId);
        });

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

        $(document).on('click', '.show-export-modal', function (e) {
            let neuroAssessmentId = $(this).attr('data-neuro-assessment-id');
            $('.neuro_assessment_id').val(neuroAssessmentId);
            $('#exportModal').modal('show');
        });

        $(document).on('click', '.send-email', function (e) {
            let actionType = 'post';
            let loaderId = 'sendEmail-loader';
            let actionURL = $(this).attr('data-action-url');
            let formId = 'sendEmailForm';
            let closeModalId = 'exportModal';
            let processData = $(`#${formId}`).serialize();
            let renderClass = null;

            saveInfo(actionURL, actionType, processData, loaderId, formId, renderClass, closeModalId);
        });
    </script>
@endsection
