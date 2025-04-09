<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $fillable = [
        'name',
        'capacity',
        'location',
        'team_id',
    ];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
