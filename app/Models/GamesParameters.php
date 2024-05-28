<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamesParameters extends Model
{
    use HasFactory;

    protected $table = 'games_parameters';

    protected $fillable = [
        'game_id',
        'level',
        'max_scores',
        'rounds',
        'max_errors',
        'max_time',
        'min_time'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
