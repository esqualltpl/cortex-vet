<?php

use Carbon\Carbon;

function HumanReadableTime($minutes): string
{
    $hours = intdiv($minutes, 60);
    $remainingMinutes = $minutes % 60;

    $timeString = '';

    if ($hours > 0) {
        $timeString .= $hours . 'h ';
    }

    if ($remainingMinutes > 0) {
        $timeString .= $remainingMinutes . 'm';
    }

    return trim($timeString);
}

function humanReadableAge($dateOfBirth): string
{
    $age = 0;
    if($dateOfBirth){
        $age = Carbon::parse($dateOfBirth)->age;
    }

    return $age.' years';
}

function calculateAge($dob) {
    // Parse the date of birth
    $dob = Carbon::parse($dob);
    // Get the current date
    $now = Carbon::now();

    // Calculate the difference in years, months, and days
    $years = $dob->diffInYears($now);
    $months = $dob->diffInMonths($now);
    $days = $dob->diffInDays($now);

    if ($years >= 1) {
        return round($years) . ' years';
    } elseif ($months >= 1) {
        return round($months) . ' months';
    } else {
        return round($days) . ' days';
    }
}

function getWeekDay($dateString): string
{
    $date = Carbon::parse($dateString);
    $dayOfWeek = $date->dayOfWeek;
    $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    return $daysOfWeek[$dayOfWeek];
}
function getTotalHoursMints($start_time, $end_time): array
{
    $start_datetime = DateTime::createFromFormat('H:i', $start_time);
    $end_datetime = DateTime::createFromFormat('H:i', $end_time);

    $difference = $start_datetime->diff($end_datetime);
    $result['total_hours'] = $difference->h ?? 0;
    $result['total_minutes'] = $difference->i ?? 0;

    return $result;
}

function calculateTotalTime($timesArray): string
{
    $totalHours = 0;
    $totalMinutes = 0;

    foreach ($timesArray as $time) {
        list($hours, $minutes) = explode(':', $time);
        $totalHours += (int)$hours;
        $totalMinutes += (int)$minutes;
    }

    // Handle overflow of minutes
    if ($totalMinutes >= 60) {
        $totalHours += floor($totalMinutes / 60);
        $totalMinutes %= 60;
    }

    // Format the result
    $resultHours = str_pad($totalHours, 2, '0', STR_PAD_LEFT);
    $resultMinutes = str_pad($totalMinutes, 2, '0', STR_PAD_LEFT);

    return "$resultHours Hours : $resultMinutes Minutes";
}

function calculateTimeDifference($time1, $time2): string
{
    preg_match('/(\d+) Hours : (\d+) Minutes/', $time1, $matches1);

    if (preg_match('/(\d+) Hours/', $time2, $matches2)) {
        $allowedHours = (int)$matches2[1];
        $allowedMinutes = 0;
    } else {
        preg_match('/(\d+) Hours : (\d+) Minutes/', $time2, $matches2);
        $allowedHours = (int)$matches2[1];
        $allowedMinutes = (int)$matches2[2];
    }

    $hours1 = (int)$matches1[1];
    $minutes1 = (int)$matches1[2];

    if ($allowedHours > $hours1 || ($allowedHours == $hours1 && $allowedMinutes >= $minutes1)) {
        return "0 Hours : 0 Minutes";
    }

    $totalHours = $hours1 - $allowedHours;
    $totalMinutes = $minutes1 - $allowedMinutes;

    // Handle negative minutes
    if ($totalMinutes < 0) {
        $totalHours--;
        $totalMinutes += 60;
    }

    // Format the result
    $resultHours = str_pad($totalHours, 2, '0', STR_PAD_LEFT);
    $resultMinutes = str_pad($totalMinutes, 2, '0', STR_PAD_LEFT);

    return "$resultHours Hours : $resultMinutes Minutes";
}





