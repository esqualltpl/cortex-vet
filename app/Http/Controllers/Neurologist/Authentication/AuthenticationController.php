<?php

namespace App\Http\Controllers\Neurologist\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;

class AuthenticationController extends Controller
{
    public function login(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.authentication.login');
    }

    public function forgot(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.authentication.forgot');
    }

    public function resetPasswordSuccess(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('neurologist.authentication.reset_password_success');
    }

    public function magicallyLogin($email,$password): RedirectResponse
    {
        if (Auth::attempt(['email' => Crypt::decrypt($email), 'password' => Crypt::decrypt($password)])) {
            return to_route('neurologist.dashboard');
        }else{
            return to_route('neurologist.authentication.login');
        }
    }
}
