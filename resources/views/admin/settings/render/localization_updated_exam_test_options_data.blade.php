<p class="font-weight-normal text-dark opacity-8">
    {{ $testInfo->name ?? '' }}
</p>
<div class="test-options">
    @foreach($testInfo->optionsInfo ?? [] as $optionKey=>$options)
        @php($option_sn = $optionKey +1)
        <div class="form-check ps-0">
            <input class="form-check-input" type="radio" name="test_option[{{$options->id}}][]" id="customRadio{{ $options->id }}">
            <label class="custom-control-label" for="customRadio{{ $options->id }}">{{ $options->name ?? '' }}</label>
        </div>
    @endforeach
</div>
