<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, mixed $exam_id)
 */
class InstructionVideo extends Model
{
    use HasFactory, SoftDeletes;

    public function getExamVideo(): string
    {
        if($this->video !== null) {
            return asset('portal/assets/upload/exam-videos/'.$this->video);
        }else{
            return 'null';
        }
    }
}
