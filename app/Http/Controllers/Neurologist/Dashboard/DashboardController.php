<?php

namespace App\Http\Controllers\Neurologist\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Letter;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $superAdmin = User::where('status', 'Super Admin')->first();
        $videoInfo = Resource::where('added_by', $superAdmin->id ?? null)->first();
        $resourceInfo = $videoInfo != null ? $videoInfo->getResourceInfo() : null;

        return view('neurologist.dashboard.index', compact('resourceInfo'));
    }
}
