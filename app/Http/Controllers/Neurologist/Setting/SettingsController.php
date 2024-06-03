<?php

namespace App\Http\Controllers\Neurologist\Setting;

use App\Helpers\FileUpload;
use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $settings['profile-information'] = auth()->user() ?? null;

        return view('neurologist.settings.index', compact('settings'));
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
            $license_state = $request->license_state ?? null;
            $license_country = $request->license_country ?? null;
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
                $userDetailAdd->license_state = $license_state;
                $userDetailAdd->license_country = $license_country;
                $userDetailAdd->main_street = $main_street;
                $userDetailAdd->city = $city;
                $userDetailAdd->state = $state;
                $userDetailAdd->zip_code = $zip_code;
                $userDetailAdd->save();
            } else {
                $userDetail->contact_no = $contact_no;
                $userDetail->vet_license = $vet_license;
                $userDetail->license_state = $license_state;
                $userDetail->license_country = $license_country;
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
}
