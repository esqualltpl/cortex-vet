<?php
namespace App\Helpers;
use App\Models\Notification;

/**
 * @method static where(string $string, $param)
 */
class Notifications{

    public static function GetAllNotifications()
    {
        return ['count'=> Notification::where('notification_for', 0)->whereDoesntHave('history')->count(),
        'notification'=> Notification::where('notification_for', 0)->get()];
    }

    public static function GetNotifications()
    {
        return ['count'=> Notification::where('notification_for', auth()->user()->id)->whereDoesntHave('history')->count(),
            'notification'=> Notification::where('notification_for', auth()->user()->id)->get()];
    }
}
