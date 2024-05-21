<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, $id)
 * @method static find(mixed $test_id)
 */
class Testes extends Model
{
    use HasFactory, SoftDeletes;

    public function optionsInfo(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TestOptions::class, 'test_id');
    }
}
