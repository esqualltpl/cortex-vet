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
                    <img src="{{ asset('portal/assets/img/Resources gray.png') }}" alt="icon"/>
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

        <div class="card p-3 mt-3">
            <div class="col-md-12 d-flex justify-content-between">
                <div class="col-md-6 ">
                    <h6>Resources</h6>
                    <p class="text-sm font-bold">Upload Resources</p>
                </div>
            </div>
            <div class="row">
                <form id="uploadVideoOrUrlForm" enctype="multipart/form-data" method="post" action="{{ route('admin.setting.resources.upload.video') }}">
                    @csrf
                    <div class="col-md-12 mt-2">
                        <label class="form-label font-weight-bold">Video Url</label>
                        <div class="input-group input-group-outline mb-3">
                            <input type="url" name="url" id="videoUrl" class="form-control" placeholder="Link">
                            <div class="input-group-append toggle-copy" data-video-url-link="videoUrl">
                                <span class="input-group-text" style="cursor: pointer; padding-right: 8px;">
                                    <i class="material-symbols-outlined text-sm me-2"> content_copy </i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-center">OR</h6>
                    <div class="col-md-12 mt-2">
                        <label class="form-label font-weight-bold">Upload Video</label>
                        <a href="javascript:" data-bs-toggle="modal" data-bs-target="#viewResourcesUploadedVideoModal" data-action-url="{{ route('admin.setting.resources.upload.video.preview') }}" class="preview-resources-uploaded-video" style="color: #5534a5;font-weight: bold;font-size: 13px;margin-top: 5px;margin-right: 2px;float: right !important;">View Uploaded Video</a>
                        <div class="input-group input-group-outline">
                            <input type="file" name="video" id="uploadVideo" class="form-control" placeholder="Link">
                        </div>
                    </div>
                    <div class="d-flex mt-4" style="justify-content:end; align-items: center;">
                        <button type="submit" class="btn btn-primary change-password-info btn-sm py-2 text-white mb-2" style=" font-family: 'Poppins', sans-serif !important">
                            <i class="fa fa-upload me-2 mx-1" style=" font-size: 10px; !important;" aria-hidden="true"></i>
                            <span>Upload</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewResourcesUploadedVideoModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
         aria-labelledby="viewResourcesUploadedVideoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h6 class="pt-1 mb-0">Resource Video</h6>
                    <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="viewResourcesUploadedVideo-loader" class="text-center d-none" style="margin-left: 34px;">
                    <img src="{{ asset('portal/assets/img/loader.gif') }}" width="120px" alt="loader"/>
                </div>
                <div class="modal-body show-resources-uploaded-video">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).on('click', '.toggle-copy', function (e) {
        e.preventDefault();

        let input = $(this).attr('data-video-url-link');

        $(`#${input}`).select();
        $(`#${input}`)[0].setSelectionRange(0, 99999); // For mobile devices

        document.execCommand('copy');
    });

    $(document).on('click', '.preview-resources-uploaded-video', function (e) {
        e.preventDefault();
        let actionType = 'get';
        let loaderId = 'viewResourcesUploadedVideo-loader';
        let actionURL = $(this).attr('data-action-url');
        let processData = {
            "_token": "{{ csrf_token() }}",
        };
        let renderClass = 'show-resources-uploaded-video';

        getInfo(actionURL, actionType, processData, loaderId, renderClass);
    });
</script>
@endsection
