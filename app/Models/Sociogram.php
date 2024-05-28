<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sociogram extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'questions',
        'responses', 
        'scores',
        'teacher_feedback',
        'psychologist_insight',
        'creation_date',
        'update_date'
    ];
}
