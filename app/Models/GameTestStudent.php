<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTestStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'game_test_id',
        'test_id',
        'game_id',
        'time',
        'score',
        'errors',
        'played', 
        'creation_user',
        'update_user'
    ];

    public function tests()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function games()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function gameTests()
    {
        return $this->belongsTo(GameTest::class, 'game_test_id');
    }

    
    
}
