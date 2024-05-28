<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_type',
        'created_at',
        'update_at',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
