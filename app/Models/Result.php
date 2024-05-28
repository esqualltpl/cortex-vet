<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, $id)
 * @method static find(mixed $neurolocalization_id)
 */
class Result extends Model
{
    use HasFactory, SoftDeletes;

    public function detail(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ResultDetail::class,'result_id');
    }
}
