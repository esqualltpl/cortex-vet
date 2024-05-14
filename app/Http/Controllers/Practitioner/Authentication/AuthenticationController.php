<?php

namespace App\Http\Controllers\Practitioner\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;

class AuthenticationController extends Controller
{
    public function login(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.authentication.login');
    }

    public function signUp(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.authentication.signup');
    }

    public function signUpSave(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        try {
            DB::beginTransaction();
            $name = $request->name ?? null;
            $email = $request->email ?? null;
            $password = $request->password ?? 0;
            $contact_type = $request->contact_type != null ? Crypt::decrypt($request->contact_type) : null;
            $contact_no = $request->contact_no ?? null;
            $vet_license = $request->vet_license ?? null;
            $license_state = $request->license_state ?? null;
            $license_country = $request->license_country ?? null;
            $address = $request->address != null ? Crypt::decrypt($request->address) : null;
            $main_street = $request->main_street ?? null;
            $city = $request->city ?? null;
            $state = $request->state ?? null;
            $zip_code = $request->zip_code ?? null;

            //---User Login Info---\\
            $userInfo = new User;
            $userInfo->name = $name;
            $userInfo->email = $email;
            $userInfo->status = 'Practitioner';
            $userInfo->password = Hash::make($password);
            $userInfo->save();

            //---User Detail---\\
            $userDetail = new UserDetail;
            $userDetail->user_id = $userInfo->id ?? null;
            $userDetail->contact_type = $contact_type;
            $userDetail->contact_no = $contact_no;
            $userDetail->vet_license = $vet_license;
            $userDetail->license_state = $license_state;
            $userDetail->license_country = $license_country;
            $userDetail->address = $address;
            $userDetail->main_street = $main_street;
            $userDetail->city = $city;
            $userDetail->state = $state;
            $userDetail->zip_code = $zip_code;
            $userDetail->save();

            Auth::login($userInfo);

            DB::commit();
            Log::info('Successfully signup new practitioner user', ['message' => 'success']);
            flash()->success('Your account has been registered successfully, Please complete your profile.');
            return redirect()->route('practitioner.dashboard');
        } catch (\Exception $e) {
            Log::info('The system is unable to create the new practitioner user now. Please try again later.', ['message' => $e->getMessage(), 'error' => $e]);
            flash()->error('The system is unable to create the new practitioner user now. Please try again later.');
            return redirect()->back();
        }
    }

    public function forgot(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.authentication.forgot');
    }

    public function resetPasswordSuccess(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('practitioner.authentication.reset_password_success');
    }

    public function magicallyLogin($email,$password): RedirectResponse
    {
        if (Auth::attempt(['email' => Crypt::decrypt($email), 'password' => Crypt::decrypt($password)])) {
            return to_route('practitioner.dashboard');
        }else{
            return to_route('practitioner.authentication.login');
        }
    }
}