<?php

namespace App\Http\Controllers\Neurologist\ConsultationRequest;

use App\Helpers\SendEmail;
use App\Models\Notification;
use Carbon\Carbon;
use App\Models\Exam;
use App\Models\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use App\Models\NeuroAssessment;
use App\Helpers\ResponseMessage;
use Illuminate\Support\Facades\DB;
use App\Models\ConsultationRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ConsultationRequestsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $consultationRequests = ConsultationRequest::where('accept_by', null)->orWhere('accept_by', auth()->user()->id)->with('neuroAssessmentInfo')->get();
        return view('neurologist.consultation.index', compact('consultationRequests'));
    }

    public function detail($id)
    {
        $requestId = Crypt::decrypt($id);
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $consultationRequest = ConsultationRequest::with('neuroAssessmentInfo')->find($requestId);

        if($consultationRequest->accept_by != null && $consultationRequest->accept_by != auth()->user()->id ?? 0){
            $response = ResponseMessage::ResponseNotifyWarning('Info!', 'This request has been accepted by another neurologist.');
            Log::info('This request has been accepted by another neurologist', ['Info' => 'already-accepted' ?? '']);
            return to_route('neurologist.consultation.request')->with($response);
        }

        $neuroExamInfo = NeuroAssessment::with('patientInfo','treatedByInfo','consultByInfo')->find($consultationRequest->neuro_assessment_id ?? null);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
        return view('neurologist.consultation.detail', compact('consultationRequest', 'examsInfo', 'neuroExamInfo'));
    }

    public function acceptRequest(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        try {
            DB::beginTransaction();
            $requestId = Crypt::decrypt($id);
            $consultationRequest = ConsultationRequest::find($requestId);
            $consultationRequest->accept_by = auth()->user()->id ?? null;
            $consultationRequest->accept_date_time = Carbon::now();
            $consultationRequest->save();

            $neuroAssessment = NeuroAssessment::find($consultationRequest->neuro_assessment_id ?? null);
            $neuroAssessment->consult_by = auth()->user()->id ?? null;
            $neuroAssessment->save();

            $neurologistName = auth()->user()->name ?? '';
            $neuroAssessmentNotification = new Notification();
            $neuroAssessmentNotification->message = '<span class="text-primary text-capitalize">'.$neurologistName.'</span> has accepted your Neurologist Consultation Request.';
            $neuroAssessmentNotification->notification_for = $consultationRequest->neuroAssessmentInfo?->addedByInfo?->id ?? null;
            $neuroAssessmentNotification->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully accept the consult neurologist request.');
            $response['redirect_url'] = route('neurologist.consultation.detail', $id);

            Log::info('Successfully accept the consult neurologist request', ['result' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to accept the consult neurologist request. Please try again later.');
            Log::info('The system is unable to accept the consult neurologist request. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function deleteComment($request_id, $comment_id)
    {
        try {
            DB::beginTransaction();

            $requestId = Crypt::decrypt($request_id);
            $commentId = Crypt::decrypt($comment_id);
            $consultationInfo = ConsultationRequest::find($requestId);

            $comments = json_decode($consultationInfo->comments, true) ?? [];
            if(isset($comments[$commentId])){
                unset($comments[$commentId]);
            }

            $consultationInfo->comments = json_encode($comments);
            $consultationInfo->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Comment information removed successfully.');
            Log::info('Successfully removed the comment info', ['removed' => 'success' ?? '']);

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the comment information. Please try again later.');
            Log::info('The system is unable to remove the comment information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function communicateDirectly(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        try {
            DB::beginTransaction();
            $requestId = Crypt::decrypt($id);
            $consultationRequest = ConsultationRequest::find($requestId);
            $consultationRequest->communicate_directly = 'Yes';
            $consultationRequest->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully generate the communicate directly mail link.');

            Log::info('Successfully generate the communicate directly mail link', ['result' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to generate the communicate directly mail link. Please try again later.');
            Log::info('The system is unable to generate the communicate directly mail link. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function performShareThroughEmail(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'comments.*' => 'required_without_all:comments.*',
        ]);
        if ($validator->fails()) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'Please add at least one comment regarding this consultation.');

            return response()->json($response);
        }
        try {
            DB::beginTransaction();
            $requestId = Crypt::decrypt($id);

            $consultationRequest = ConsultationRequest::find($requestId);
            $consultationRequest->comments = json_encode($request->comments ?? []);
            $consultationRequest->share_through_email = 'Yes';
            $consultationRequest->save();

            ///////------ Generate PDF ------\\\\\\\
            $pdf = new Dompdf();

            // Set custom options
            $options = new Options();
            $options->set('defaultPaperSize', 'A4');
            $options->set('isHtml5ParserEnabled', true);
            $pdf->setOptions($options);

            // Load HTML content
            $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
            $consultationInfo = ConsultationRequest::with('neuroAssessmentInfo')->find($requestId);
            $neuroExamInfo = NeuroAssessment::with('patientInfo','treatedByInfo','consultByInfo')->find($consultationInfo->neuro_assessment_id ?? null);
            $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
            $html = view('neurologist.consultation.render.pdf_data', compact('consultationInfo','neuroExamInfo','examsInfo',))->render();
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
            $emailTemplate = 'neurologist.consultation.render.email_data';
            $toEmail = $consultationRequest->neuroAssessmentInfo?->addedByInfo?->email ?? null;
            $fromEmail = auth()->user()->email ?? null;
            $subject = 'Patient Report';
            $emailData = [
                            'practitioner_name'=> $consultationRequest->neuroAssessmentInfo?->addedByInfo?->name ?? '',
                            'neurologist_name'=> $consultationRequest->neuroAssessmentInfo?->consultByInfo?->name ?? ''
                         ];
            $pdfFile = $filePath;

            SendEmail::email($emailTemplate,$toEmail,$fromEmail,$subject,$emailData,$pdfFile);

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully send the patient complete report along with your comments.');
            Log::info('Successfully send the patient complete report along with your comments', ['result' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to send the patient complete report along with your comments. Please try again later.');
            Log::info('The system is unable to send the patient complete report along with your comments. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }
}
