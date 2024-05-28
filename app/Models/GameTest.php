<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTest extends Model
{
    use HasFactory;

    protected $table = 'game_tests';

    protected $fillable = [
        'game_id',
        'test_id',
        'category_id',
        'level', 
        'max_score',
        'rounds',
        'max_errors',
        'max_time',
        'min_time',
        'creation_user',
        'update_user'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    public function category()
    {
        return $this->belongsTo(GameCategory::class, 'category_id');
    }

}
