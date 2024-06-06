<form method="post" id="saveNotesForm">
    @csrf
    <input type="hidden" name="neuro_assessment_id" value="{{ Crypt::encrypt($neuroAssessmentInfo->id) }}">
    <label for="notes" class="font-weight-bold">Enter Notes</label>
    <div class="input-group input-group-outline">
        <textarea class="form-control" name="notes" placeholder="Type notes here..." rows="10"
        >{{ $neuroAssessmentInfo->notes ?? '' }}</textarea>
    </div>
    <div class="d-flex mt-4" style="justify-content:end; align-items: center;">
        <button type="button" class="btn btn-primary float-end btn-md mt-3 mb-0 text-white save-notes" data-action-url="{{ route('neurologist.patients.neuro.assessment.save.notes') }}">
            <span>Save</span>
            <div id="saveNotes-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
                 style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
                <span class="sr-only">Loading...</span>
            </div>
        </button>
    </div>
</form>