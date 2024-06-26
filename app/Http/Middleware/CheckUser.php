<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if(auth()->user()->status == 'Super Admin')
                $user_view = 'admin.dashboard';
            elseif(auth()->user()->status == 'Neurologist')
                $user_view = 'neurologist.dashboard';
            elseif (auth()->user()->status == 'Practitioner')
                $user_view = 'practitioner.dashboard';
            elseif (auth()->user()->status == 'Student') {
                $studentInfo = auth()->user()?->studentInfo ?? '';
                $modules = explode(',', $studentInfo->module);

                if (in_array("Dashboard", $modules))
                    $user_view = 'student.dashboard';
                elseif (in_array("Neuro Assessment", $modules))
                    $user_view = 'student.neuro.assessment';
                elseif (in_array("Patients", $modules))
                    $user_view = 'student.patient';
                elseif (in_array("Settings", $modules))
                    $user_view = 'student.settings';
                else
                    abort(404);
            }
            else
                abort(404);

            return redirect()->route($user_view);
        }

        return redirect()->route('login');
    }
}
