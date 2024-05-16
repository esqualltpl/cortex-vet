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
            else
                return response()->view('errors.' . '404', [], 404);

            return redirect()->route($user_view);
        }

        return redirect()->route('login');
    }
}
