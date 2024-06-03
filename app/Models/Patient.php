<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

/**
 * @method static count()
 * @method static where(string $string, string $string1)
 * @method static find(mixed $patient_id)
 */
class Patient extends Model
{
    use HasFactory, SoftDeletes;

    public function getPatientImage($specie_type,$breed_image): string
    {
        $imagePath = public_path('portal/assets/img/breeds/' . $specie_type . '/' . $breed_image);

        if ($breed_image !== null && File::exists($imagePath)) {
            return asset('portal/assets/img/breeds/' . $specie_type . '/' . $breed_image);
        } else {
            return asset('portal/assets/img/breeds/no-breed-type-selected.jpg');
        }
    }

    public function specieTypeInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Specie::class, 'specie_type');
    }

    public function breedInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Breed::class, 'breed');
    }

    public function practitionerInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}
