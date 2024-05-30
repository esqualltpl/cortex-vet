<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, mixed $decrypt)
 */
class Breed extends Model
{
    use HasFactory, SoftDeletes;

    public function getBreedImage($specie_type): string
    {
        $imagePath = public_path('portal/assets/img/breeds/' . $specie_type . '/' . $this->image);

        if ($this->image !== null && File::exists($imagePath)) {
            return asset('portal/assets/img/breeds/' . $specie_type . '/' . $this->image);
        } else {
            return asset('portal/assets/img/breeds/no-breed-type-selected.jpg');
        }
    }
}
