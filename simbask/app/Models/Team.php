<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'dni',
        'name',
        'abbreviation',
        'picture',
        'founded_year',
        'league_id'
    ];

    public function league()
    {
        return $this->belongsTo(League::class);
    }
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function coach()
    {
        return $this->hasOne(Coach::class);
    }
    public function gamesHome()
    {
        return $this->hasMany(Game::class, 'home_team_id');
    }
    public function gamesAway()
    {
        return $this->hasMany(Game::class, 'away_team_id');
    } 
    public function stadium()
    {
        return $this->hasOne(Stadium::class);
    }
    

}
