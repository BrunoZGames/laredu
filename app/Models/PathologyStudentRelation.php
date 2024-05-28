<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PathologyStudentRelation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'pathology_id',
        'range', 
        'date',
        'note',
        'creation_date',
        'update_date',
        'creation_user',
        'update_user'
    ];
}
