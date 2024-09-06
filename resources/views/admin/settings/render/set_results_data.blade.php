<div class="exam{{ $examAddInfo->id ?? 0 }}testOptionsInfo">
    <div class="d-flex align-items-start">
        <div class="form-check d-flex justify-content-start">
            <input type="checkbox" class="checkbox form-check-input exam-test-options-info"
                   data-exam-step-info="exam-step{{ $examAddInfo->id ?? 0 }}">
            <h6 class="mx-3 pt-1">{{ $examAddInfo->step_name }}</h6>
        </div>
    </div>
    @if(count($examAddInfo->testInfo) > 0)
        @foreach($examAddInfo->testInfo as $testKey=>$testInfo)
            @php($test_sn = $testKey+1)
            <div class="mx-5 d-flex align-items-start d-none exam-step{{ $examAddInfo->id ?? 0 }}">
                <div class="form-check d-flex ">
                    <input type="checkbox" class="checkbox form-check-input test-checkbox-info" data-test-radio-info="test-radio-option{{$testInfo->id ?? 0}}" data-test-options-info="test{{ $testInfo->id ?? 0 }}-options-info">
                    <h6 class="mx-3 pt-1">Test:{{ $test_sn ?? 0 }}</h6>
                </div>
                <div class="test-option-info">
                    <p class="my-2 mt-1 text-bold">{{ $testInfo->name ?? '' }}</p>
                    <div class="form-group d-none test{{ $testInfo->id ?? 0 }}-options-info">
                        @foreach($testInfo->optionsInfo ?? [] as $optionKey=>$options)
                            @php($option_sn = $optionKey +1)
                            <div class="form-check ps-0">
                                <input type="checkbox" class="checkbox form-check-input test-radio-option{{$testInfo->id ?? 0}}" name="options[{{$examAddInfo->id ?? 0}}][{{$testInfo->id ?? 0}}][{{ $options->id ?? 0}}]" value="{{ $options->id }}" id="customRadio{{ $options->id }}">
                                <label class="custom-control-label pt-1 text-bold" for="customRadio{{ $options->id }}">{{ $options->name ?? '' }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>