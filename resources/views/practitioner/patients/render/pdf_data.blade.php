<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <title>Patient Report</title>
    <style>
        p {
            font-family: 'Roboto', Helvetica, Arial, sans-serif;
            font-weight: 400 !important;
            color: #7b809a;
        }

        h4, h3 {
            font-family: 'Roboto', Helvetica, Arial, sans-serif;
            font-weight: bold;
        }

        h4 {
            margin-bottom: 0 !important;
        }

        .avatar {
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            border-radius: 50rem;
            height: 40px;
            width: 40px;
            transition: all .2s ease-in-out;
            border: 1px solid #cccccc;
        }
    </style>
</head>

<body style="margin: 0;padding: 0;">
<table style="width: 100%;padding: 10px 40px 5px 40px !important;">
    <tr>
        <td>
            <img src="data:image/png;base64,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"
                 alt="icon" style="width: 110px"/>
        </td>
        {{--<td style="text-align: right;">
            <p style="margin-top:0 !important;font-family: Roboto, Helvetica, Arial, sans-serif;">Page {PAGENO} of {nbpg}</p>
        </td>--}}
    </tr>
</table>
<h1 style="color: #866FBF; text-align: center;font-family: Roboto, Helvetica, Arial, sans-serif; margin-bottom: 5px !important;">Patient Report</h1>

<p style="border-bottom: 1px solid #F3F3F3;"></p>

<table style="width: 100%;padding: 0 50px 0 50px !important;">
    @php
        $imagePath = $neuroExamInfo->patientInfo?->getPatientImagePDF($neuroExamInfo->patientInfo?->specieTypeInfo?->name ?? null,$neuroExamInfo->patientInfo?->breedInfo?->image ?? null);
        $imageData = base64_encode(file_get_contents($imagePath));
    @endphp
    <tbody style="border:none;">
    <tr>
        <td style=" width: 0 !important;">
            <span><img src="data:image/png;base64,{{ $imageData }}" alt="icon" class="avatar"></span>
        </td>
        <td>
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 2px 0 0 0 !important;">
                <strong style="margin-left: 5px;color: #2e97a9; !important;">{{ $neuroExamInfo->patientInfo?->patient_name ?? '' }}</strong>
            </p>
        </td>
    </tr>
    </tbody>
</table>

<table style="width: 100%;padding: 0 50px 15px 50px !important;">
    <tbody style="border:none;">
    <tr>
        <td>
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 2px 0 0 0 !important;">
                <span style="opacity: 0.9;font-family: Roboto, Helvetica, Arial, sans-serif;font-weight: 545">Patient ID:</span>
                <strong style="margin-left: 30px;color: #344767 !important;">{{ $neuroExamInfo?->patientInfo?->patient_id ?? 'pid-' }}</strong>
            </p>
        </td>
        <td style="text-align:right;">
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 0 !important;">
                <span><img style=" width: 13px; "
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAWCAYAAADAQbwGAAAAAXNSR0IArs4c6QAAAARzQklUCAgICHwIZIgAAAFnSURBVDhP7VVBToNQEJ0B0xghKSaWbvEGBC5gb8ANigv3egLrDeoJxBPYG6gHsOUIbq0uWICJVv50wNLQ3x8txi5MnA3JzPzHvHnz5yMozLT9RACEr9OHkRzetVxnp6VNiEQve45jOY5KwK5PQHSRTscDOW4euEeg67eQ5730Jb5bB7Rcy2zpV4AQrASJAFDxv8pfjxMxIzwuGKFh+xEfCwgpQoKkBEU8ByHu+btWAVN1UNP7JPJrRO2xSCeEkM+203dxiCbTY36X2dP4tKpw4Ttj31CmZHRclwEndcp7th9oCDeFrwSU+2V0vDCbiREk8WfFksnxel+VgCqQr3zbBWRRSCVm0yqLfJHPTtC0vaKHSkU3BSUihyeij0KoRdkUaDkVtWH/A6Ko5vCf8rcd2O5N+XVRjK5X7DQCgQMkUe63pkaaNuTr66Zv+T6Wuwwg4o3dbgq0kr94MpY7vmzsDy39gLjanXMkqQ9WABxJOwAAAABJRU5ErkJggg=="
                           alt="icon"></span>
                <span>{{ $neuroExamInfo?->patientInfo?->created_at ?? '0000-00-00 00:00' }}</span>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 2px 0 0 0 !important;">
                <span style="opacity: 0.9;font-family: Roboto, Helvetica, Arial, sans-serif;font-weight: 545">Breed:</span>
                <strong style="margin-left: 55px;color: #344767 !important;">{{ $neuroExamInfo?->patientInfo?->breedInfo?->name ?? '-' }}</strong>
            </p>
        </td>
        <td style="text-align:right;">
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 2px 0 0 0 !important;">
                <span style="opacity: 0.9;font-family: Roboto, Helvetica, Arial, sans-serif;font-weight: 545">Practitioner Name:</span>
                <strong style="margin-left: 30px;color: #344767 !important;">{{ $neuroExamInfo?->addedByInfo?->name ?? '-' }}</strong>
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 2px 0 0 0 !important;">
                <span style="opacity: 0.9;font-family: Roboto, Helvetica, Arial, sans-serif;font-weight: 545">Age/DOB:</span>
                <strong style="margin-left: 30px;color: #344767 !important;">{{ $neuroExamInfo?->patientInfo?->dob ?? '-' }}</strong>
            </p>
        </td>
        <td style="text-align:right;">
            <p style="font-family: 'Roboto', Helvetica, Arial, sans-serif;font-weight: 400 !important;margin: 2px 0 0 0 !important;">
                <span style="opacity: 0.9;font-family: Roboto, Helvetica, Arial, sans-serif;font-weight: 545">Neurologist Name:</span>
                <strong style="margin-left: 30px;color: #344767 !important;">{{ $neuroExamInfo?->consultByInfo?->name ?? '-' }}</strong>
            </p>
        </td>
    </tr>
    </tbody>
</table>

<p style="border-bottom: 4px solid #866FBF;margin: 13px 200px;"></p>
<div>
    <h3 style="color: #344767;background-color:#E3DCF3;padding: 10px 20px 18px 35px;border-radius: 0.125rem;font-size: 18px;width: 43%;">History</h3>
</div>
<div style="padding-left: 32px !important">
    <h4 style="color: #344767">Medical History:</h4>
    <p>{{ $neuroExamInfo->medical_history ?? 'No information found.' }}</p>
    <h4 style="color: #344767 !important;">Vaccination History:</h4>
    <p>{{ $neuroExamInfo->vaccination_history ?? 'No information found.' }}</p>
    <h4 style="color: #344767 !important;">Diet/Feeding Routine:</h4>
    <p>{{ $neuroExamInfo->diet_feeding_routine ?? 'No information found.' }}</p>
    <h4 style="color: #344767 !important;">Current/Therapy Response:</h4>
    <p>{{ $neuroExamInfo->current_therapy_response ?? 'No information found.' }}</p>
    <h4 style="color: #344767 !important;">Patient's Environment:</h4>
    <p>{{ $neuroExamInfo->patients_environment ?? 'No information found.' }}</p>
</div>

<p style="border-bottom: 4px solid #866FBF;margin: 50px 200px 13px 200px;"></p>

<div>
    <h3 style="color: #344767;background-color:#E3DCF3;padding: 10px 20px 18px 35px;border-radius: 0.125rem;font-size: 18px;width: 43%;">Neurological Exam Findings</h3>
</div>
<div style="padding-left: 32px !important">
    @php($neurologicalExamSteps = json_decode($neuroExamInfo->neurological_exam_steps, true) ?? [])
    @if(count($neurologicalExamSteps) > 0)
        @foreach($examsInfo as $examInfo)
            @if(isset($neurologicalExamSteps[$examInfo->id ?? 0]))
                <h4 style="color: #344767 !important;">{{ $examInfo->step_name ?? '' }}</h4>
                @if(count($examInfo->testInfo) > 0)
                    @foreach($examInfo->testInfo as $testKey=>$testInfo)
                        @php($test_sn = $testKey+1)
                        <p>{{ $testInfo->name ?? '' }}:
                            @foreach($testInfo->optionsInfo ?? [] as $optionKey=>$options)
                                @php($option_sn = $optionKey +1)
                                <strong style="color: #866FBF;">{{ isset($neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0]) && $neurologicalExamSteps[$examInfo->id ?? 0][$testInfo->id ?? 0] == $options->id ? $options->name ?? '' : '' }}</strong>
                            @endforeach
                        </p>
                    @endforeach
                @endif
            @endif
        @endforeach
    @else
        <p> No :
            <strong style="color: #866FBF;">No Information found</strong>
        </p>
    @endif
</div>

<p style="border-bottom: 4px solid #866FBF;margin: 50px 200px 13px 200px;"></p>

<div>
    <h3 style="color: #344767;background-color:#E3DCF3;padding: 10px 20px 18px 35px;border-radius: 0.125rem;font-size: 18px;width: 43%;">Neurolocalizations</h3>
</div>
<div style="padding-left: 32px !important">
    <h4 style="color: #344767 !important;">Result</h4>
    <p>{{ $neuroExamInfo->result ?? 'No result found.' }}</p>
</div>

<p style="border-bottom: 4px solid #866FBF;margin: 50px 200px 13px 200px;"></p>

<div>
    <h3 style="color: #344767;background-color:#E3DCF3;padding: 10px 20px 18px 35px;border-radius: 0.125rem;font-size: 18px;width: 43%;">Neurologist's Comments</h3>
</div>
<div style="padding-left: 32px !important">
    @php($neurologicalComments = json_decode($neuroExamInfo->consultationInfo?->comments, true) ?? [])
    @if(count($neurologicalComments) > 0)
        @foreach($neurologicalComments as $neurologicalCommentKey =>$neurologicalComment)
            <p><strong>{{ $neurologicalCommentKey+1 }}.</strong> {{$neurologicalComment ?? ''}}</p>
        @endforeach
    @else
        <p class="text-center">No comments found.</p>
    @endif
</div>
<h4 style="font-size: 17px;margin-top: 40px;margin-bottom: 20px !important;color: #7b809a;text-align: center;">Thank You!</h4>

</body>

</html>