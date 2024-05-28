<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_name',
        'creation_user',
        'update_user'
    ];

    public function gameTests()
    {
        return $this->hasMany(GameTest::class, 'test_id');
    }
}
