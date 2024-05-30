<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.signup');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
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
            $type = $request->type ?? null;
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
            $userInfo->status = $type;
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

            if(auth()->user()->status == 'Neurologist')
                $user_route = 'neurologist.dashboard';
            elseif (auth()->user()->status == 'Practitioner')
                $user_route = 'practitioner.dashboard';
            else
                $user_route = 'login';

            DB::commit();
            Log::info('Successfully complete the signup for new user', ['message' => 'success']);
            return redirect()->route($user_route)->with('success', 'Your account has been registered successfully, Please complete your profile.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info('The system is unable to signup the new user now. Please try again later.', ['message' => $e->getMessage(), 'error' => $e]);
            return redirect()->back()->with('error', 'The system is unable to signup the new user now. Please try again later.');
        }
    }
}
