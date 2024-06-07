<?php

namespace App\Http\Controllers\Practitioner\Patient;

use App\Helpers\ResponseMessage;
use App\Helpers\SendEmail;
use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Models\ConsultationRequest;
use App\Models\Exam;
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
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PatientsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patients = Patient::where('added_by', auth()->user()->id)->with('specieTypeInfo')->get();
        return view('practitioner.patients.index', compact('patients'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $species = Specie::all();
        $patient_id = Crypt::decrypt($id);
        $patientInfo = Patient::with('specieTypeInfo', 'breedInfo')->find($patient_id);
        $appointmentsHistory = NeuroAssessment::where('patient_id', $patient_id)->with('treatedByInfo', 'consultByInfo')->get();
        $breedsSelectedSpecie = Breed::where('specie_id', $patientInfo->specie_type)->get();

        return view('practitioner.patients.detail', compact('patientInfo', 'species', 'breedsSelectedSpecie', 'appointmentsHistory'));
    }

    public function neuroExamDetail($id, $no): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neuro_exam_detail_id = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $neuro_exam_no = Crypt::decrypt($no);
        $neuroExamInfo = NeuroAssessment::with('patientInfo', 'treatedByInfo', 'consultByInfo')->find($neuro_exam_detail_id);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
        return view('practitioner.patients.neuro_exam_detail', compact('neuroExamInfo', 'neuro_exam_no', 'examsInfo'));
    }

    public function sendDetailReport(Request $request)
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
            $neuroAssessmentId = Crypt::decrypt($request->neuro_assessment_id);
            $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
            $neuroExamInfo = NeuroAssessment::with('patientInfo', 'treatedByInfo', 'consultByInfo', 'consultationInfo')->find($neuroAssessmentId ?? null);
            $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
            $html = view('practitioner.patients.render.pdf_data', compact('neuroExamInfo', 'examsInfo',))->render();

            $htmlWithMargins = "
            <style>
                @page {
                    margin: 5mm 0;
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

            $pdfOutput = $pdf->output(); // Get the generated PDF content
            $file_name = date('YmdHis') . "-" . Str::uuid() . ".pdf";
            $filePath = public_path('portal/assets/pdf/consultation-pdf/') . $file_name; // Define the path where you want to save the PDF

            // Create the directory if it does not exist
            if (!file_exists(dirname($filePath))) {
                mkdir(dirname($filePath), 0777, true);
            }

            // Save the PDF to the specified path
            file_put_contents($filePath, $pdfOutput);
            ///////------ Generate PDF End ------\\\\\\\

            //----Send Email----\\
            $emailTemplate = 'practitioner.patients.render.email_data';
            $toEmail = $request->email ?? null;
            $fromEmail = auth()->user()->email ?? null;
            $subject = 'Patient Report';
            $emailData = [
                'patient_name'=> $neuroExamInfo->patientInfo?->patient_name ?? ''
            ];
            $pdfFile = $filePath;

            SendEmail::email($emailTemplate,$toEmail,$fromEmail,$subject,$emailData,$pdfFile);

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully send the patient complete report.');
            Log::info('Successfully send the patient complete report', ['result' => 'success' ?? '']);

            return response()->json($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to send the patient complete report. Please try again later.');
            Log::info('The system is unable to send the patient complete report. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }
    /*
    {
        try {
            ///////------ Generate PDF ------\\\\\\\
            $pdf = new Dompdf();

            // Set custom options
            $options = new Options;
            $options->set('defaultPaperSize', 'A4');
            $options->set('isHtml5ParserEnabled', true);
            $pdf->setOptions($options);

            // Load HTML content
            $neuroAssessmentId = Crypt::decrypt($request->neuro_assessment_id);
            $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
            $neuroExamInfo = NeuroAssessment::with('patientInfo', 'treatedByInfo', 'consultByInfo', 'consultationInfo')->find($neuroAssessmentId ?? null);
            $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
            $html = view('practitioner.patients.render.pdf_data', compact('neuroExamInfo', 'examsInfo',))->render();
            $htmlWithMargins = "
            <style>
                @page {
                    margin: 5mm 0;
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

            $pdfOutput = $pdf->output(); // Get the generated PDF content
            $file_name = date('YmdHis') . "-" . Str::uuid() . ".pdf";
            $filePath = public_path('portal/assets/pdf/consultation-pdf/') . $file_name; // Define the path where you want to save the PDF

            // Create the directory if it does not exist
            if (!file_exists(dirname($filePath))) {
                mkdir(dirname($filePath), 0777, true);
            }

            // Save the PDF to the specified path
            file_put_contents($filePath, $pdfOutput);
            ///////------ Generate PDF End ------\\\\\\\

            //----Send Email----\\
            $emailTemplate = 'practitioner.patients.render.email_data';
            $toEmail = $request->email ?? null;
            $fromEmail = auth()->user()->email ?? null;
            $subject = 'Patient Report';
            $emailData = [
                'practitioner_name' => $consultationRequest->neuroAssessmentInfo?->addedByInfo?->name ?? '',
                'neurologist_name' => $consultationRequest->neuroAssessmentInfo?->consultByInfo?->name ?? ''
            ];
            $pdfFile = $filePath;

            SendEmail::email($emailTemplate, $toEmail, $fromEmail, $subject, $emailData, $pdfFile);

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully send the patient complete report.');
            Log::info('Successfully send the patient complete report', ['result' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            dd($e);
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to send the patient complete report. Please try again later.');
            Log::info('The system is unable to send the patient complete report. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }*/
}
