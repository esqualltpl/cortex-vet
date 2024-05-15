@extends("admin.layout.master")
@section('title')
    Veterinary Resources
@endsection
@section('type')
    Admin
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Resources gray.png') }}" alt="icon" />
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Resources</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">

        <div class="card p-3 mt-3" >
            <div class="col-md-12 d-flex justify-content-between">
                <div class="col-md-6 ">
                    <h5>Resources</h5>
                    <h6>Upload Resources</h6>
                </div>

            </div>
            <div class="row">

                <div class="col-md-12 mt-3">
                    <div class="col-md-12 mt-2">
                        <label class="form-label font-weight-bold">Video URL</label>
                        <div class="input-group input-group-outline mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Link">
                            <span class="input-group-text bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Referral code expires in 24 hours"><i class="material-symbols-outlined text-sm me-2">
                                    content_copy
                                </i></span>
                        </div>

                    </div>
                    <h5 class="text-center">OR</h5>
                    <div class="col-md-12 mt-2">
                        <label class="form-label font-weight-bold">Upload Video</label>
                        <div class="input-group input-group-outline mb-3">
                            <input type="file" name="email" class="form-control" placeholder="Link">
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
