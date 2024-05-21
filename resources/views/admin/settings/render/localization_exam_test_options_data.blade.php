<div id="cloningTestContainer{{ $testNo ?? '' }}">
    <div class="mt-2" id="cloningTest{{ $testNo ?? '' }}">
        <div class="border-radius-lg"
             style="border:1px solid #e8e8e8;">
            <div class="d-flex justify-content-end gap-2 p-2 ">
                <a href="javascript:" class="edit-test-options" data-action-url="{{ route('admin.setting.exam.test.options.edit', Crypt::encrypt($testInfo->id)) }}" data-test-updated-class="show-updated-test-info{{ $test_sn }}">
                    <i class="fa fa-pencil-square-o" aria-hidden="true" style="cursor: pointer; color: #5534A5"></i>
                </a>
                <a href="">
                    <i class="fa fa-times" aria-hidden="true" style="color: #E66D6D; cursor: pointer"></i>
                </a>
            </div>
            <div class="col-md-12 p-2 d-flex flex-wrap justify-content-between">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <p class="font-weight-bold text-dark mb-0">
                                    Test: {{ $testNo ?? '' }}</p>
                            </div>
                            <div class="col-md-10 col-sm-12 show-updated-test-info{{ $test_sn }}">
                                <p class="font-weight-normal text-dark opacity-8">
                                    {{ $testAddInfo->testInfo?->name ?? '' }}
                                </p>
                                <div class="test-options">
                                    @foreach($testAddInfo->optionsInfo ?? [] as $optionKey=>$options)
                                        @php($option_sn = $optionKey +1)
                                        <div class="form-check ps-0">
                                            <input class="form-check-input" type="radio" name="test_option[]" id="customRadio{{ $options->id }}">
                                            <label class="custom-control-label" for="customRadio{{ $options->id }}">{{ $options->name ?? '' }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>