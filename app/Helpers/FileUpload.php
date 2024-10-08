<?php
namespace App\Helpers;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FileUpload{

    public static function random_string($limit)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet); // edited
        for ($i = 0; $i < $limit; $i++) {
            $token .= $codeAlphabet[random_int(0, $max - 1)];
        }

        return $token;
    }

    public static function FileUpload($image, $folder, $oldImageName = null)
    {
        $name = date('YmdHis') . "-" . Str::uuid() . "." . $image->getClientOriginalExtension();
        $file_upload_path = file_upload_path . $folder; // Note: No trailing slash (/) after file_upload_path

        if ($image->move($file_upload_path, $name) && $oldImageName != null) {
            $filename = $file_upload_path . '/' . $oldImageName;
            if (file_exists($filename)) {
                unlink($filename);
            }
        }
        return $name;
    }


    public static function FileDelete($image, $folder, $oldImageName = null)
    {
        $file_upload_path = file_upload_path.$folder;
       $filename = $file_upload_path .'/'.$image;
     
       if (file_exists($filename))
           {
           $image?unlink($filename):'';
             }
             return $filename;

    }

   public static function humanReadableAge($dateOfBirth): string
{
    $age = 0;
    if($dateOfBirth){
        $age = Carbon::parse($dateOfBirth)->age;
    }

    return $age;
}

}
