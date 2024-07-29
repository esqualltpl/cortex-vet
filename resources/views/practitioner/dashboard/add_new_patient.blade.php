@extends("practitioner.layout.master")
@section('title')
    Consultation Request
@endsection
@section('type')
    Practitioner
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ route('practitioner.dashboard') }}">
                    <img src="{{ asset('portal/assets/img/dashboard gray.png') }}" alt="icon" class="me-1"/>
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Add New Patient</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card  mb-2">
                    <div class=" mb-0 d-flex justify-content-between px-4 pt-3 pb-2 bg-transparent">
                        <div class="pt-1">
                            <h6 class="mb-0 text-capitalize">Add New Patient</h6>
                            <p class="mb-0 text-start text-sm font-weight-400 mt-3">Patient Information</p>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 mb-3 p-0 mt-1">
                                    <div id="breedImage-loader" class="text-center d-none" style="margin-top: 135px !important;">
                                        <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                                    </div>
                                    <img class="breed-type-image" src="{{ asset('portal/assets/img/breeds/no-breed-type-selected.jpg') }}" alt="icon"
                                         style="margin-top: 10px;width: 330px;border-radius: 16px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="container">
                                            <form method="post" action="{{ route('practitioner.patient.info.save') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Patient ID</label>
                                                        <div class="input-group input-group-outline mb-3">
                                                            <input type="text" class="form-control w-100 @error('patient_id') is-invalid @enderror"
                                                                   name="patient_id"
                                                                   value="{{ old('patient_id', $patient_id ?? '') }}"
                                                                   placeholder="Enter patient ID"
                                                                   aria-describedby="emailHelp" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)">
                                                            @error('patient_id')
                                                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Patient Name</label>
                                                        <div class="input-group input-group-outline mb-3">
                                                            <input type="text" class="form-control w-100 @error('patient_name') is-invalid @enderror"
                                                                   name="patient_name"
                                                                   value="{{ old('patient_name') }}"
                                                                   placeholder="Enter patient name"
                                                                   aria-describedby="emailHelp" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)">
                                                            @error('patient_name')
                                                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Owner Name</label>
                                                        <div class="input-group input-group-outline mb-3">
                                                            <input type="text" class="form-control w-100 @error('owner_name') is-invalid @enderror"
                                                                   name="owner_name"
                                                                   value="{{ old('owner_name') }}"
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
                                                                   value="{{ old('dob') }}"
                                                                   placeholder="Enter DOB"
                                                                   aria-describedby="DOB" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)">
                                                            @error('dob')
                                                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Sex</label>
                                                        <select class="form-select p-2 @error('sex') is-invalid @enderror" name="sex" aria-label="Sex Types">
                                                            <option selected disabled>Select</option>
                                                            <option {{ old('sex') && Crypt::decrypt(old('sex')) === 'Male Intact' ? 'selected' : '' }} value="{{ Crypt::encrypt('Male Intact') }}">Male Intact</option>
                                                            <option {{ old('sex') && Crypt::decrypt(old('sex')) === 'Female Intact' ? 'selected' : '' }} value="{{ Crypt::encrypt('Female Intact') }}">Female Intact</option>
                                                            <option {{ old('sex') && Crypt::decrypt(old('sex')) === 'Male Neutered' ? 'selected' : '' }} value="{{ Crypt::encrypt('Male Neutered') }}">Male Neutered</option>
                                                            <option {{ old('sex') && Crypt::decrypt(old('sex')) === 'Female Spayed' ? 'selected' : '' }} value="{{ Crypt::encrypt('Female Spayed') }}">Female Spayed</option>
                                                            <option {{ old('sex') && Crypt::decrypt(old('sex')) === "Unknown" ? 'selected' : '' }} value="{{ Crypt::encrypt('Unknown') }}">Unknown</option>
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
                                                                <option data-specie-image="{{ asset('portal/assets/img/breeds/no-breed-type-selected.jpg') }}" value="{{ Crypt::encrypt($specie->id ?? 0) }}">{{ $specie->name ?? '' }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('specie_type')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Weight Type</label>
                                                        <select class="form-select p-2 @error('weight_type') is-invalid @enderror" name="weight_type" aria-label="Weight Type">
                                                            <option selected disabled>Select</option>
                                                            <option {{ old('weight_type') && Crypt::decrypt(old('weight_type')) === "Lbs" ? 'selected' : '' }} value="{{ Crypt::encrypt('Lbs') }}">Lbs</option>
                                                            <option {{ old('weight_type') && Crypt::decrypt(old('weight_type')) === "Kgs" ? 'selected' : '' }} value="{{ Crypt::encrypt('Kgs') }}">Kgs</option>
                                                        </select>
                                                        @error('weight_type')
                                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Breed</label>
                                                        <select class="form-select p-2 breed-options @error('breed') is-invalid @enderror" name="breed" aria-label="Breed">
                                                            <option selected disabled>Select</option>
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
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Weight</label>
                                                        <div class="input-group input-group-outline mb-3">
                                                            <input type="number" class="form-control w-100 @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}" placeholder="Enter weight"
                                                                   aria-describedby="weight" onfocus="focused(this)"
                                                                   onfocusout="defocused(this)">
                                                            @error('weight')
                                                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-4" style="justify-content:end; align-items: center;">
                                                    <button type="submit" class="btn btn-primary btn-sm py-2 text-white mb-2"
                                                            style=" font-family: 'Poppins', sans-serif !important">
                                                        <i class="fa fa-plus me-2 mx-1" style=" font-size: 10px; !important;" aria-hidden="true"></i>
                                                        <span>Create</span>
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
        </div>

    </div>
@endsection

@section('script')
    <script>
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
    </script>
@endsection
