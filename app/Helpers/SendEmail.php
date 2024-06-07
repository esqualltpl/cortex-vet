<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;

/**
 * @method static where(string $string, $param)
 */
class SendEmail
{
    public static function email($emailTemplate, $toEmail, $fromEmail, $subject, $emailData, $pdfFile = null)
    {
        Mail::send($emailTemplate, compact('emailData'), function ($message) use ($toEmail, $fromEmail, $subject, $pdfFile) {
            $message->to($toEmail)
                ->subject($subject);

            if ($pdfFile != null)
                $message->attach($pdfFile); // Attach the PDF file
        });
    }
}
