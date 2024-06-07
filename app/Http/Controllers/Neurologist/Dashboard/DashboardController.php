<?php

namespace App\Http\Controllers\Neurologist\Dashboard;

use App\Helpers\Notifications;
use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\ConsultationRequest;
use App\Models\Letter;
use App\Models\NotificationHistory;
use App\Models\Resource;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $dashboardInfo['consultation_request'] = ConsultationRequest::where('accept_by', null)->count() ?? 0;
        $dashboardInfo['total_payment'] = 0;
        $dashboardInfo['past_consultations'] = ConsultationRequest::where('accept_by', auth()->user()->id)->count() ?? 0;

        $superAdmin = User::where('status', 'Super Admin')->first();
        $videoInfo = Resource::where('added_by', $superAdmin->id ?? null)->first();
        $resourceInfo = $videoInfo != null ? $videoInfo->getResourceInfo() : null;

        return view('neurologist.dashboard.index', compact('dashboardInfo', 'resourceInfo'));
    }

    public function activeNotificationSeen()
    {
        $getActiveNotifications = Notifications::GetAllNotifications();
        foreach ($getActiveNotifications['notification'] as $getActiveNotification) {
            if (NotificationHistory::where('notification_id', $getActiveNotification->id ?? null)->first() == null) {
                $notification_history = new NotificationHistory;
                $notification_history->notification_id = $getActiveNotification->id ?? null;
                $notification_history->read_by = auth()->user()->id ?? null;
                $notification_history->save();
            }
        }

        return response()->json('Notification status updated.');
    }
}
