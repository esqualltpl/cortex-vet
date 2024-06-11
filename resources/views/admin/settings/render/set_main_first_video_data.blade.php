<form id="mainFirstVideoForm" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12 mt-2">
        <label class="form-label font-weight-bold">Video Url</label>
        <div class="input-group input-group-outline mb-3">
            <input type="url" name="url" id="videoUrl" value="{{ $mainFirstVideoInfo->url ?? '' }}" class="form-control" placeholder="Link">
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
        <a href="javascript:" data-bs-toggle="modal" data-bs-target="#viewMainFirstVideoInfoModal"
           data-action-url="{{ route('admin.setting.set.main.first.video.preview') }}"
           class="preview-main-first-uploaded-video"
           style="color: #5534a5;font-weight: bold;font-size: 13px;margin-top: 5px;margin-right: 2px;float: right !important;">View Uploaded Video</a>
        <div class="input-group input-group-outline">
            <input type="file" name="video" id="uploadVideo" class="form-control" placeholder="Link">
        </div>
    </div>
    <div class="col-md-12 d-flex justify-content-end mt-3">
        <button type="button" class="btn btn-primary px-3 nav-link cursor-pointer btn-sm text-white mb-0 mt-3 upload-main-first-video-or-url"
                data-action-url="{{ route('admin.setting.set.main.first.video.upload') }}">
            <i class="fa fa-upload me-2 mx-1" style=" font-size: 10px; !important;" aria-hidden="true"></i>
            <span class="text-sm">
                <span>Upload</span>
                <div id="uploadMainFirstVideo-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                     style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                    <span class="sr-only">Loading...</span>
                </div>
            </span>
        </button>
    </div>
</form>