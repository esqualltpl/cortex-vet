<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

/**
 * @method static where(string $string, $param)
 * @method static first()
 */
class MainFirstVideo extends Model
{
    use HasFactory, SoftDeletes;

    public function getMainFirstVideo(): string
    {
        $videoPath = public_path('portal/assets/upload/main-first-videos/'.$this->video);

        if ($this->video !== null && File::exists($videoPath)) {
            return asset('portal/assets/upload/main-first-videos/'.$this->video);
        }else{
            return 'null';
        }
    }

    public function getMainFirstVideoInfo()
    {
        if($this->url !== null) {
            return ['type' => 'url', 'video' => $this->url];
        }else if($this->video !== null) {
            $videoPath = public_path('portal/assets/upload/main-first-video/'.$this->video);

            if ($this->video !== null && File::exists($videoPath)) {
                return ['type' => 'video', 'video' => asset('portal/assets/upload/main-first-video/'.$this->video)];
            }else{
                return 'null';
            }
        }else{
            return 'null';
        }
    }
}
