<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Helpers\FileUpload;
use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Testes;
use App\Models\TestOptions;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $settings['profile-information'] = auth()->user() ?? null;
        $settings['set-localization-form'] = null;
        $settings['set-results'] = null;
        $settings['payments'] = null;
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
            }else{
                $response = ResponseMessage::ResponseNotifyWarning('Notification!', 'No exams step list found, please add exams step firstly.');
            }
            $response['rendered_info'] = $renderData;
            Log::info('Successfully get the exams step list', ['list' => 'success' ?? '']);
            DB::commit();

            return response()->json($response);
        } catch (Exception $e) {
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
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to add the exam step. Please try again later.');
            Log::info('The system is unable to add the exam step. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

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
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the test information. Please try again later.');
            Log::info('The system is unable to remove the test information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function studentAdd(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.settings.student_add');
    }

    public function studentEdit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.settings.student_edit');
    }
}
