<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Letter;
use App\Models\NeuroAssessment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $dashboardInfo['veterinary_neurologists'] = User::where('status', 'Neurologist')->count() ?? 0;
        $dashboardInfo['veterinary_practitioners'] = User::where('status', 'Practitioner')->count() ?? 0;
        $dashboardInfo['onboarded_students'] = User::where('status', 'Student')->count() ?? 0;
        $dashboardInfo['consultations_by_neurologists'] = NeuroAssessment::where('consult_by', '!=', null)->count() ?? 0;
        $dashboardInfo['consultations_by_practitioners'] = NeuroAssessment::where('treated_by', '!=', null)->count() ?? 0;
        $dashboardInfo['total_payment'] = NeuroAssessment::where('consult_by', '!=', null)->sum('charge_by_hospital') ?? 0;

        $getUsersCountByMonth = $this->getUsersCountByMonth();
        $dashboardInfo['chat_veterinary_neurologists'] = $getUsersCountByMonth['Neurologist'];
        $dashboardInfo['chat_veterinary_practitioners'] = $getUsersCountByMonth['Practitioner'];
        $dashboardInfo['chat_onboarded_students'] = $getUsersCountByMonth['Student'];

        return view('admin.dashboard.index', compact('dashboardInfo'));
    }

    public static function getUsersCountByMonth()
    {
        // Get the current year
        $currentYear = Carbon::now()->year;

        // Get all the statuses
        $statuses = ['Neurologist', 'Practitioner', 'Student'];

        // Initialize the results array with all months of the current year and zero counts
        $months = collect(range(1, 12))->mapWithKeys(function ($month) use ($currentYear) {
            return [Carbon::create($currentYear, $month)->format('F') => 0];
        })->toArray();

        $results = [];

        foreach ($statuses as $status) {
            // Initialize the result array for the current status
            $results[$status] = $months;

            // Get the counts from the database
            $counts = User::select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(*) as count')
            )
                ->where('status', $status)
                ->whereYear('created_at', $currentYear)
                ->groupBy('month')
                ->get();

            // Update the results array with the counts
            foreach ($counts as $count) {
                $monthName = Carbon::create($currentYear, $count->month)->format('F');
                $results[$status][$monthName] = $count->count;
            }
        }

        return $results;
    }
}
