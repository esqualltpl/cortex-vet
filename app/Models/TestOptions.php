<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, mixed $id)
 * @method static find(int|string $test_option_id)
 */
class TestOptions extends Model
{
    use HasFactory, SoftDeletes;
}
