<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, $id)
 */
class Resource extends Model
{
    use HasFactory, SoftDeletes;

    public function getResourceVideo(): string
    {
        if($this->upload_video !== null) {
            return asset('portal/assets/upload/resources-video/'.$this->upload_video);
        }else{
            return 'null';
        }
    }

    public function getResourceInfo()
    {
        if($this->video_url !== null) {
            return ['type' => 'url', 'video' => $this->video_url];
        }
        else if($this->upload_video !== null) {
            return ['type' => 'video', 'video' => asset('portal/assets/upload/resources-video/'.$this->upload_video)];
        }else{
            return 'null';
        }
    }
}
