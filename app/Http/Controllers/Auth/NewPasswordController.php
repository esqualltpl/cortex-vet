<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        /* Check User Type */
        $userInfo = User::where('email', $request->email)->first();
        if ($userInfo)
            $user_route = 'password.reset.success';
        else
            $user_route = '';

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
            ? $user_route != '' ?
                redirect()->route($user_route, ['email' => Crypt::encrypt($request->email), 'password' => Crypt::encrypt($request->password)])->with('status', __($status))
                : back()->withInput($request->only('email'))
                    ->withErrors(['email' => 'Unable to reset the password now, please try again later.'])
            : back()->withInput($request->only('email'))
                ->withErrors(['email' => __($status)]);
    }

    public function resetPasswordSuccess(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.reset-password-success');
    }

    public function magicallyLogin($email, $password)
    {
        if (Auth::attempt(['email' => Crypt::decrypt($email), 'password' => Crypt::decrypt($password)])) {
            if (auth()->user()->status == 'Super Admin')
                return to_route('admin.dashboard');
            elseif (auth()->user()->status == 'Neurologist')
                return to_route('neurologist.dashboard');
            elseif (auth()->user()->status == 'Practitioner')
                return to_route('practitioner.dashboard');
            elseif (auth()->user()->status == 'Student') {
                $studentInfo = auth()->user()?->studentInfo ?? '';
                $modules = explode(',', $studentInfo->module);

                if (in_array("Dashboard", $modules))
                    return to_route('student.dashboard');
                elseif (in_array("Neuro Assessment", $modules))
                    return to_route('student.neuro.assessment');
                elseif (in_array("Patients", $modules))
                    return to_route('student.patient');
                elseif (in_array("Settings", $modules))
                    return to_route('student.settings');
                else
                    return to_route('login');
            } else
                return to_route('login');
        } else {
            return to_route('login');
        }
    }
}
