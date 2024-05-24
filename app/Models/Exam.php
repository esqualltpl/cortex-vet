<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, $id)
 * @method static find(mixed $exam_id)
 */
class Exam extends Model
{
    use HasFactory, SoftDeletes;

    public function instructionVideoInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(InstructionVideo::class, 'id', 'exam_id');
    }

    public function specieInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Specie::class, 'id');
    }

    public function breadInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Bread::class, 'id');
    }

    public function testInfo(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Testes::class,'exam_id');
    }

}
