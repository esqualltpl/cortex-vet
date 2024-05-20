<div id="examVideoData{{ $examAddInfo->id ?? 0 }}" class="exam-video-data accordion-body d-none p-3">
    <div class="card p-4">
        <h5>Upload Instruction Video</h5>
        <div class="col-md-12 mt-2">
            <label class="form-label font-weight-bold">Video Url</label>
            <div class="input-group input-group-outline mb-3">
                <input type="copy" name="email" class="form-control" placeholder="Link">
                <span class="input-group-text bg-transparent"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Referral code expires in 24 hours">
                    <i class="material-symbols-outlined text-sm me-2"> content_copy </i>
                </span>
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