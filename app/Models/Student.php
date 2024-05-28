<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', //foreignKey
        'idalu',
        'name', 
        'last_name',
        'last_name2',
        'course_id', //foreignKey
        'date_of_birth',
        'email',
        'dni_nif',
        'cip',
        'address_id', //foreignKey
        'creation_date',
        'update_date',
        'creation_user',
        'update_user'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function sopConfidentialDocument(): BelongsTo
    {
        return $this->belongsTo(SopConfidentialDocument::class);
    }

}
