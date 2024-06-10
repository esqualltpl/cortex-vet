<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Helpers\FileUpload;
use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\InstructionVideo;
use App\Models\MainFirstVideo;
use App\Models\Payment;
use App\Models\Resource;
use App\Models\Result;
use App\Models\ResultDetail;
use App\Models\Student;
use App\Models\Testes;
use App\Models\TestOptions;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $settings['profile-information'] = auth()->user() ?? null;
        $settings['set-localization-form'] = Exam::where('added_by', auth()->user()->id)->with('testInfo')->count() ?? 0;
        $settings['set-results'] = Result::where('added_by', auth()->user()->id)->with('detail')->count() ?? 0;
        $settings['payments'] = Payment::where('added_by', auth()->user()->id)->first()?->amount ?? 0;;
        $settings['students'] = null;

        return view('admin.settings.index', compact('settings'));
    }

    public function updateProfile(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
        ]);
        try {
            DB::beginTransaction();
            $name = $request->name ?? null;
            $email = $request->email ?? null;
            $contact_no = $request->contact_no ?? null;
            $vet_license = $request->vet_license ?? null;
            $main_street = $request->main_street ?? null;
            $city = $request->city ?? null;
            $state = $request->state ?? null;
            $zip_code = $request->zip_code ?? null;

            //---User Login Info---\\
            $userInfo = User::find(auth()->user()->id ?? null);
            $userInfo->name = $name;
            $userInfo->email = $email;
            $userInfo->save();

            //---User Detail---\\
            $userDetail = UserDetail::where('user_id', auth()->user()->id ?? null)->first();
            if ($userDetail == null) {
                $userDetailAdd = new UserDetail;
                $userDetailAdd->user_id = auth()->user()->id ?? null;
                $userDetailAdd->contact_no = $contact_no;
                $userDetailAdd->vet_license = $vet_license;
                $userDetailAdd->main_street = $main_street;
                $userDetailAdd->city = $city;
                $userDetailAdd->state = $state;
                $userDetailAdd->zip_code = $zip_code;
                $userDetailAdd->save();
            } else {
                $userDetail->contact_no = $contact_no;
                $userDetail->vet_license = $vet_license;
                $userDetail->main_street = $main_street;
                $userDetail->city = $city;
                $userDetail->state = $state;
                $userDetail->zip_code = $zip_code;
                $userDetail->save();
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'User profile information updated successfully.');
            Log::info('User profile information updated successfully.', ['removed' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update the user profile information. Please try again later.');
            Log::info('The system is unable to update the user profile information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function updateProfileImage(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            DB::beginTransaction();

            $profile_image = null;
            if ($image = $request->file('image')) {
                $profile_image = FileUpload::FileUpload($image, "profile-images");
            }

            $user_update = auth()->user();
            $user_update->picture = $profile_image;
            $user_update->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'User profile image updated successfully.');
            $response['show_val'] = auth()->user()->getUserPic() ?? '';

            Log::info('Successfully removed the user info', ['upload' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update the user profile image. Please try again later.');
            Log::info('The system is unable to update the user profile image. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function changeProfilePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!(Hash::check($request->get('current_password'), auth()->user()->password))) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'Your current password does not matches with the password.');
            return response()->json($response);
        }

        try {
            DB::beginTransaction();

            $changePassword = auth()->user();
            $changePassword->password = bcrypt($request->get('password'));
            $changePassword->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Your password updated successfully.');

            Log::info('Successfully update the user password', ['update' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update your password. Please try again later.');
            Log::info('The system is unable to update your password. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function SetLocalizationExamList()
    {
        try {
            DB::beginTransaction();

            $examsAddInfo = Exam::where('added_by', auth()->user()->id)->with('testInfo')->get();

            $renderData = '';
            if (count($examsAddInfo) > 0) {
                foreach ($examsAddInfo as $examAddInfo) {
                    //Render Data
                    $renderData .= view('admin.settings.render.localization_exam_form_data', compact('examAddInfo'))->render();
                }
                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exams step list get successfully.');
            } else {
                $response = ResponseMessage::ResponseNotifyWarning('Notification!', 'No exams step list found, please add exams step firstly.');
            }
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the exams step list', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the exams step list. Please try again later.');
            Log::info('The system is unable to add the exams step list. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function examInfoAdd(Request $request)
    {
        $request->validate([
            'exam_name' => ['required', 'string', 'max:255'],
        ]);

        try {
            DB::beginTransaction();

            $examAddInfo = new Exam;
            $examAddInfo->step_name = $request->exam_name;
            $examAddInfo->added_by = auth()->user()->id;
            $examAddInfo->save();

            //Render Data
            $renderData = view('admin.settings.render.localization_exam_form_data', compact('examAddInfo'))->render();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exam step add successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully add the exam step', ['added' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to add the exam step. Please try again later.');
            Log::info('The system is unable to add the exam step. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examUploadInstructionVideoOrUrl(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'url' => 'nullable|url|required_without:video',
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:20480|required_without:url'
        ]);

        if ($validator->fails()) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'Please provide either a Video URL or Upload a Video.');

            return response()->json($response);
        }

        try {
            DB::beginTransaction();
            $exam_id = Crypt::decrypt($request->exam_id);

            //Upload Video
            $upload_video = null;
            if ($video = $request->file('video')) {
                $upload_video = FileUpload::FileUpload($video, "exam-videos");
            }

            if ($examUpdateInstructionVideo = InstructionVideo::where('exam_id', $exam_id)->first()) {
                $examUpdateInstructionVideo->url = $request->url ?? null;
                $examUpdateInstructionVideo->video = $upload_video;
                $examUpdateInstructionVideo->save();
            } else {
                $examAddInstructionVideo = new InstructionVideo;
                $examAddInstructionVideo->exam_id = $exam_id;
                $examAddInstructionVideo->url = $request->url ?? null;
                $examAddInstructionVideo->video = $upload_video;
                $examAddInstructionVideo->added_by = auth()->user()->id;
                $examAddInstructionVideo->save();
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exam instruction video/url information save successfully.');
            Log::info('Successfully save the exam instruction video/url information', ['added' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the exam instruction video/url information. Please try again later.');
            Log::info('The system is unable to save the exam instruction video/url information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examUploadInstructionVideoPreview(Request $request, $examId)
    {
        try {
            DB::beginTransaction();
            $exam_id = Crypt::decrypt($examId);
            $instructionVideoInfo = InstructionVideo::where('exam_id', $exam_id)->first();
            $video = $instructionVideoInfo != null ? $instructionVideoInfo->getExamVideo() : null;
            if ($video != null) {
                $renderData = '<video controls="" style="width: 100%">
                            <source src="' . $video . '">
                        </video>';
            } else {
                $renderData = '<h6 class="text-center">No Video found!</h6>';
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exam instruction video information get successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the exam instruction video information', ['get' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the exam instruction video information. Please try again later.');
            Log::info('The system is unable to get the exam instruction video information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examTestOptionsInfoAdd(Request $request)
    {
        $request->validate([
            'test' => ['required', 'string', 'max:255'],
            'test_options_old.*' => ['required', 'string', 'max:255'],
        ], [
            'test.required' => 'The test field is required.',
            'test.string' => 'The test field must be a string.',
            'test.max' => 'The test field may not be greater than 255 characters.',
            'test_options.*.required' => 'Each test option is required.',
            'test_options.*.string' => 'Each test option must be a string.',
            'test_options.*.max' => 'Each test option may not be greater than 255 characters.',
        ]);

        try {
            DB::beginTransaction();
            $exam_id = Crypt::decrypt($request->exam_id);
            $testAddInfo = new Testes;
            $testAddInfo->exam_id = Crypt::decrypt($request->exam_id);
            $testAddInfo->name = $request->test;
            $testAddInfo->added_by = auth()->user()->id;
            $testAddInfo->save();

            foreach ($request->test_options as $test_option) {
                $testOption = new TestOptions;
                $testOption->test_id = $testAddInfo->id;
                $testOption->name = $test_option;
                $testOption->added_by = auth()->user()->id;
                $testOption->save();
            }

            $testNo = Testes::where('exam_id', $exam_id)->where('added_by', auth()->user()->id)->count() ?? 0;

            //Render Data
            $renderData = view('admin.settings.render.localization_exam_test_options_data', compact('testAddInfo', 'testNo'))->render();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exam step add successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully add the exam step', ['added' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to add the exam step. Please try again later.');
            Log::info('The system is unable to add the exam step. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examTestOptionsInfoEdit(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $test_id = Crypt::decrypt($id);
            $testInfo = Testes::with('optionsInfo')->find($test_id);

            //Render Data
            $renderData = view('admin.settings.render.localization_update_exam_test_options_form_data', compact('testInfo'))->render();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Test information get successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the test information', ['added' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the test information. Please try again later.');
            Log::info('The system is unable to get the test information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examTestOptionsInfoUpdate(Request $request)
    {

        $request->validate([
            'test' => ['required', 'string', 'max:255'],
            'test_options_old.*' => ['required', 'string', 'max:255'],
            'test_options.*' => ['required', 'string', 'max:255'],
        ], [
            'test.required' => 'The test field is required.',
            'test.string' => 'The test field must be a string.',
            'test.max' => 'The test field may not be greater than 255 characters.',
            'test_options_old.*.required' => 'Each test option is required.',
            'test_options_old.*.string' => 'Each test option must be a string.',
            'test_options_old.*.max' => 'Each test option may not be greater than 255 characters.',
            'test_options.*.required' => 'Each test option is required.',
            'test_options.*.string' => 'Each test option must be a string.',
            'test_options.*.max' => 'Each test option may not be greater than 255 characters.',
        ]);

        try {
            DB::beginTransaction();
            $test_id = Crypt::decrypt($request->test_id);
            $testInfo = Testes::find($test_id);
            $testInfo->name = $request->test;
            $testInfo->save();

            //Update Options
            foreach ($request->test_options_old ?? [] as $test_option_id => $test_option_value) {
                $testOptionUpdate = TestOptions::find($test_option_id);
                $testOptionUpdate->name = $test_option_value;
                $testOptionUpdate->save();
            }

            //Add new Options
            foreach ($request->test_options ?? [] as $test_option) {
                $testOption = new TestOptions;
                $testOption->test_id = $test_id;
                $testOption->name = $test_option;
                $testOption->added_by = auth()->user()->id;
                $testOption->save();
            }

            //Removed Options
            foreach ($request->removed_test_options ?? [] as $remove_test_option) {
                $option_id = Crypt::decrypt($remove_test_option);
                TestOptions::find($option_id)->delete();
            }

            //Render Data
            $renderData = view('admin.settings.render.localization_updated_exam_test_options_data', compact('testInfo'))->render();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exam step add successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully update the test information', ['added' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update the test information. Please try again later.');
            Log::info('The system is unable to update the test information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examInfoDelete($id)
    {
        try {
            DB::beginTransaction();

            $exam_id = Crypt::decrypt($id);
            Exam::find($exam_id)->delete();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exam information removed successfully.');
            Log::info('Successfully removed the exam info', ['removed' => 'success' ?? '']);

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the exam information. Please try again later.');
            Log::info('The system is unable to remove the exam information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function examTestInfoDelete($id)
    {
        try {
            DB::beginTransaction();

            $test_id = Crypt::decrypt($id);
            Testes::find($test_id)->delete();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Test information removed successfully.');
            Log::info('Successfully removed the test info', ['removed' => 'success' ?? '']);

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the test information. Please try again later.');
            Log::info('The system is unable to remove the test information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function setMainFirstVideo()
    {
        try {
            DB::beginTransaction();

            $superAdmin = User::where('status', 'Super Admin')->first();
            $mainFirstVideoInfo = MainFirstVideo::where('added_by', $superAdmin->id ?? null)->first();

            //Render Data
            $renderData = view('admin.settings.render.set_main_first_video_data', compact('mainFirstVideoInfo'))->render();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Main first video/url information get successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the main first video/url info', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the main first video/url info. Please try again later.');
            Log::info('The system is unable to get the main first video/url info. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function uploadSetMainFirstVideo(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'url' => 'nullable|url|required_without:video',
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:20480|required_without:url'
        ]);

        if ($validator->fails()) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'Please provide either a Video URL or Upload a Video.');

            return response()->json($response);
        }

        try {
            DB::beginTransaction();

            //Upload Video
            $upload_video = null;
            if ($video = $request->file('video')) {
                $upload_video = FileUpload::FileUpload($video, "main-first-videos");
            }

            if ($setMainFirstVideoVideo = MainFirstVideo::first()) {
                $setMainFirstVideoVideo->url = $request->url ?? null;
                $setMainFirstVideoVideo->video = $upload_video;
                $setMainFirstVideoVideo->save();
            } else {
                $setMainFirstVideoVideo = new MainFirstVideo;
                $setMainFirstVideoVideo->url = $request->url ?? null;
                $setMainFirstVideoVideo->video = $upload_video;
                $setMainFirstVideoVideo->added_by = auth()->user()->id;
                $setMainFirstVideoVideo->save();
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Main first video/url information save successfully.');
            Log::info('Successfully save the main first video/url information', ['added' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the main first video/url information. Please try again later.');
            Log::info('The system is unable to save the main first video/url information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function setMainFirstVideoPreview(Request $request)
    {
        try {
            DB::beginTransaction();
            $mainFirstVideoInfo = MainFirstVideo::first();
            $video = $mainFirstVideoInfo != null ? $mainFirstVideoInfo->getMainFirstVideo() : null;
            if ($video != null) {
                $renderData = '<video controls="" style="width: 100%">
                            <source src="' . $video . '">
                        </video>';
            } else {
                $renderData = '<h6 class="text-center">No Video found!</h6>';
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Main first video information get successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the main first video information', ['get' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the main first video information. Please try again later.');
            Log::info('The system is unable to get the main first video information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function setResultList()
    {
        try {
            DB::beginTransaction();

            $examsAddInfo = Exam::where('added_by', auth()->user()->id)->with('testInfo')->get();

            $renderData = '';
            if (count($examsAddInfo) > 0) {
                foreach ($examsAddInfo as $examAddInfo) {
                    //Render Data
                    $renderData .= view('admin.settings.render.set_results_data', compact('examAddInfo'))->render();
                }
                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exams step list get successfully.');
            } else {
                $response = ResponseMessage::ResponseNotifyWarning('Notification!', 'No exams step list found, please add exams step firstly.');
            }
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the exams step list', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the exams step list. Please try again later.');
            Log::info('The system is unable to add the exams step list. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function setResultInfoSave(Request $request)
    {
        $request->validate([
            'result_name' => ['required', 'string', 'max:255'],
        ]);

        try {
            if(count($request->options ?? []) == 0){
                $response = ResponseMessage::ResponseNotifyWarning('Warning!', 'Please select the exam option, test and its option first to set result.');
                return response()->json($response);
            }

            DB::beginTransaction();
            $result_id = $request->result_id ?? null;
            if ($result_id) {
                $decResultId = Crypt::decrypt($result_id);
                $updateResultInfo = Result::find($decResultId);
                $updateResultInfo->name = $request->result_name;
                $updateResultInfo->save();

                //Remove Previous Result Detail Info
                $removePreviousResultDetailInfo = ResultDetail::where('result_id', $updateResultInfo->id)->get();
                foreach ($removePreviousResultDetailInfo as $removeInfo) {
                    $removeInfo->forceDelete();
                }

                $option_info = $request->options;
                foreach ($option_info as $exam_id => $test_options) {
                    foreach ($test_options as $test_id => $option_val) {
                        $resultDetailInfo = new ResultDetail;
                        $resultDetailInfo->result_id = $decResultId ?? null;
                        $resultDetailInfo->exam_id = $exam_id;
                        $resultDetailInfo->test_id = $test_id;
                        $resultDetailInfo->option_id = $option_val;
                        $resultDetailInfo->added_by = auth()->user()->id;
                        $resultDetailInfo->save();
                    }
                }

                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Result information updated successfully.');
                Log::info('Successfully update the result information', ['updated' => 'success' ?? '']);
            } else {
                $resultInfo = new Result;
                $resultInfo->name = $request->result_name;
                $resultInfo->added_by = auth()->user()->id;
                $resultInfo->save();

                $option_info = $request->options;
                foreach ($option_info as $exam_id => $test_options) {
                    foreach ($test_options as $test_id => $option_val) {
                        $resultDetailInfo = new ResultDetail;
                        $resultDetailInfo->result_id = $resultInfo->id ?? null;
                        $resultDetailInfo->exam_id = $exam_id;
                        $resultDetailInfo->test_id = $test_id;
                        $resultDetailInfo->option_id = $option_val;
                        $resultDetailInfo->added_by = auth()->user()->id;
                        $resultDetailInfo->save();
                    }
                }

                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Result information saved successfully.');
                Log::info('Successfully save the result information', ['added' => 'success' ?? '']);
            }
            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the result information. Please try again later.');
            Log::info('The system is unable to save the result information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function getNeurolocalizationList()
    {
        try {
            DB::beginTransaction();

            $resultInfo = Result::where('added_by', auth()->user()->id)->with('detail')->get();

            $renderData = '';
            if (count($resultInfo) > 0) {
                //Render Data
                $renderData = view('admin.settings.render.neurolocalization_data', compact('resultInfo'))->render();

                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Neurolocalization list get successfully.');
            } else {
                $response = ResponseMessage::ResponseNotifyWarning('Notification!', 'No neurolocalization list found, please add exams step firstly.');
            }
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the neurolocalization list', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the neurolocalization list. Please try again later.');
            Log::info('The system is unable to add the neurolocalization list. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function neurolocalizationDetailPreview(Request $request, $neurolocalizationId)
    {
        try {
            DB::beginTransaction();
            $neurolocalization_id = Crypt::decrypt($neurolocalizationId);
            $neurolocalizationInfo = ResultDetail::where('result_id', $neurolocalization_id)
                ->with('examInfo', 'testInfo', 'optionInfo')->get();
            if (count($neurolocalizationInfo) > 0) {
                $renderData = '';
                $info_sn = 0;
                foreach ($neurolocalizationInfo as $info) {
                    $info_sn = $info_sn + 1;
                    $exam_info = $info->examInfo?->step_name ?? '-';
                    $test_info = $info->testInfo?->name ?? '-';
                    $option_info = $info->optionInfo?->name ?? '-';

                    $renderData .= '<div class="col-md-12 row">
                                        <div class="col-md-3"><h6 class="mx-3">' . $exam_info . '</h6></div>
                                        <div class="col-md-3"><p class="mx-3"><b>Test:' . $info_sn . '</b></p></div>
                                        <div class="col-md-3"><p class="mt-0">' . $test_info . '</p></div>
                                        <div class="col-md-3"><p class="ml-2 mt-0" style="color: #83C1CC">' . $option_info . '</p></div>
                                    </div>';
                }
            } else {
                $renderData = '<h6 class="text-center">No Information found!</h6>';
            }

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Neurolocalization information get successfully.');
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the neurolocalization information', ['get' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the neurolocalization information. Please try again later.');
            Log::info('The system is unable to get the neurolocalization information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function neurolocalizationInfoEdit(Request $request, $neurolocalizationId)
    {
        try {
            DB::beginTransaction();
            $neurolocalization_id = Crypt::decrypt($neurolocalizationId);
            $resultDetailInfo = ResultDetail::where('result_id', $neurolocalization_id)
                ->with('examInfo', 'testInfo', 'optionInfo')->get();

            $examsAddInfo = Exam::where('added_by', auth()->user()->id)
                ->with('testInfo')->get();

            $renderData = '';
            $examEditInfo = [];
            $testEditInfo = [];
            $optionEditInfo = [];
            if (count($examsAddInfo) > 0) {
                foreach ($resultDetailInfo as $resultInfo) {
                    $examEditInfo[] = $resultInfo->examInfo?->id ?? null;
                    $testEditInfo[] = $resultInfo->testInfo?->id ?? null;
                    $optionEditInfo[] = $resultInfo->optionInfo?->id ?? null;
                }
                foreach ($examsAddInfo as $key => $examAddInfo) {
                    //Render Data
                    $renderData .= view('admin.settings.render.edit_results_data', compact('examAddInfo', 'examEditInfo', 'testEditInfo', 'optionEditInfo'))->render();
                }
                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Exams step list get successfully.');
            } else {
                $response = ResponseMessage::ResponseNotifyWarning('Notification!', 'No exams step list found, please add exams step firstly.');
            }
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the exams step list', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the exams step list. Please try again later.');
            Log::info('The system is unable to add the exams step list. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function neurolocalizationInfoDelete($id)
    {
        try {
            DB::beginTransaction();

            $neurolocalization_id = Crypt::decrypt($id);
            Result::find($neurolocalization_id)->delete();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Neurolocalization information removed successfully.');
            Log::info('Successfully removed the neurolocalization info', ['removed' => 'success' ?? '']);

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the neurolocalization information. Please try again later.');
            Log::info('The system is unable to remove the neurolocalization information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function setPayment(Request $request)
    {
        $request->validate([
            'payment' => ['required', 'numeric'],
        ]);

        try {
            DB::beginTransaction();

            $amount = $request->payment ?? 0;
            if ($paymentUpdate = Payment::where('added_by', auth()->user()->id)->first()) {
                $paymentUpdate->amount = $amount;
            } else {
                $paymentUpdate = new Payment;
                $paymentUpdate->amount = $amount;
                $paymentUpdate->added_by = auth()->user()->id;
            }
            $paymentUpdate->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Payment information update successfully.');
            Log::info('Successfully update the payment information', ['update' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update the payment information. Please try again later.');
            Log::info('The system is unable to update the payment information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function studentsList()
    {
        try {
            DB::beginTransaction();

            $studentInfo = Student::where('added_by', auth()->user()->id)->with('detail')->get();

            $renderData = '';
            if (count($studentInfo) > 0) {
                //Render Data
                $renderData = view('admin.settings.render.student_data', compact('studentInfo'))->render();

                $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Student list get successfully.');
            } else {
                $response = ResponseMessage::ResponseNotifyWarning('Notification!', 'No student list found, please add exams step firstly.');
            }
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the student list', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the student list. Please try again later.');
            Log::info('The system is unable to get the student list. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return response()->json($response);
        }
    }

    public function studentAdd(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.settings.student_add');
    }

    public function studentSave(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'years_of_graduation' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'min:6'],
            //'module.*' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'],
        ]);
        try {
            DB::beginTransaction();

            $userInfoSave = new User;
            $userInfoSave->name = $request->full_name;
            $userInfoSave->email = $request->email;
            if ($request->password) //If password add
                $userInfoSave->password = Hash::make($request->password);
            $userInfoSave->save();

            $studentInfoSave = new Student;
            $studentInfoSave->user_id = $userInfoSave->id;
            $studentInfoSave->user_name = $request->user_name;
            $studentInfoSave->school_name = $request->school_name;
            $studentInfoSave->years_of_graduation = $request->years_of_graduation;
            $studentInfoSave->module = $request->module ? implode(',', $request->module) : null;
            $studentInfoSave->added_by = auth()->user()->id;
            $studentInfoSave->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Student information save successfully.');
            Log::info('Successfully save the student information', ['update' => 'success' ?? '']);
            DB::commit();

            return redirect()->back()->with($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to save the student information. Please try again later.');
            Log::info('The system is unable to save the student information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return redirect()->back()->with($response);
        }
    }

    public function studentEdit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $student_id = Crypt::decrypt($id);
        $student_info = Student::with('detail')->find($student_id);
        return view('admin.settings.student_edit', compact('student_info'));
    }

    public function studentUpdate(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'years_of_graduation' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'min:6'],
            //'module.*' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Crypt::decrypt($request->user_id)],
        ]);
        try {
            DB::beginTransaction();

            $user_id = Crypt::decrypt($request->user_id);
            $student_id = Crypt::decrypt($request->student_id);

            $userInfoUpdate = User::find($user_id);
            $userInfoUpdate->name = $request->full_name;
            $userInfoUpdate->email = $request->email;
            if ($request->password) //If password add
                $userInfoUpdate->password = Hash::make($request->password);
            $userInfoUpdate->save();

            $studentInfoUpdate = Student::find($student_id);
            $studentInfoUpdate->user_name = $request->user_name;
            $studentInfoUpdate->school_name = $request->school_name;
            $studentInfoUpdate->years_of_graduation = $request->years_of_graduation;
            $studentInfoUpdate->module = $request->module ? implode(',', $request->module) : null;
            $studentInfoUpdate->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Student information updated successfully.');
            Log::info('Successfully update the student information', ['update' => 'success' ?? '']);
            DB::commit();

            return redirect()->back()->with($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update the student information. Please try again later.');
            Log::info('The system is unable to update the student information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);
            return redirect()->back()->with($response);
        }
    }

    public function studentDelete($id)
    {
        try {
            DB::beginTransaction();

            $student_id = Crypt::decrypt($id);
            $student_info = Student::find($student_id);
            User::find($student_info->user_id)->delete();
            $student_info->delete();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Student information removed successfully.');
            Log::info('Successfully removed the student info', ['removed' => 'success' ?? '']);

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the student information. Please try again later.');
            Log::info('The system is unable to remove the student information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }
}
