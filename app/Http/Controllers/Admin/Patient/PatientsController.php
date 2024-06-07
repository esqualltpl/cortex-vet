<?php

namespace App\Http\Controllers\Admin\Patient;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\Exam;
use App\Models\NeuroAssessment;
use App\Models\Patient;
use App\Models\Specie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class PatientsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patients = Patient::with('specieTypeInfo', 'practitionerInfo')->get();
        return view('admin.patients.index', compact('patients'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $species = Specie::all();
        $patient_id = Crypt::decrypt($id);
        $patientInfo = Patient::with('specieTypeInfo', 'breedInfo')->find($patient_id);
        $appointmentsHistory = NeuroAssessment::where('patient_id', $patient_id)->with('treatedByInfo', 'consultByInfo')->get();
        $breedsSelectedSpecie = Breed::where('specie_id', $patientInfo->specie_type)->get();

        return view('admin.patients.detail', compact('patientInfo', 'species', 'breedsSelectedSpecie', 'appointmentsHistory'));
    }

    public function neuroExamDetail($id, $no): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neuro_exam_detail_id = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $neuro_exam_no = Crypt::decrypt($no);
        $neuroExamInfo = NeuroAssessment::with('patientInfo', 'treatedByInfo', 'consultByInfo')->find($neuro_exam_detail_id);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
        return view('admin.patients.neuro_exam', compact('neuroExamInfo', 'neuro_exam_no', 'examsInfo'));
    }

    public function getNeuroAssessmentNotes($id)
    {
        try {
            $neuroAssessmentId = Crypt::decrypt($id);
            $neuroAssessmentInfo = NeuroAssessment::find($neuroAssessmentId);

            //Render Data
            $renderData = view('admin.patients.render.notes_data', compact('neuroAssessmentInfo'))->render();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully get the notes information.');
            $response['rendered_info'] = $renderData;

            Log::info('Successfully get the notes information', ['result' => 'success' ?? '']);

            return response()->json($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the notes information. Please try again later.');
            Log::info('The system is unable to get the notes information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function reportDetail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neuroAssessmentId = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $neuroExamInfo = NeuroAssessment::with('patientInfo','treatedByInfo','consultByInfo', 'consultationInfo')->find($neuroAssessmentId ?? null);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();

        return view('admin.patients.report_detail', compact('neuroExamInfo','examsInfo',));
    }
}
