<form id="updateTestOptionsForm">
    @csrf
    <input type="hidden" name="test_id" value="{{ Crypt::encrypt($testInfo->id) }}">
    <div class="col-md-12">
        <div class="d-lg-block">
            <label class="form-label font-weight-bold">Test</label>
            <div class="input-group input-group-outline mb-3">
                <input type="text" name="test" class="form-control"
                       placeholder="Enter Test" value="{{ $testInfo->name ?? '' }}">
            </div>
            <label class="form-label font-weight-bold">Options</label>
            <div class="input-group input-group-outline mb-3 d-flex gap-2 align-items-center" id="editModal">
                @foreach($testInfo->optionsInfo ?? [] as $key=>$optionsInfo)
                    @if($key == 0)
                        <input type="text" name="test_options_old[{{$optionsInfo->id ?? 0}}]" class="form-control" value="{{ $optionsInfo->name ?? '' }}" placeholder="Option">
                        <button type="button" class="btn btn-primary btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                style="border-radius: 50px; opacity: 0.6; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center"
                                onclick="addOptionField(event, 'editModal')">
                            <i class="fa fa-plus" aria-hidden="true" style="font-size: 0.6rem !important"></i>
                        </button>
                    @else
                        <div class="input-group input-group-outline d-flex gap-2 align-items-center removed-option-row">
                            <input type="text" class="form-control" name="test_options_old[{{$optionsInfo->id ?? 0}}]" value="{{ $optionsInfo->name ?? '' }}" placeholder="Option">
                            <button type="button" class="btn btn-danger btn-sm ms-auto text-sm mb-0 cursor-pointer btn-sm text-white"
                                    style="border-radius: 50px; width: 20px; height: 30px; display: flex; justify-content: center; align-items: center; background: #E66D6D"
                                    onclick="removeOptionField(event, this)">
                                <i class="fa fa-times" aria-hidden="true" style="font-size: 0.6rem !important;"></i>
                            </button>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary float-end btn-md mt-3 mb-0 text-white update-test-options" data-test-option-class="show-updated-test-info{{ $testInfo->id }}" data-action-url="{{ route('admin.setting.exam.test.options.update') }}">
        <span>Save</span>
        <div id="updateTestOptions-loader" class="spinner-border text-green-700 d-none overflow-hidden" role="status"
             style="height: 17px !important;width: 17px !important;margin-left: 5px;font-size: 16px;margin-top: 0px;color: #ffffff;">
            <span class="sr-only">Loading...</span>
        </div>
    </button>
</form>