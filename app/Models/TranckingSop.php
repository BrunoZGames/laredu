<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranckingSop extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'student_id',
        'course_id', 
        'tracking_date',
        'notes',
        'attached_report',
        'contact_professional_id',
        'tutoring_tracking_id',
        'creation_date',
        'update_date'
    ];
}
