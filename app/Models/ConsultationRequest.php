<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, $null)
 */
class ConsultationRequest extends Model
{
    use HasFactory, SoftDeletes;

    public function neuroAssessmentInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(NeuroAssessment::class, 'neuro_assessment_id');
    }
}
