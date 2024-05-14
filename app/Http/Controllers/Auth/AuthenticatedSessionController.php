<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     * @throws ValidationException
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        /* Check User Type */
        if(auth()->user()->status == 'Super Admin')
            $user_route = 'admin.dashboard';
        elseif(auth()->user()->status == 'Neurologist')
            $user_route = 'neurologist.dashboard';
        elseif (auth()->user()->status == 'Practitioner')
            $user_route = 'practitioner.dashboard';
        else
            return response()->view('errors.' . '404', [], 404);

        return redirect()->intended(route($user_route, absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        /* Check User Type */
        if(auth()->user()->status == 'Super Admin')
            $user_route = 'admin.authentication.login';
        elseif(auth()->user()->status == 'Neurologist')
            $user_route = 'neurologist.authentication.login';
        elseif (auth()->user()->status == 'Practitioner')
            $user_route = 'practitioner.authentication.login';
        else
            return response()->view('errors.' . '404', [], 404);

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route($user_route);
    }
}
