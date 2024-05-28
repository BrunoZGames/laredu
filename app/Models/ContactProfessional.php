<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactProfessional extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'professional_name',
        'contact_date', 
        'contact_type',
        'contact_details',
        'creation_date',
        'update_date'
    ];
}
