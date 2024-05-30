<?php

namespace App\Http\Controllers\Practitioner\NeuroAssessment;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NeuroAssessmentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.neuroAssessment.index');
    }

    public function patientIdInfo(Request $request)
    {
        $request->validate([
            'patient_id' => ['required', 'string', 'max:255'],
        ]);

        try {
            if ($patientInfo = Patient::where('patient_id', $request->patient_id)->first()) {
                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Patient information get successfully.');
                Log::info('Successfully get the patient information', ['get' => 'success' ?? '']);

                return redirect()->route('practitioner.neuro.assessment.exam', Crypt::encrypt($patientInfo->id))->with($response);
            }

            $response = ResponseMessage::ResponseNotifyError('Error!', 'No information found against the given patient ID.');
            Log::info('No information found against given patient ID', ['patient-id' => 'Not Found']);

            return redirect()->back()->with($response)->withInput($request->all());
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to found the information against the given patient ID. Please try again later.');
            Log::info('The system is unable to found the information against the given patient ID. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return redirect()->back()->with($response);
        }
    }

    public function neuroExam($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patient_id = Crypt::decrypt($id);
        $admin_id = User::where('status','Super Admin')->first()?->id ?? null;
        $patientInfo = Patient::with('specieTypeInfo','breedInfo')->find($patient_id);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();

        return view('practitioner.neuroAssessment.exam', compact('patientInfo', 'examsInfo'));
    }
}
