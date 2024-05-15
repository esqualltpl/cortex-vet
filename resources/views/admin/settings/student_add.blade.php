@extends("admin.layout.master")
@section('title')
    Student Add
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
            <li class="breadcrumb-item text-sm mx-2 text-dark active" aria-current="page">Add Student</li>
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
                            <h5>Add Student</h5>
                        </div>

                    </div>
                    <div class="row">
                        <h6>Profile</h6>
                        <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">

                            <div class="col-md-4 px-1">
                                <label class="form-label">Full Name<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <label class="form-label">User Name<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
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

                            <div class="col-md-4 px-1 ">
                                <label class="form-label">Password<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="password" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="........">
                                </div>
                                <p>Password must be minimum 6+</p>
                            </div>
                            <div class="col-md-4 px-1">
                                <label class="form-label">School Name<sup class="text-danger">*</sup></label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="text" class="form-control w-100"
                                           aria-describedby="emailHelp" onfocus="focused(this)"
                                           onfocusout="defocused(this)"
                                           placeholder="Lorem ipsum">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
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

                            <div class="col-md-6 w-50  ">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Dashboard
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6 w-50 ">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Neuro Assessment
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">
                            <div class="col-md-6 w-50  ">
                                <div class="form-check text-start ps-0">
                                    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" >
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Patients
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-6 w-50 ">
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
                                Add Student
                            </button></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addcomment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-lg " role="document">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rate this coach</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="d-flex justify-content-center p-3"
                             style="border: 1px solid #b3afaf; border-radius: 5px;">
                            <img src="../assets/Training Portal/Client Portal/rated.png" class="img-fluid"
                                 width="100px" />
                            <img src="../assets/Training Portal/Client Portal/rated.png" width="100px" />
                            <img src="../assets/Training Portal/Client Portal/rated.png" width="100px" />
                            <img src="../assets/Training Portal/Client Portal/rated.png" width="100px" />
                            <img src="../assets/Training Portal/Client Portal/rated.png" width="100px" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary   btn-sm py-2 text-white mb-2">
                                Rate
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="refund" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-lg " role="document">
                <div class="modal-content p-3">
                    <div class="modal-header">

                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="d-flex justify-content-center p-3">
                            <h6>Are you sure you want to get refunded for this session?</h6>
                        </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn  mx-2 btn-secondary  btn-lg w-20  py-2 text-white mb-2">
                            Ok
                        </button>
                        <button type="button" class="btn btn-primary mx-3 btn-lg  w-20 py-2 text-white mb-2">
                            Cancel
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered " role="document" style="">
                <div class="modal-content ">
                    <div class=" modal-header" style="background-color: #FD4F4E;border-bottom: none;">

                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                                aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #FD4F4E;">
                        <div class="d-flex justify-content-center">
                            <img src="../assets/img/Sad Emoji.png" />
                        </div>
                        <div class="text-center  m-3 p-3">

                            <p class="text-white">Are you sure to want to delete "Rayan Holland"</p>
                        </div>

                    </div>
                    <div class="">
                        <div class="my-3">
                            <a href="">
                                <p class="text-center font-weight-bold text-info ">Continue</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
