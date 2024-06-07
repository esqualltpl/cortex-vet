<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Letter;
use App\Models\NeuroAssessment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $dashboardInfo['veterinary_neurologists'] = User::where('status', 'Neurologist')->count() ?? 0;
        $dashboardInfo['veterinary_practitioners'] = User::where('status', 'Practitioner')->count() ?? 0;
        $dashboardInfo['onboarded_students'] = User::where('status', 'Student')->count() ?? 0;
        $dashboardInfo['consultations_by_neurologists'] = NeuroAssessment::where('consult_by', '!=', null)->count() ?? 0;
        $dashboardInfo['consultations_by_practitioners'] = NeuroAssessment::where('treated_by', '!=', null)->count() ?? 0;
        $dashboardInfo['total_payment'] = 0;

        return view('admin.dashboard.index', compact('dashboardInfo'));
    }
}
