<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 */
class Notification extends Model
{
    use HasFactory;

    public function history()
    {
        return $this->hasMany(NotificationHistory::class, 'notification_id');
    }
}
