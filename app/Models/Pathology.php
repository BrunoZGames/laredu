<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pathology extends Model
{
    use HasFactory;

    protected $fillable = [
        'pathology_name',
        'note',
        'creation_date', 
        'update_date',
        'creation_user',
        'update_user'
    ];
}
