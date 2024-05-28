<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use App\Providers\RouteServiceProvider;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'role_id', //foreignKey
        'email',
        'image_path',
        'creation_date',
        'update_date',
        'creation_user',
        'update_user'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Relationships
     */
    public function role(): BelongsTo
    {
        // return $this->hasOne(Role::class);
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function getRedirectRoute(): string
    {
        return match ($this->role->role_type) {
            'admin' => 'admin.dashboard',
            'student' => 'student.dashboard',
            'teacher' => 'teacher.dashboard',
            'tutor' => 'tutor.dashboard',
            'psychologist' => 'psycho.dashboard',
            default => 'login',
        };
    }

    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    public function docent()
    {
        return $this->hasOne(Docent::class);
    }

    /**

   * Determina si el usuario es un administrador.

   *

   * @return bool

   */

    public function isAdmin(): bool
    {

        // Verifica si el usuario tiene un rol de administrador

        return $this->role->name === 'admin';

    }
}
