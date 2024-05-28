<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachedReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'report_name',
        'is_confidentiality', 
        'creation_date',
        'update_date',
        'creation_user',
        'update_user'
    ];
}
