<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutoringTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_report_id',
        'creation_date',
        'update_date',
    ];
}
