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
                    <img src="{{ asset('portal/assets/img/settings gray.png') }}" alt="icon" class="me-1"/>
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
                            <h6>Edit Student</h6>
                        </div>
                    </div>
                    <form action="{{ route('admin.setting.student.info.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Crypt::encrypt($student_info->detail?->id ?? 0) }}">
                        <input type="hidden" name="student_id" value="{{ request()->id ?? '' }}">
                        <div class="row">
                            <p class="mt-2 mb-2"><b>Profile</b></p>
                            <div class="col-md-12 mt-1 d-flex flex-wrap justify-content-between">
                                <div class="col-md-4 px-1">
                                    <label class="form-label">Full Name<sup class="text-danger">*</sup></label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" class="form-control w-100 @error('full_name') is-invalid @enderror"
                                               name="full_name"
                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                               onfocusout="defocused(this)"
                                               value="{{ old('full_name', $student_info->detail?->name?? '') }}"
                                               placeholder="Full Name">
                                        @error('full_name')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <label class="form-label">User Name<sup class="text-danger">*</sup></label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" class="form-control w-100 @error('user_name') is-invalid @enderror"
                                               name="user_name"
                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                               onfocusout="defocused(this)"
                                               value="{{ old('user_name', $student_info->user_name?? '') }}"
                                               placeholder="User Name">
                                        @error('user_name')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <label class="form-label">Email<sup class="text-danger">*</sup></label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="email" class="form-control w-100 @error('email') is-invalid @enderror"
                                               name="email"
                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                               onfocusout="defocused(this)"
                                               value="{{ old('email', $student_info->detail?->email?? '') }}"
                                               placeholder="your@email.com">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">
                                <div class="col-md-4 px-1">
                                    <label class="form-label">Password{{--<sup class="text-danger">*</sup>--}}</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="password" class="form-control w-100 @error('password') is-invalid @enderror"
                                               name="password"
                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                               onfocusout="defocused(this)"
                                               placeholder="********">
                                        <div class="input-group-append">
                                            <span class="input-group-text toggle-password" style="cursor: pointer; padding-right: 8px;">
                                                <i class="fas fa-eye" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <p class="text-sm">Password must be minimum 6+</p>
                                </div>
                                <div class="col-md-4 px-1 ">
                                    <label class="form-label">School Name<sup class="text-danger">*</sup></label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" class="form-control w-100 @error('school_name') is-invalid @enderror"
                                               name="school_name"
                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                               onfocusout="defocused(this)"
                                               value="{{ old('school_name', $student_info->school_name?? '') }}"
                                               placeholder="School Name">
                                        @error('school_name')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 px-1 ">
                                    <label class="form-label">Year of Graduation<sup class="text-danger">*</sup></label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="text" class="form-control w-100 @error('years_of_graduation') is-invalid @enderror"
                                               name="years_of_graduation"
                                               aria-describedby="emailHelp" onfocus="focused(this)"
                                               onfocusout="defocused(this)"
                                               value="{{ old('years_of_graduation', $student_info->years_of_graduation?? '') }}"
                                               placeholder="Year of Graduation">
                                        @error('years_of_graduation')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @php($modules = $student_info->module ? explode(',', $student_info->module) : [])
                            <p class="mt-2 mb-2"><b>Select Modules</b></p>
                            <div class="col-md-12 mt-1 d-flex flex-wrap justify-content-between">
                                <div class="col-md-6 w-50 ">
                                    <div class="form-check text-start ps-0">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" name="module[]" value="Dashboard" {{ count($modules) > 0 && in_array('Dashboard', $modules) ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Dashboard
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 w-50">
                                    <div class="form-check text-start ps-0">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" name="module[]" value="Neuro Assessment" {{ count($modules) > 0 && in_array('Neuro Assessment', $modules) ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Neuro Assessment
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-wrap justify-content-between">
                                <div class="col-md-6 w-50 ">
                                    <div class="form-check text-start ps-0">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" name="module[]" value="Patients" {{ count($modules) > 0 && in_array('Patients', $modules) ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Patients
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 w-50">
                                    <div class="form-check text-start ps-0">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" name="module[]" value="Settings" {{ count($modules) > 0 && in_array('Settings', $modules) ? 'checked' : '' }} id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Settings
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary float-end btn-sm py-2 text-white mb-2">
                                    Update Student
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.querySelectorAll('.toggle-password').forEach(function (element) {
            element.addEventListener('click', function () {
                const passwordInput = this.parentElement.previousElementSibling;
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    this.innerHTML = '<i class="fas fa-eye-slash" style="cursor: pointer; padding-right: 8px;"></i>';
                } else {
                    passwordInput.type = 'password';
                    this.innerHTML = '<i class="fas fa-eye" style="cursor: pointer; padding-right: 8px;"></i>';
                }
            });
        });
    </script>
@endsection
