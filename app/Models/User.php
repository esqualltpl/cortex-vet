<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\File;

/**
 * @property mixed $picture
 * @method static where(string $string, mixed $email)
 * @method static find(mixed $decrypt)
 * @method static select($raw, $raw1)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getUserPic(): string
    {
        $picturePath = public_path('portal/assets/upload/profile-images/'.$this->picture);

        if ($this->picture !== null && File::exists($picturePath)) {
            return asset('portal/assets/upload/profile-images/'.$this->picture);
        }else{
            return asset('portal/assets/img/no-image.png');
        }
    }

    public function userInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserDetail::class, 'id', 'user_id');
    }

    public function studentInfo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Student::class, 'id', 'user_id');
    }

    public function practitionerPatientInfo(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Patient::class, 'added_by', 'id');
    }

    public function neurologistPatientInfo(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(NeuroAssessment::class, 'consult_by', 'id');
    }
}
