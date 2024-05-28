<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SopConfidentialDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', //foreignKey
        'document_type',
        'document_path',
        'creation_date',
        'update_date',
    ];

    /**
     * Relationships
     */

    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }
}
