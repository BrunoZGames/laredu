<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neurocrib extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'neurocrib_results',
        'document_path', 
        'creation_date',
        'update_date'
    ];
}
