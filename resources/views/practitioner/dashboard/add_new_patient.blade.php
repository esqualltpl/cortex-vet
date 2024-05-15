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
                <a class="opacity-7 text-dark" href="{{ route('admin.veterinary.practitioners') }}">
                    <img src="{{ asset('portal/assets/img/dashboard gray.png') }}" alt="icon" class="me-1" />
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
                    <div class=" mb-0 d-flex justify-content-between px-4 pt-4 pb-3 bg-transparent">
                        <div class="pt-1">
                            <h5 class=" mb-0 text-capitalize font-weight-800">Add New Patient</h5>
                            <p class="mb-0 text-start  font-weight-400 mt-1">Patient Information</p>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 mb-3 p-0">
                                    <img src="{{ asset('portal/assets/img/german_shephard.jpg') }}" alt="icon" style="width: 100%; border-radius: 16px;">
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Patient ID</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" class="form-control w-100"
                                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Patient Name</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" class="form-control w-100"
                                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- <div class="input-group input-group-outline mb-3">
                                                        <label class="form-label">Owner Name</label>
                                                        <input type="text" class="form-control">
                                                    </div> -->
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Owner Name</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" class="form-control w-100"
                                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">DOB</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="date" class="form-control w-100"
                                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Sex</label>
                                                    <select class="form-select p-2 mb-3" aria-label="Default select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="1">Male Intact</option>
                                                        <option value="2">Male Castrated</option>
                                                        <option value="3">Female Intact</option>
                                                        <option value="3">Female Spayed</option>
                                                        <option value="3">Unknown</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Specie Type</label>
                                                    <select class="form-select p-2 mb-3" aria-label="Default select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="1">Canine (Dogs)</option>
                                                        <option value="2">Felines (Cats)</option>

                                                        <option value="3">Exoctic Canine (Dogs)</option>
                                                        <option value="3">Exoctic Feline (Cats)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Weight Type</label>
                                                    <select class="form-select p-2 mb-3" aria-label="Default select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="1">Lbs</option>
                                                        <option value="2">Kgs</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Breed</label>
                                                    <select class="form-select p-2 mb-3" aria-label="Default select example">
                                                        <option selected disabled>Select</option>
                                                        <option value="1">German Shepherd</option>
                                                        <option value="2">Bulldog</option>
                                                        <option value="3">Labrador Retriever</option>
                                                        <option value="3">Golden Retriever</option>
                                                        <option value="3">French Bulldog</option>
                                                        <option value="3">Siberian Husky</option>
                                                        <option value="3">Beagle</option>
                                                        <option value="3">Poodle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label font-weight-bold"
                                                           style=" font-family: 'Poppins', sans-serif !important">Weight</label>
                                                    <div class="input-group input-group-outline mb-3">
                                                        <input type="text" class="form-control w-100"
                                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                                               onfocusout="defocused(this)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div> <button type="button"
                                                          class="btn  btn-primary float-end btn-lg text-white ">
                                                    Create
                                                </button></div>
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

@endsection
