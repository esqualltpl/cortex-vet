<?php

namespace App\Helpers;
class ResponseMessage
{
    public static function ResponseNotifySuccess($header, $message)
    {
        $response['title'] = '<strong>' . $header . '</strong>';
        $response['status'] = 'success';
        $response['icon'] = 'fa fa-check';
        $response['message'] = '<br>'.$message;

        return $response;
    }

    public static function ResponseNotifyWarning($header, $message)
    {
        $response['title'] = '<strong>' . $header . '<strong>';
        $response['status'] = 'warning';
        $response['icon'] = 'fa fa-exclamation-triangle';
        $response['message'] = $message;

        return $response;
    }

    public static function ResponseNotifyInfo($header, $message)
    {
        $response['title'] = '<strong>' . $header . '<strong>';
        $response['status'] = 'info';
        $response['icon'] = 'fa fa-info';
        $response['message'] = $message;

        return $response;
    }

    public static function ResponseNotifyError($header, $message)
    {
        $response['title'] = '<strong>' . $header . '<strong>';
        $response['status'] = 'danger';
        $response['icon'] = 'fa fa-exclamation-triangle';
        $response['message'] = $message;

        return $response;
    }
}