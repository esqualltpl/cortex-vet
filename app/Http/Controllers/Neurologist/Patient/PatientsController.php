<?php

namespace App\Http\Controllers\Neurologist\Patient;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\ConsultationRequest;
use App\Models\Exam;
use App\Models\MainFirstVideo;
use App\Models\NeuroAssessment;
use App\Models\Patient;
use App\Models\Specie;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PatientsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patients = NeuroAssessment::where('consult_by', auth()->user()->id)->with('patientInfo')->get();
        return view('neurologist.patients.index', compact('patients'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $species = Specie::all();
        $patient_id = Crypt::decrypt($id);
        $patientInfo = Patient::with('specieTypeInfo', 'breedInfo')->find($patient_id);
        $appointmentsHistory = NeuroAssessment::where('patient_id', $patient_id)
            ->whereHas('consultationInfo', function($q){
                $q->where('accept_by', auth()->user()->id);
            })
            ->where('status', 'Consult Neurologist')->with('treatedByInfo', 'consultByInfo', 'consultationInfo')->get();
        $breedsSelectedSpecie = Breed::where('specie_id', $patientInfo->specie_type)->get();

        return view('neurologist.patients.detail', compact('patientInfo', 'species', 'breedsSelectedSpecie', 'appointmentsHistory'));
    }

    public function neuroExamDetail($id, $no): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neuro_exam_detail_id = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $mainFirstVideo = MainFirstVideo::where('added_by', $admin_id)->first();
        $neuro_exam_no = Crypt::decrypt($no);
        $neuroExamInfo = NeuroAssessment::with('patientInfo', 'treatedByInfo', 'consultByInfo', 'consultationInfo')->find($neuro_exam_detail_id);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
        return view('neurologist.patients.neuro_exam_detail', compact('mainFirstVideo', 'neuroExamInfo', 'neuro_exam_no', 'examsInfo'));
    }

    public function getNeuroAssessmentNotes($id)
    {
        try {
            $neuroAssessmentId = Crypt::decrypt($id);
            $neuroAssessmentInfo = NeuroAssessment::find($neuroAssessmentId);

            //Render Data
            $renderData = view('neurologist.patients.render.notes_data', compact('neuroAssessmentInfo'))->render();

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

    public function saveNeuroAssessmentNotes(Request $request)
    {
        $request->validate([
            'notes' => ['required'],
        ]);
        try {
            DB::beginTransaction();
            $neuroAssessmentId = Crypt::decrypt($request->neuro_assessment_id);
            $notes = $request->notes ?? null;
            $neuroAssessmentInfo = NeuroAssessment::find($neuroAssessmentId);
            $neuroAssessmentInfo->notes = $notes;
            $neuroAssessmentInfo->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully save the notes information.');

            Log::info('Successfully save the notes information', ['result' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the notes information. Please try again later.');
            Log::info('The system is unable to save the notes information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function reportDetail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        try {
            ///////------ Generate PDF ------\\\\\\\
            $pdf = new Dompdf();

            // Set custom options
            $options = new Options();
            $options->set('defaultPaperSize', 'A4');
            $options->set('isHtml5ParserEnabled', true);
            $pdf->setOptions($options);

            // Load HTML content
            $neuroAssessmentId = Crypt::decrypt($id);
            $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
            $neuroExamInfo = NeuroAssessment::with('patientInfo', 'treatedByInfo', 'consultByInfo', 'consultationInfo')->find($neuroAssessmentId ?? null);
            $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
            $html = view('neurologist.patients.render.pdf_data', compact('neuroExamInfo', 'examsInfo',))->render();

            $htmlWithMargins = "
            <style>
                @page {
                    margin: 10mm 0;
                }
                body {
                    margin: 0;
                    padding: 0;
                }
            </style>
            $html";

            // Load HTML with custom margins
            $pdf->loadHtml($htmlWithMargins);

            // Set the paper size and orientation
            $pdf->setPaper('A3', 'portrait');

            // Render the PDF
            $pdf->render();

            /*$font = $pdf->getFontMetrics()->get_font("helvetica", "bold");
            $pdf->getCanvas()->page_text(72, 18, "Header: {PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));*/

            $font = $pdf->getFontMetrics()->get_font("Helvetica", "normal");
            $pdf->getCanvas()->page_text($pdf->getCanvas()->get_width() - 72, 18, "Page {PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));

            $pdf->output(); // Get the generated PDF content
            $file_name = 'patient-report-'. date('YmdHis') . ".pdf"; // "-" . Str::uuid() .

            // Stream the PDF to the browser for download
            $pdf->stream($file_name, array('Attachment' => 1));
            ///////------ Generate PDF End ------\\\\\\\

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully generate the patient complete report.');
            Log::info('Successfully generate the patient complete report', ['result' => 'success' ?? '']);

            return redirect()->back();
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to generate the patient complete report. Please try again later.');
            Log::info('The system is unable to generate the patient complete report. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return redirect()->back()->with($response);
        }
        /*$neuroAssessmentId = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        //$consultationInfo = ConsultationRequest::with('neuroAssessmentInfo')->find($requestId);
        $neuroExamInfo = NeuroAssessment::with('patientInfo','treatedByInfo','consultByInfo', 'consultationInfo')->find($neuroAssessmentId ?? null);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();

        return view('neurologist.patients.report_detail', compact('neuroExamInfo','examsInfo',));*/
    }
}
