@extends("admin.layout.master")
@section('title')
    Student Edit
@endsection
@section('type')
    Admin
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ route('admin.settings') }}">
                    <img src="{{ asset('portal/assets/img/Settings gray.png') }}" alt="icon" class="me-1"/>
                    Settings
                </a>
            </li>
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Edit Student</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card p-3 mt-3">
                    <div class="col-md-12 d-flex justify-content-between">
                        <div class="col-md-6 d-flex">
                            <h5>Edit Student</h5>
                        </div>

                    </div>
                    <div class="row">
                        <h6>Profile</h6>
                        <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">
                            <div class="col-md-4 px-1  ">
                                <label class="form-label">Full Name<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-4 px-1 ">
                                <label class="form-label">User Name<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-md-4 px-1 ">
                                <label class="form-label">Email<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="email" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="Johan@gail.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">

                            <div class="col-md-4 px-1  ">
                                <label class="form-label">Password<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="password" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="........">
                                </div>
                                <p>Password must be minimum 6+</p>
                            </div>
                            <div class="col-md-4 px-1 ">
                                <label class="form-label">School Name<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="Lorem ipsum">
                                </div>
                            </div>
                            <div class="col-md-4 px-1 ">
                                <label class="form-label">Year of Graduation<sup class="text-danger">*</sup></label>

                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="2020">
                                </div>
                            </div>

                        </div>
                        <h5>Select Modules</h5>
                        <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">

                            <div class="col-md-6 w-50 ">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Dashboard
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6 w-50">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Neuro Assessment
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">
                            <div class="col-md-6 w-50 ">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Patients
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6 w-50">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Settings
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div> <button type="button"
                                      class="btn  btn-primary float-end btn-sm py-2 text-white mb-2">
                                Edit Student
                            </button></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
