<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    protected $fillable = ['user_id', 'name', 'lastname1', 'lastname2', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
