<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'home_team_score',
        'away_team_score',
        'date',
        'home_team_id',
        'away_team_id',
        'league_id',
        'stadium_id'
    ];
    public function league()
    {
        return $this->belongsTo(League::class);
    }
    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
}
