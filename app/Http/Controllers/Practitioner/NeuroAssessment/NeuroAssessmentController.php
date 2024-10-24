<?php

namespace App\Http\Controllers\Practitioner\NeuroAssessment;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\ConsultationRequest;
use App\Models\Exam;
use App\Models\MainFirstVideo;
use App\Models\NeuroAssessment;
use App\Models\Notification;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\ResultDetail;
use App\Models\User;
use Carbon\Carbon;
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
            if ($patientInfo = Patient::where('patient_id', $request->patient_id)->where('added_by', auth()->user()->id)->first()) {
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

    public function neuroExam($id, $na_id = null): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $patient_id = Crypt::decrypt($id);
        $neuroAssessment_id = $na_id != null ? Crypt::decrypt($na_id) : null;
        $admin_id = User::where('status', 'Super Admin')->first()?->id ?? null;
        $mainFirstVideo = MainFirstVideo::where('added_by', $admin_id)->first();
        $patientInfo = Patient::with('specieTypeInfo', 'breedInfo')->find($patient_id);
        $examsInfo = Exam::where('added_by', $admin_id)->with('testInfo', 'instructionVideoInfo')->get();
        $neuroAssessmentInfo = NeuroAssessment::find($neuroAssessment_id) ?? null;
        $neurologicalExamStepInfo = json_decode($neuroAssessmentInfo->neurological_exam_steps ?? '', true) ?? null;

        return view('practitioner.neuroAssessment.exam', compact('patientInfo', 'mainFirstVideo', 'examsInfo', 'neuroAssessmentInfo', 'neurologicalExamStepInfo'));
    }

    public function neuroExamResult(Request $request, $id)
    {
        try {
            // Check if options are provided
            if (count($request->options ?? []) == 0) {
                $response = ResponseMessage::ResponseNotifyWarning('Warning!', 'Please select the exam option first to get the result.');
                return response()->json($response);
            }

            /*// Build the query using Eloquent
            $query = ResultDetail::query();

            foreach ($request->options as $exam_id => $exams) {
                foreach ($exams as $test_id => $test_options) {
                    foreach ($test_options as $test_option => $option_id) {
                        $query->orWhere(function ($q) use ($exam_id, $test_id, $option_id) {
                            $q->where('exam_id', $exam_id)
                                ->where('test_id', $test_id)
                                ->where('option_id', $option_id);
                        });
                    }
                }
            }

            // Get the results and eager load the related Result model
            $results = $query->with('result')->get();*/

            // Build the query using Eloquent
            $query = ResultDetail::query();

            $first = true; // A flag to manage the initial condition

            foreach ($request->options as $exam_id => $exams) {
                foreach ($exams as $test_id => $test_options) {
                    foreach ($test_options as $test_option => $option_id) {
                        // Use where instead of orWhere for precise filtering
                        if ($first) {
                            $query->where(function ($q) use ($exam_id, $test_id, $option_id) {
                                $q->where('exam_id', $exam_id)
                                    ->where('test_id', $test_id)
                                    ->where('option_id', $option_id);
                            });
                            $first = false; // Set the flag to false after the first condition is set
                        } else {
                            // Combine subsequent conditions with orWhere
                            $query->orWhere(function ($q) use ($exam_id, $test_id, $option_id) {
                                $q->where('exam_id', $exam_id)
                                    ->where('test_id', $test_id)
                                    ->where('option_id', $option_id);
                            });
                        }
                    }
                }
            }

            // Get the results and eager load the related Result model
            $results = $query->with('result')->get();


            // Check if results are found
            if (count($results ?? []) == 0) {
                $response = ResponseMessage::ResponseNotifyWarning('Result!', 'No disease detected.');
                return response()->json($response);
            }

            // Group results by result name and concatenate details
            $groupedResults = $results->groupBy('result.name');

            $output = [];
            foreach ($groupedResults as $resultName => $resultDetails) {
                /*$details = [];
                foreach ($resultDetails as $detail) {
                    $details[] = "Exam ID: {$detail->exam_id}, Test ID: {$detail->test_id}, Option ID: {$detail->option_id}";
                }*/
                $output[] = $resultName;
            }

            $response = ResponseMessage::ResponseNotifySuccess('Result!', 'Successfully get the neuro exam result info.');
            $response['rendered_info'] = implode(', ', $output);
            Log::info('Successfully get the neuro exam result info', ['result' => 'success' ?? '']);
            return response()->json($response);

        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to retrieve the results. Please try again later.');
            Log::info('The system is unable to retrieve the results. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function consultNeurologistRequest(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $patient_id = Crypt::decrypt($id);
            $medical_history = $request->medical_history ?? null;
            $vaccination_history = $request->vaccination_history ?? null;
            $diet_feeding_routine = $request->diet_feeding_routine ?? null;
            $current_therapy_response = $request->current_therapy_response ?? null;
            $patients_environment = $request->patients_environment ?? null;
            $options = $request->options ?? [];
            $result = $request->result ?? null;
            $superAdmin = User::where('status', 'Super Admin')->first();

            $treatedInfo = new NeuroAssessment;
            $treatedInfo->patient_id = $patient_id;
            $treatedInfo->medical_history = $medical_history;
            $treatedInfo->vaccination_history = $vaccination_history;
            $treatedInfo->diet_feeding_routine = $diet_feeding_routine;
            $treatedInfo->current_therapy_response = $current_therapy_response;
            $treatedInfo->patients_environment = $patients_environment;
            $treatedInfo->neurological_exam_steps = json_encode($options);
            $treatedInfo->result = $result;
            $treatedInfo->charge_by_hospital = Payment::where('added_by', $superAdmin->id)->first()?->amount ?? 0;
            $treatedInfo->status = 'Consult Neurologist';
            $treatedInfo->added_by = auth()->user()->id;
            $treatedInfo->save();

            $consultationRequest = new ConsultationRequest;
            $consultationRequest->neuro_assessment_id = $treatedInfo->id ?? null;
            $consultationRequest->request_date_time = Carbon::now();
            $consultationRequest->save();

            $practitionerName = auth()->user()->name ?? '';
            $practitionerId = auth()->user()->id ?? null;
            $consultationRequestNotification = new Notification();
            $consultationRequestNotification->message = '<span class="text-primary text-capitalize">' . $practitionerName . '</span> request for Neurologist Consultation.';
            $consultationRequestNotification->notification_for = 0;
            $consultationRequestNotification->user_id = $practitionerId;
            $consultationRequestNotification->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully send the consult neurologist request.');
//            $response['redirect_url'] = route('practitioner.neuro.assessment.exam', $id);
            $response['redirect_url'] = route('practitioner.neuro.assessment');
            Log::info('Successfully send the consult neurologist request', ['result' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to send the consult neurologist request. Please try again later.');
            Log::info('The system is unable to send the consult neurologist request. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function treatedInfoSave(Request $request, $id)
    {

        try {
            DB::beginTransaction();
            $patient_id = Crypt::decrypt($id);
            $medical_history = $request->medical_history ?? null;
            $vaccination_history = $request->vaccination_history ?? null;
            $diet_feeding_routine = $request->diet_feeding_routine ?? null;
            $current_therapy_response = $request->current_therapy_response ?? null;
            $patients_environment = $request->patients_environment ?? null;
            $options = $request->options ?? [];
            $result = $request->result ?? null;
            $superAdmin = User::where('status', 'Super Admin')->first();

            $treatedInfo = new NeuroAssessment;
            $treatedInfo->patient_id = $patient_id;
            $treatedInfo->medical_history = $medical_history;
            $treatedInfo->vaccination_history = $vaccination_history;
            $treatedInfo->diet_feeding_routine = $diet_feeding_routine;
            $treatedInfo->current_therapy_response = $current_therapy_response;
            $treatedInfo->patients_environment = $patients_environment;
            $treatedInfo->neurological_exam_steps = json_encode($options);
            $treatedInfo->result = $result;
            $treatedInfo->treated_by = auth()->user()->id;
            $treatedInfo->charge_by_hospital = Payment::where('added_by', $superAdmin->id)->first()?->amount ?? 0;
            $treatedInfo->status = 'Treated';
            $treatedInfo->added_by = auth()->user()->id;
            $treatedInfo->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Successfully save the neuro assessment treated information.');
            Log::info('Successfully save the neuro assessment treated information', ['result' => 'success' ?? '']);
            DB::commit();

            return redirect()->route('practitioner.patient.detail', $id)->with($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the neuro assessment treated information. Please try again later.');
            Log::info('The system is unable to save the neuro assessment treated information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return redirect()->back()->with($response);
        }
    }
}
